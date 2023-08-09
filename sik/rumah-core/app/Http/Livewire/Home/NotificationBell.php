<?php

namespace App\Http\Livewire\Home;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationBell extends Component
{
    public function render()
    {
        $ada_notifikasi = Notification::where('receiver_id', Auth::user()->id)
        ->where("unread_counter", '=', '1')
        ->get()->count();

        // dd($ada_notifikasi);

        return view('livewire.home.notification-bell', compact('ada_notifikasi'));
    }
}
