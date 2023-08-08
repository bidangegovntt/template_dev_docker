<?php

namespace App\Http\Livewire\Home;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.home.register');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if ($this->password != $this->password_confirmation) {
            session()->flash('msg-error', 'Password konfirmasi harus sama');
            return;
        }

        $user = new User();

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->assignRole('publik');

        $register = $user->save();

        if ($register) {
            redirect('home/login')->with('msg-success', 'Akun sudah dibuat, silahkan login');
        } else {
            session()->flash('msg-error', 'Kendala pendaftaran, hubungi administrator');
        }
    }

    private function reset_field()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
    }
}
