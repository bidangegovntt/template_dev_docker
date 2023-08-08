<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FieldTrip;
use App\Models\Innovation;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use Illuminate\Http\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use App\Traits\UploadFormFile;
use Barryvdh\Form\Facade\FormFactory;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FieldtripController extends Controller
{
    use CreatesForms, ValidatesForms, UploadFormFile;

    private $perPage = 10;

    public function index(Request $request)
    {
        $search = $request->query('search');

        $fieldtrips = FieldTrip::latest();

        if ($search) {
            $fieldtrips->where(function ($query) use ($search) {
                $query->orWhere('title', 'like', '%' . str_replace(' ', '%', $search) . '%');
                $query->orWhere('content', 'like', '%' . str_replace(' ', '%', $search) . '%');
            });
        }

        $fieldtrips = $fieldtrips->paginate($this->perPage);

        return view('admin.fieldtrip.index', compact('fieldtrips'));
    }

    public function show(FieldTrip $fieldtrip)
    {
        return view('admin.fieldtrip.show', compact('fieldtrip'));
    }

    public function create(Request $request)
    {
        $fieldtrip = FieldTrip::make();

        $form = $this->buildForm($fieldtrip);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            // $infographics = $this->uploadFileFormTo(
            //     $form->get('infographics'),
            //     Storage::disk('public')->path($fieldtrip->getInfographicsPath())
            // );

            // if ($infographics) {
            //     $fieldtrip->setInfographicsFromBasename($infographics);
            // }

            // $photo = $this->uploadFileFormTo(
            //     $form->get('photo'),
            //     Storage::disk('public')->path($fieldtrip->getPhotoPath())
            // );

            // if ($photo) {
            //     $fieldtrip->setPhotoFromBasename($photo);
            // }

            // $fieldtripFile = TrainingFile::make();

            // $attachment_file = $this->uploadFileFormTo(
            //     $form->get('attachment_file'),
            //     Storage::disk('public')->path($fieldtripFile->getTrainingFilePath())
            // );

            // $fieldtripFiles = [];
            // if ($attachment_file) {
            //     $fieldtripFile->setFileFromBasename($attachment_file);

            //     $fieldtripFiles[] = $fieldtripFile;
            // }

            $fieldtrip->save();

            // if ($fieldtripFiles)
            // {
            //     $fieldtrip->innovationFiles()->saveMany($fieldtripFiles);
            // }

            return redirect()->back()->withStatus('Kunjungan Lapangan tersimpan');
        }

        return view('admin.fieldtrip.create', ['form' => $form->createView()]);
    }

    public function edit(FieldTrip $fieldtrip)
    {
        $form = $this->buildForm($fieldtrip);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            // $infographics = $this->uploadFileFormTo(
            //     $form->get('infographics'),
            //     Storage::disk('public')->path($fieldtrip->getInfographicsPath())
            // );

            // if ($infographics) {
            //     $fieldtrip->setInfographicsFromBasename($infographics);
            // }

            // $photo = $this->uploadFileFormTo(
            //     $form->get('photo'),
            //     Storage::disk('public')->path($fieldtrip->getPhotoPath())
            // );

            // if ($photo) {
            //     $fieldtrip->setPhotoFromBasename($photo);
            // }

            // $fieldtripFile = TrainingFile::make();

            // $attachment_file = $this->uploadFileFormTo(
            //     $form->get('attachment_file'),
            //     Storage::disk('public')->path($fieldtripFile->getTrainingFilePath())
            // );

            // $fieldtripFiles = [];
            // if ($attachment_file) {
            //     $fieldtripFile->setFileFromBasename($attachment_file);

            //     $fieldtripFiles[] = $fieldtripFile;
            // }

            $fieldtrip->save();

            // if ($fieldtripFiles)
            // {
            //     // TODO filter only new attachment only to be saved
            //     $fieldtrip->innovationFiles()->delete();

            //     $fieldtrip->innovationFiles()->saveMany($fieldtripFiles);
            // }

            return redirect()->back()->withStatus('Kunjungan Lapangan tersimpan');
        }

        return view('admin.fieldtrip.edit', [
            'form' => $form->createView(),
            // 'innovation' => $fieldtrip
        ]);
    }

    public function update()
    {
    }

    public function delete($id)
    {
        $url_previous = url()->previous();

        FieldTrip::find($id)->delete();

        return redirect()->to($url_previous);
    }

    private function buildForm($model)
    {
        $model->visit_date = date_create($model->visit_date);
        $innovation = Innovation::all();

        /* visit_date
            title
            visitor_name
            content
            innovation_id
         */

        $form = FormFactory::create(FormType::class, $model)
            ->add('title', TextType::class, [
                'label' => 'Judul',
                'rules' => 'required',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('visitor_name', TextType::class, [
                'label' => 'Nama Pengunjung',
                'rules' => 'required',
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('visit_date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'html5' => false,
                'label' => 'Tanggal Kunjungan',
                'rules' => 'required',
                'attr' => [
                    'readonly' => true
                ]
            ])
            ->add('content', TextAreaType::class, [
                'rules' => 'required',
            ])
            ->add('innovation_id', ChoiceType::class, [
                'label' => 'Inovasi',
                'choices' => $innovation->pluck('id', 'title'),
            ])
            // ->add('description', TextAreaType::class, [
            //     'rules' => 'required',
            // ])
            // ->add('address', TextType::class, [
            //     'required' => false,
            // ])
            // ->add('city_id', ChoiceType::class, [
            //     'choices' => City::pluck('id', 'name'),
            //     'label' => 'Kota',
            //     'required' => false,
            // ])
            // ->add('year_start', ChoiceType::class, [
            //     'label' => 'Tahun',
            //     'choices' => $this->getYearStart('2010', date('Y')),
            // ])
            // ->add('innovator_id', ChoiceType::class, [
            //     'label' => 'Inovator',
            //     'choices' => $innovators->pluck('id', 'name'),
            //     'required' => false,
            // ])
            // ->add('innovation_admin_id', ChoiceType::class, [
            //     'label' => 'Admin Inovasi',
            //     'choices' => $fieldtripAdmins->pluck('id', 'name'),
            //     'required' => false,
            // ])
            // ->add('sustainability_status_id', ChoiceType::class, [
            //     'choices' => SustainabilityStatus::pluck('id', 'name'),
            //     'label' => 'Status Keberlanjutan',
            //     'required' => false,
            // ])
            // ->add('published_status', ChoiceType::class, [
            //     'choices' => $this->getPublishedStatus(),
            // ])
            // ->add('achievement', TextType::class, [
            //     'required' => false,
            // ])
            // ->add('photo', FileType::class, [
            //     'data_class' => null,
            //     'required' => false,
            //     'mapped' => false,
            // ])
            // ->add('infographics', FileType::class, [
            //     'data_class' => null,
            //     'mapped' => false,
            //     'required' => false,
            // ])
            // ->add('attachment_file', FileType::class, [
            //     'data_class' => null,
            //     'mapped' => false,
            //     'required' => false,
            // ])
            // ->add('video_url', TextAreaType::class, [
            //     'required' => false,
            // ])
            ->add('save', SubmitType::class, [
                'label' => 'Save'
            ]);

        return $form;
    }
}
