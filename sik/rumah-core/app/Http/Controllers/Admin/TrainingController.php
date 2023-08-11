<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Models\TrainingCategory;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use Illuminate\Http\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use App\Traits\UploadFormFile;
use Storage;
use Barryvdh\Form\Facade\FormFactory;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Helpers\Slugger;

class TrainingController extends Controller
{
    use CreatesForms, ValidatesForms, UploadFormFile;

    private $perPage = 10;

    public function index(Request $request)
    {
        $search = $request->query('search');

        $trainings = Training::latest();

        if ($search) {
            $trainings->where(function ($query) use ($search) {
                $query->orWhere('title', 'like', '%' . str_replace(' ', '%', $search) . '%');
                $query->orWhere('content', 'like', '%' . str_replace(' ', '%', $search) . '%');
            });
        }

        $trainings = $trainings->paginate($this->perPage);

        return view('admin.training.index', compact('trainings'));
    }

    public function show(Training $training)
    {
        return view('admin.training.show', compact('training'));
    }

    public function create(Request $request)
    {
        $training = Training::make();

        $form = $this->buildForm($training);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            // $infographics = $this->uploadFileFormTo(
            //     $form->get('infographics'),
            //     Storage::disk('public')->path($training->getInfographicsPath())
            // );

            // if ($infographics) {
            //     $training->setInfographicsFromBasename($infographics);
            // }

            // $photo = $this->uploadFileFormTo(
            //     $form->get('photo'),
            //     Storage::disk('public')->path($training->getPhotoPath())
            // );

            // if ($photo) {
            //     $training->setPhotoFromBasename($photo);
            // }

            // $trainingFile = TrainingFile::make();

            // $attachment_file = $this->uploadFileFormTo(
            //     $form->get('attachment_file'),
            //     Storage::disk('public')->path($trainingFile->getTrainingFilePath())
            // );

            // $trainingFiles = [];
            // if ($attachment_file) {
            //     $trainingFile->setFileFromBasename($attachment_file);

            //     $trainingFiles[] = $trainingFile;
            // }

            $photo = $this->uploadFileFormTo(
                $form->get('photo'),
                Storage::disk('public')->path($training->getPhotoPath())
            );

            $training->setPhotoFromBasename($photo);

            $training->save();

            // if ($trainingFiles)
            // {
            //     $training->innovationFiles()->saveMany($trainingFiles);
            // }

            return redirect()->back()->withStatus('Training saved');
        }

        return view('admin.training.create', ['form' => $form->createView(), 'training' => $training]);
    }

    public function edit(Training $training)
    {
        $form = $this->buildForm($training);

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            // $infographics = $this->uploadFileFormTo(
            //     $form->get('infographics'),
            //     Storage::disk('public')->path($training->getInfographicsPath())
            // );

            // if ($infographics) {
            //     $training->setInfographicsFromBasename($infographics);
            // }

            // $photo = $this->uploadFileFormTo(
            //     $form->get('photo'),
            //     Storage::disk('public')->path($training->getPhotoPath())
            // );

            // if ($photo) {
            //     $training->setPhotoFromBasename($photo);
            // }

            // $trainingFile = TrainingFile::make();

            // $attachment_file = $this->uploadFileFormTo(
            //     $form->get('attachment_file'),
            //     Storage::disk('public')->path($trainingFile->getTrainingFilePath())
            // );

            // $trainingFiles = [];
            // if ($attachment_file) {
            //     $trainingFile->setFileFromBasename($attachment_file);

            //     $trainingFiles[] = $trainingFile;
            // }
			
            $photo = $this->uploadFileFormTo(
                $form->get('photo'),
                Storage::disk('public')->path($training->getPhotoPath())
            );

            $training->setPhotoFromBasename($photo);

            $training->save();

            // if ($trainingFiles)
            // {
            //     // TODO filter only new attachment only to be saved
            //     $training->innovationFiles()->delete();

            //     $training->innovationFiles()->saveMany($trainingFiles);
            // }

            return redirect()->back()->withStatus('Training saved');
        }

        return view('admin.training.edit', [
            'form' => $form->createView(),
            'training' => $training
        ]);
    }

    public function update()
    {
    }

    public function delete($id)
    {
        $url_previous = url()->previous();

        Training::find($id)->delete();

        return redirect()->to($url_previous);
    }

    private function buildForm($model)
    {
        $model->training_date = date_create($model->training_date);
        // $innovators = User::role(DefaultRole::INNOVATOR)->get();
        // $trainingAdmins = User::role(DefaultRole::INNOVATION_ADMIN)->get();

        $form = FormFactory::create(FormType::class, $model)
            ->add('title', TextType::class, [
                'label' => 'Judul',
                'rules' => 'required',
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo',
                'data_class' => null,
                'required' => false,
                'mapped' => false,
            ])
            // ->add('training_date', DateType::class, [
            //     'widget' => 'single_text',
            //     'format' => 'dd-MM-yyyy',
            //     'html5' => false,
            //     'label' => 'Tanggal Training',
            //     'rules' => 'required',
            //     'attr' => [
            //         'readonly' => true
            //     ]
            // ])
            ->add('content', TextAreaType::class, [
                'rules' => 'required',
            ])
            ->add('training_category_id', ChoiceType::class, [
                'label' => 'Kategori',
                'choices' => TrainingCategory::all()->pluck('id', 'name'),
                'required' => false,
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
            //     'choices' => $trainingAdmins->pluck('id', 'name'),
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
