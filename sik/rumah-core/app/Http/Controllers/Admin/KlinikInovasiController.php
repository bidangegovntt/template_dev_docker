<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LearningMaterial;
use App\Models\LearningMaterialAttachment;
use App\Traits\UploadFormFile;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use FormFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class KlinikInovasiController extends Controller
{
    use CreatesForms, ValidatesForms, UploadFormFile;

    private $perPage = 10;

    public function index(Request $request)
    {
        $search = $request->query('search');

        $learningMaterials = LearningMaterial::latest();

        if ($search) {
            $search = str_replace(' ', '%', $search);
            $learningMaterials->where(function ($query) use ($search) {
                $query->orWhere('title', 'like', '%' . $search . '%');
                $query->orWhere('content', 'like', '%' . $search . '%');
                $query->orWhere('writer_name', 'like', '%' . $search . '%');
            });
        }

        $learningMaterials = $learningMaterials->paginate($this->perPage);

        return view('admin.klinik-inovasi.index', compact('learningMaterials'));
    }

    public function show(LearningMaterial $learningMaterial)
    {
        return view('admin.learning-material.show', compact('learning-material'));
    }

    public function create(Request $request)
    {
        $learningMaterial = LearningMaterial::make();

        $form = $this->buildForm($learningMaterial);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {

            $learningMaterialAttachments = [];
            $attachment_files = $form->get('attachment_files');

            if ($attachment_files) {
                foreach ($attachment_files as $attachment) {
                    $learningMaterialAttachment = LearningMaterialAttachment::make();

                    $attachmentFile = $this->uploadFileFormTo(
                        $attachment,
                        Storage::disk('public')->path($learningMaterialAttachment->getFilePath())
                    );

                    if ($attachmentFile) {
                        $learningMaterialAttachment->setFileFromBasename($attachmentFile);

                        $learningMaterialAttachments[] = $learningMaterialAttachment;
                    }
                }
            }

            // $learningMaterial->created_by = Auth::user()->id;

            $learningMaterial->save();

            if ($learningMaterialAttachments) {
                $learningMaterial->attachments()->saveMany($learningMaterialAttachments);
            }

            return redirect(route('admin.klinik-inovasi.edit', ['learningMaterial' => $learningMaterial]))
                ->withStatus('Content saved');
        }

        return view('admin.klinik-inovasi.create', [
            'form' => $form->createView(),
        ]);
    }

    public function edit(LearningMaterial $learningMaterial)
    {
        $form = $this->buildForm($learningMaterial);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {

            $learningMaterialAttachments = [];
            $attachment_files = $form->get('attachment_files');

            if ($attachment_files) {

                foreach ($attachment_files as $attachment) {
                    $learningMaterialAttachment = LearningMaterialAttachment::make();

                    $attachmentFile = $this->uploadFileFormTo(
                        $attachment,
                        Storage::disk('public')->path($learningMaterialAttachment->getFilePath())
                    );

                    if ($attachmentFile) {
                        $learningMaterialAttachment->setFileFromBasename($attachmentFile);

                        $learningMaterialAttachments[] = $learningMaterialAttachment;
                    }
                }
            }

            // $innovation->updated_by = Auth::user()->id;

            $learningMaterial->save();

            if ($learningMaterialAttachments) {
                $learningMaterial->attachments()->saveMany($learningMaterialAttachments);
            }

            return redirect()->back()->withStatus('Klinik Inovasi saved');
        }

        return view('admin.klinik-inovasi.edit', [
            'form' => $form->createView(),
            'learningMaterial' => $learningMaterial
        ]);
    }

    public function update()
    {
    }

    public function delete($id)
    {
        $url_previous = url()->previous();

        $lm = LearningMaterial::find($id);

        $lm->delete();

        $lm->deleted_by = Auth::user()->id;

        $lm->save();

        // LearningMaterial::find($id)->update(['deleted_by' => Auth::user()->id]);

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
        $form = FormFactory::create(FormType::class, $model)
            ->add('title', TextType::class, [
                'label' => 'Judul',
                'rules' => 'required',
                'attr' => [
                    'autocomplete' => 'off'
                ],
            ])
            ->add('content', TextAreaType::class, [
                'label' => 'Isi',
                'rules' => 'required',
            ])
            ->add('writer_name', TextType::class, [
                'required' => false,
            ])
            ->add('attachment_files', CollectionType::class, [
                'entry_type' => FileType::class,
                'entry_options' => [
                    'attr' => [
                        'class' => 'attachment-file flex-wrapper flex inline-flex',
                    ],
                    'row_attr' => [
                        'class' => 'w-4/5 mb-2 inline-flex',
                    ],
                    'label_attr' => ['class' => 'hidden'],
                    'label' => false,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'prototype_data' => null,
                'prototype_name' => 'add_new_file',
                'required' => false,
                'mapped' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save'
            ]);

        return $form;
    }
}
