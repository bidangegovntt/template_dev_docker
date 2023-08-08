<?php

namespace App\Http\Livewire;

use App\Actions\Fortify\PasswordValidationRules;
use Livewire\Component;
use Auth;

class ProfileEdit extends Component
{
    use PasswordValidationRules;

    public $name;

    public $password;

    public $password_confirmation;

    public $current_password;

    public $email;

    public function render()
    {
        $user = Auth::user();

        $this->user = $user;
        $this->name = $this->user->name;
        $this->email = $this->user->email;

        return view('livewire.profile-edit', ['user' => $this->user]);
    }

    public function save()
    {
        $rules['name'] = ['required'];

        if ($this->password)
        {
            $rules['current_password'] = ['current_password'];
            $rules['password'] = $this->passwordRules();
        }

        $rules && $this->validate($rules);

        $user = Auth::user();

        if (!$user) {
            session()->flash('msg-error', 'Unknown user');
            return;
        }

        if (!empty($this->password))
        {
            $user->setPasswordFromPlain($this->password);
        }

        $user->name = $this->name;

        $user->save();

        $this->reset_field();

        session()->flash('msg-success', 'Update sukses');
    }


    private function reset_field()
    {
        $this->current_password = null;
        $this->password = null;
        $this->password_confirmation = null;
    }
}
