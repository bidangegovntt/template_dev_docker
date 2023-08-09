<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function showNotifications()
    {
        $receiver_id = Auth::user()->id;

        $notification_chat = Notification::where('receiver_id', $receiver_id)
            ->where('notifable_type', 'App\Models\ChatRoomUser')
            ->orderBy('unread_counter', 'desc')
            ->latest('updated_at')
            ->limit(10)
            ->get(); //private chat

        $notification_replication = Notification::where('receiver_id', $receiver_id)
            ->where('notifable_type', 'App\Models\ReplicationTopic')
            ->orderBy('unread_counter', 'desc')
            ->latest('updated_at')
            ->limit(10)
            ->get(); //replication forum

        $notification_innovation = Notification::where('receiver_id', $receiver_id)
            ->where('notifable_type', 'App\Models\InnovationTopic')
            ->orderBy('unread_counter', 'desc')
            ->latest('updated_at')
            ->limit(10)
            ->get(); //innovation forum

        return view('home.notification', compact('notification_chat', 'notification_replication', 'notification_innovation'));
    }
}
