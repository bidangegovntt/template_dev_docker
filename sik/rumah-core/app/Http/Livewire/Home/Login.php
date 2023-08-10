<?php

namespace App\Http\Livewire\Home;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $pergi_ke;

    public function render()
    {
        $this->pergi_ke = request()->query('pergi-ke');

        return view('livewire.home.login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where("email", '=', $this->email)->first();

        if ($user) {
			if (! $user->isActive()) {
                session()->flash('msg-error', 'Pengguna berstatus non aktif');
				$this->password = null;
			}
			elseif (Hash::check($this->password, $user->password)) {
                Auth::login($user);

                $this->reset_field();

                session()->flash('msg-success', 'Login Berhasil .. Harap Tunggu');

                $this->dispatchBrowserEvent('goto', ['url' => $this->redirectIfSuccess()]);
            } else {
                session()->flash('msg-error', 'Email atau password salah');
				$this->password = null;
            }
        } else {
            session()->flash('msg-error', 'Email tidak ditemukan');
			$this->password = null;
        }
    }

    private function reset_field()
    {
        $this->email = null;
        $this->password = null;
    }

    private function redirectIfSuccess()
    {
        return ($this->pergi_ke != '') ? $this->pergi_ke : asset('');
    }
}
