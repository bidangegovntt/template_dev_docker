<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Innovator;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use FormFactory;
use Illuminate\Http\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;

class InnovatorController extends Controller
{
    use CreatesForms, ValidatesForms;

    private $perPage = 10;

    public function index()
    {
        $innovators = Innovator::fromLatest()->paginate($this->perPage);

        return view('admin.innovator.index', compact('innovators'));
    }

    public function show(Innovator $innovator)
    {
        return view('admin.innovator.show', compact('innovator'));
    }

    public function create(Request $request)
    {
        $innovator = Innovator::make();
        $innovator->photo = 'dummy.jpeg';

        $form = FormFactory::create(FormType::class, $innovator)
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
            $innovator->save();

            return redirect()->back()->withStatus('Innovator saved');
        }

        return view('admin.innovator.create', ['form' => $form->createView()]);
    }

    public function edit(Innovator $innovator)
    {
        $form = FormFactory::create(FormType::class, $innovator)
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
            $innovator->save();

            return redirect()->back()->withStatus('Innovator saved');
        }

        return view('admin.innovator.edit', [
            'form' => $form->createView(),
            'innovator' => $innovator
        ]);
    }
}
