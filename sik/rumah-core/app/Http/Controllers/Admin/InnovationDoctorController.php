<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InnovationDoctor;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use FormFactory;
use Illuminate\Http\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;

class InnovationDoctorController extends Controller
{
    use CreatesForms, ValidatesForms;

    private $perPage = 10;

    public function index()
    {
        $innovationDoctors = InnovationDoctor::paginate($this->perPage);

        return view('admin.innovation-doctor.index', compact('innovationDoctors'));
    }

    public function show(InnovationDoctor $innovationDoctor)
    {
        return view('admin.innovation-doctor.show', compact('innovationDoctor'));
    }

    public function create(Request $request)
    {
        $innovationDoctor = InnovationDoctor::make();
        $innovationDoctor->photo = 'dummy.jpeg';

        $form = FormFactory::create(FormType::class, $innovationDoctor)
            ->add('fullname', TextType::class, [
                'rules' => 'required',
            ])
            ->add('description', TextAreaType::class, [
                'rules' => 'required',
            ])
            ->add('instance_name', TextType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Save'
            ])
            ;

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            $innovationDoctor->save();

            return redirect()->back()->withStatus('Innovation doctor saved');
        }

        return view('admin.innovation-doctor.create', ['form' => $form->createView()]);
    }

    public function edit(InnovationDoctor $innovationDoctor)
    {
        $form = FormFactory::create(FormType::class, $innovationDoctor)
            ->add('fullname', TextType::class, [
                'rules' => 'required',
            ])
            ->add('description', TextAreaType::class, [
                'rules' => 'required',
            ])
            ->add('instance_name', TextType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Save'
            ])
            ;

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            $innovationDoctor->save();

            return redirect()->back()->withStatus('Innovation doctor saved');
        }

        return view('admin.innovation-doctor.edit', [
            'form' => $form->createView(),
            'innovationDoctor' => $innovationDoctor
        ]);
    }
}
