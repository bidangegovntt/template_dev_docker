<?php

namespace App\Http\Livewire\Home;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPassword extends Component
{
    public $token;
    public $is_token_invalid;
    public $user_id;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        $data_token = DB::table('password_resets')->where('token', $this->token);

        if ($data_token->count() > 0) {
            $this->is_token_invalid = 0;

            $user = User::where('email', $data_token->first()->email)->first();

            $this->user_id = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
        } else {
            $this->is_token_invalid = 1;

            $this->user_id = '';
            $this->name = '';
            $this->email = '';
        }

        return view('livewire.home.reset-password');
    }

    public function reset_password()
    {
        $this->validate([
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if ($this->password != $this->password_confirmation) {
            session()->flash('msg-error', 'Password konfirmasi harus sama');
            return;
        }

        $user = User::find($this->user_id);

        $user->password = Hash::make($this->password);

        $register = $user->save();

        DB::table('password_resets')->where('email', $this->email)->delete();

        if ($register) {
            redirect('home/login')->with('msg-success', 'Password berhasil direset, silahkan login');
        } else {
            session()->flash('msg-error', 'Kendala Sistem, hubungi administrator');
        }
    }
}
