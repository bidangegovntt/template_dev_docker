<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use Auth;
use Barryvdh\Form\CreatesForms;
use Barryvdh\Form\ValidatesForms;
use FormFactory;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;

class UserController extends Controller
{
    use CreatesForms, ValidatesForms;

    private $perPage = 15;

    public function index(Request $request)
    {
        $search = $request->query('search');
        $user = Auth::user();

        $users = User::orderBy('name');

        if ($search) {
            $search = str_replace(' ', '%', $search);
            $users->where(function ($query) use ($search) {
                $query->orWhere('name', 'like', '%' . $search . '%');
                $query->orWhere('description', 'like', '%' . $search . '%');
                $query->orWhere('instance_name', 'like', '%' . $search . '%');
            });
        }

        if ($user->hasRole('admin biro kabupaten')) {
            $users->where('city_id', $user->city_id);
        }

        $users = $users->paginate($this->perPage);

        return view('admin.user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function create(Request $request)
    {
        $user = User::make();
        $user->profile_photo_path = '';

        $form = $this->buildUserForm($user);

        $form->handleRequest();
        if ($form->isSubmitted() && $form->isValid()) {
            // only change if filled
            if ($password = $form->get('password')->getData()) {
                $user->setPasswordFromPlain($password);
            }

            $roles = Role::find($form->get('roles')->getData());
            $user->assignRole($roles);

            $user->uploadPhotoProfileForm($form['profile_photo_path']);

            $user->save();

            return redirect()->back()->withStatus('User saved');
        }

        return view('admin.user.create', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        $form = $this->buildUserForm($user);
        $form->get('roles')->setData($user->roles->pluck('id')->toArray());

        $form->handleRequest();

        if ($form->isSubmitted() && $form->isValid()) {
            // only change if filled
            if ($password = $form->get('password')->getData()) {
                $user->setPasswordFromPlain($password);
            }

            $roles = Role::find($form->get('roles')->getData());
            $user->roles()->detach();
            $user->roles()->saveMany($roles);

            $user->uploadPhotoProfileForm($form->get('profile_photo_path'));

            $user->save();

            return redirect()->back()->withStatus('User saved');
        }

        return view('admin.user.edit', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    private function buildUserForm($user)
    {
        $form = FormFactory::create(FormType::class, $user)
            ->add('name', TextType::class, [
                'rules' => 'required',
            ])
            ->add('email', EmailType::class, [
                'required' => false,
            ])
            ->add('password', PasswordType::class, [
                'required' => false,
                'mapped' => false,
            ])
            ->add('instance_name', TextType::class, [
                'required' => false,
            ]);

        if (Auth::user()->hasRole('admin biro kabupaten|admin bagian kabupaten')) {
            $form->add('city_id', HiddenType::class, [
                'label_attr' => ['class' => 'hidden'],
                'empty_data' => Auth::user()->city_id,

            ]);
        } else {
            $form->add('city_id', ChoiceType::class, [
                'choices' => City::OrderBy('name')->get()->pluck('id', 'name'),
                'required' => false,
            ]);
        }

        $form->add('description', TextAreaType::class, [
            'required' => false,
        ])
            ->add('profile_photo_path', FileType::class, [
                'required' => false,
                'data_class' => null,
                'mapped' => false,
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => Role::all()->pluck('id', 'name'),
                'required' => false,
                'mapped' => false,
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save'
            ]);

        return $form;
    }
}
