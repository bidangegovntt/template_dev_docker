<?php

namespace App\Http\Controllers\Admin;

use App\Constants\DefaultRole;
use App\Http\Controllers\Controller;
use App\Models\AttachmentType;
use App\Models\City;
use App\Models\Innovation;
use App\Models\InnovationFile;
use App\Models\SustainabilityStatus;
use App\Models\InnovationCategory;
use App\Models\Innovator;
use App\Models\InnovationDoctor;
use Auth;
use App\Models\User;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use FormFactory;
use Illuminate\Http\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckBoxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormFactoryInterface;
use Str;
use Storage;
use App\Traits\UploadFormFile;
use App\FormTypes\InnovationAttachmentFileType;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class InnovationController extends Controller
{
    use CreatesForms, ValidatesForms, UploadFormFile;

    private $perPage = 10;

    public function index(Request $request)
    {
        $search = $request->query('search');

        $innovations = Innovation::latest();

        $user = Auth::user();

        if ($search) {
            $search = str_replace(' ', '%', $search);
            $innovations->where(function ($query) use ($search) {
                $query->orWhere('title', 'like', '%' . $search . '%');
                $query->orWhere('summary', 'like', '%' . $search . '%');
                $query->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        if ($user->hasRole('admin inovasi')) {
            $innovations->where(function ($query) use ($user) {
                $query->orWhere('innovation_admin_id', $user->id);
                $query->orWhere('created_by', $user->id);
            });
        }

        if ($user->hasRole('admin biro kabupaten') or $user->hasRole('admin biro provinsi')) {
            $innovations->where('city_id', $user->city_id);
        }

        $innovations = $innovations->paginate($this->perPage);

        return view('admin.innovation.index', compact('innovations'));
    }

    public function show(Innovation $innovation)
    {
        return view('admin.innovation.show', compact('innovation'));
    }

    public function create(Request $request)
    {
        $innovation = Innovation::make();

        $form = $this->buildForm($innovation);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            $infographics = $this->uploadFileFormTo(
                $form->get('infographics'),
                Storage::disk('public')->path($innovation->getInfographicsPath())
            );

            $innovation->setInfographicsFromBasename($infographics);

            $photo = $this->uploadFileFormTo(
                $form->get('photo'),
                Storage::disk('public')->path($innovation->getPhotoPath())
            );

            $innovation->setPhotoFromBasename($photo);

            $innovationFiles = [];
            $attachment_files = $form->get('attachment_files');

            if ($attachment_files) {
                foreach ($attachment_files as $attachment) {
                    $innovationFile = InnovationFile::make();

                    $attachmentFile = $this->uploadFileFormTo(
                        $attachment->get('attachment_file'),
                        Storage::disk('public')->path($innovationFile->getInnovationFilePath())
                    );

                    if ($attachment['attachment_type']->getData() && $attachmentFile) {
                        $innovationFile->attachment_type_id = $attachment['attachment_type']->getData();
                        $innovationFile->setFileFromBasename($attachmentFile);

                        $innovationFiles[] = $innovationFile;
                    }
                }
            }

            $innovation->created_by = Auth::user()->id;

            $innovation->save();

            if ($innovationFiles) {
                $innovation->innovationFiles()->saveMany($innovationFiles);
            }

            return redirect(route('admin.innovation.edit', ['innovation' => $innovation]))
                ->withStatus('Innovation saved');
        }

        return view('admin.innovation.create', [
            'form' => $form->createView(),
        ]);
    }

    public function edit(Innovation $innovation)
    {
        $form = $this->buildForm($innovation);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            $infographics = $this->uploadFileFormTo(
                $form->get('infographics'),
                Storage::disk('public')->path($innovation->getInfographicsPath())
            );

            if ($infographics) {
                $innovation->setInfographicsFromBasename($infographics);
            }

            $photo = $this->uploadFileFormTo(
                $form->get('photo'),
                Storage::disk('public')->path($innovation->getPhotoPath())
            );

            if ($photo) {
                $innovation->setPhotoFromBasename($photo);
            }

            // $attachment_file = $this->uploadFileFormTo(
            //     $form->get('attachment_file'),
            //     Storage::disk('public')->path($innovationFile->getInnovationFilePath())
            // );

            $innovationFiles = [];
            $attachment_files = $form->get('attachment_files');

            if ($attachment_files) {
                // TODO filter only has attachment type and file can be processed later

                foreach ($attachment_files as $attachment) {
                    $innovationFile = InnovationFile::make();

                    $attachmentFile = $this->uploadFileFormTo(
                        $attachment->get('attachment_file'),
                        Storage::disk('public')->path($innovationFile->getInnovationFilePath())
                    );

                    if ($attachment['attachment_type']->getData() && $attachmentFile) {
                        $innovationFile->attachment_type_id = $attachment['attachment_type']->getData();
                        $innovationFile->setFileFromBasename($attachmentFile);

                        $innovationFiles[] = $innovationFile;
                    }
                }
            }

            $innovation->updated_by = Auth::user()->id;

            $innovation->save();

            if ($innovationFiles) {
                $innovation->innovationFiles()->saveMany($innovationFiles);
            }

            return redirect()->back()->withStatus('Innovation saved');
        }

        return view('admin.innovation.edit', [
            'form' => $form->createView(),
            'innovation' => $innovation
        ]);
    }

    public function update()
    {
    }

    public function delete($id)
    {
        $url_previous = url()->previous();

        Innovation::find($id)->delete();

        return redirect()->to($url_previous);
    }

    private function getYearStart($from, $to)
    {
        $year_range = array_reverse(range($from, $to));

        return array_combine($year_range, $year_range);
    }

    private function getPublishedStatus()
    {
        $status = [
            'published',
            'draft',
        ];

        return array_combine($status, $status);
    }

    private function buildForm($model)
    {
        $user = Auth::user();

        $innovators = User::role(DefaultRole::INNOVATOR)->get();
        $innovationAdmins = User::role(DefaultRole::INNOVATION_ADMIN);

        if ($user->hasRole('admin inovasi')) {
            $innovationAdmins->where('id', $user->id);
        }

        if ($user->hasRole('admin biro kabupaten') or $user->hasRole('admin biro provinsi')) {
            $innovationAdmins->where('city_id', $user->city_id);
        }

        $innovationAdmins = $innovationAdmins->get();

        $form = FormFactory::create(FormType::class, $model)
            ->add('title', TextType::class, [
                'label' => 'Judul',
                'rules' => 'required',
            ])
            ->add('summary', TextAreaType::class, [
                'rules' => 'required',
            ])
            ->add('description', TextAreaType::class, [
                'rules' => 'required',
            ])
            ->add('address', TextType::class, [
                'required' => false,
            ])
            ->add('city_id', ChoiceType::class, [
                'choices' => City::OrderBy('name')->get()->pluck('id', 'name'),
                'label' => 'Kota',
                'required' => false,
            ])
            ->add('year_start', ChoiceType::class, [
                'label' => 'Tahun',
                'choices' => $this->getYearStart('2010', date('Y')),
            ])
            ->add('category_id', ChoiceType::class, [
                'choices' => InnovationCategory::pluck('id', 'name'),
                'label' => 'Kategori',
                'required' => false,
            ])
            ->add('innovator_id', ChoiceType::class, [
                'label' => 'Inovator',
                'choices' => $innovators->pluck('id', 'name'),
                'required' => false,
            ])
            ->add('innovation_admin_id', ChoiceType::class, [
                'label' => 'Admin Inovasi',
                'choices' => $innovationAdmins->pluck('id', 'name'),
                'required' => false,
            ])
            ->add('sustainability_status_id', ChoiceType::class, [
                'choices' => SustainabilityStatus::pluck('id', 'name'),
                'label' => 'Status Keberlanjutan',
                'required' => false,
            ])
            ->add('published_status', ChoiceType::class, [
                'label' => 'Status Publikasi',
                'choices' => $this->getPublishedStatus(),
            ])
            ->add('achievement', TextType::class, [
                'label' => 'Achievement',
                'required' => false,
            ])
            ->add('latitude', HiddenType::class, [
                'label_attr' => ['class' => 'hidden'],
                'required' => false,
            ])
            ->add('longitude', HiddenType::class, [
                'label_attr' => ['class' => 'hidden'],
                'required' => false,
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo',
                'data_class' => null,
                'required' => false,
                'mapped' => false,
            ])
            ->add('infographics', FileType::class, [
                'data_class' => null,
                'mapped' => false,
                'required' => false,
            ])
            ->add('attachment_files', CollectionType::class, [
                'entry_type' => InnovationAttachmentFileType::class,
                'entry_options' => [
                    'attr' => [
                        'class' => 'attachment-file flex-wrapper flex inline-flex',
                    ],
                    'row_attr' => [
                        'class' => 'w-4/5 mb-2 inline-flex',
                    ],
                    'label_attr' => ['class' => 'hidden'],
                    'label' => false,
                    'attachment_type_options' => [
                        'label' => false,
                        'choices' => AttachmentType::all()->pluck('id', 'name'),
                        'attr' => [
                            'class' => 'bg-white rounded border border-gray-300 focus:border-indigo-500'
                        ],
                        'row_attr' => [
                            'class' => 'inner-flex mb-1 mx-3'
                        ],
                    ],
                    'attachment_file_options' => [
                        'label' => false,
                        'attr' => [
                            'class' => 'bg-yellow'
                        ],
                        'row_attr' => [
                            'class' => 'inner-flex mb-1 mx-3'
                        ],
                    ],
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'prototype_data' => null,
                'prototype_name' => 'add_new_file',
                'required' => false,
                'mapped' => false,
            ])
            ->add('video_url', TextAreaType::class, [
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save'
            ]);

        return $form;
    }
}
