<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\ChatRoomUser;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HotlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $innovationMentor = User::role('mentor inovasi')->OrderBy('name')->get();
        $innovationDoctor = User::role('dokter inovasi')->with(['innovatorOf'])->OrderBy('name')->get();

        return view('home.hotline-inovasi.index', compact('innovationMentor', 'innovationDoctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage or fetch existing resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function withDoctor(Request $request, User $innovationDoctor)
    {
        // find room with doctor and current user
        // if not found, create it. use generateName()
        // add doctor, current user, and configured admin/support user as participants
        // $chatRoom->addParticipant($doctor->relatedUser);
        // $chatRoom->addParticipant(Auth::user());
        // $chatRoom->addParticipant($supportUser);
        // save all
        // after all redirect to route('hotline-inovasi.show', [ $chatRoom ]);

        // $doctorUser = $doctor->user;
        $me = Auth::user();
        $innovationDoctorUser = $innovationDoctor;

        if (! $innovationDoctorUser)
        {
            throw new \Exception("Dokter inovasi belum siap dihubungi.");
        }

        if ($me->isMe($innovationDoctorUser))
        {
            throw new \Exception("Self talking is prohibited");
        }

        // $foundRoom = ChatRoomUser::distinct('room_id')
        //     ->where('user_id', $me->id)
        //     ->where('user_id', $innovationDoctorUser->id)
        //     ->get();

        /* Proposal */
        $userRooms = ChatRoomUser::where('user_id', $me->id)->get();
        $room_ids = $userRooms->map(function($row) {
            return $row->chat_room_id;
        });
        // $rooms = $userRooms->load('rooms');
        $rooms = ChatRoom::find($room_ids);
        $rooms->load('users');

        $foundRoom = $rooms->filter(function($room) use ($innovationDoctorUser){
            return $room->users->contains($innovationDoctorUser);
        });

        // dd($rooms, $foundRoom);

        // if ($foundRoom->count() > 1)
        // {
        //     throw new \Exception('Ambigous room. Please contact admin');
        // }

        if ($foundRoom->first())
        {
            // lets go to the room and chit-chat in there
            return redirect()->route('hotline-inovasi.show', ['chatRoom' => $foundRoom->first()]);
        }

        $chatRoom = ChatRoom::make();
        $chatRoom->generateName();
        $chatRoom->save();
        // $chatRoom->addParticipant($doctorUser);
        $chatRoom->addUser($me);
        $chatRoom->addUser($innovationDoctorUser);
        $chatRoom->save();

        return redirect()->route('hotline-inovasi.show', ['chatRoom' => $chatRoom]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatRoom  $chatRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ChatRoom $chatRoom)
    {
        $chatRoom->load(['users', 'messages']);

        if (! $chatRoom->users->contains(Auth::user()))
        {
            throw new \Exception("You don't have access to this room") ;
        }

        // later to this view, we live in livewire
        return view('home.hotline-inovasi.room.index', compact('chatRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatRoom  $chatRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatRoom $chatRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChatRoom  $chatRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatRoom $chatRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatRoom  $chatRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatRoom $chatRoom)
    {
        //
    }

    public function myMessages()
    {
        // find all room related to me
        $chatRooms = ChatRoom::whereHas('users', function ($builder) {
            return $builder->where('user_id', Auth::user()->id);
        })
        ->get();

        // Reload room users to include all users
        $chatRooms->load("room_users");

        return view('home.hotline-inovasi.room.myroom', compact('chatRooms'));
    }

    public function detail(User $innovationDoctor)
    {
        // $chatRoom = null;

        // try {
        //     Auth::user()->isMe($innovationDoctor);
        //     $chatRoom = $this->findOrCreateRoomWithDoctor($innovationDoctor);

        //     $chatRoom->load('users');

        //     if (! $chatRoom->users->contains(Auth::user()))
        //     {
        //         throw new \Exception("You don't have access to this room") ;
        //     }

        //     $chatRoom->load('messages');
        // } catch(\Exception $e) {
        //     // just log the exception ?
        // }

        // later to this view, we live in livewire
        // return view('home.hotline-inovasi.room.index', compact('chatRoom'));
        return view('home.hotline-inovasi.detail', compact('innovationDoctor'));
    }

    protected function findOrCreateRoomWithDoctor(User $innovationDoctor)
    {
        $me = Auth::user();
        $innovationDoctorUser = $innovationDoctor->user;

        if ($me->isMe($innovationDoctorUser))
        {
            throw new \Exception("Self talking is prohibited");
        }

        /* Proposal */
        $userRooms = ChatRoomUser::where('user_id', $me->id)->get();
        $room_ids = $userRooms->map(function($row) {
            return $row->chat_room_id;
        });

        // $rooms = $userRooms->load('rooms');
        $rooms = ChatRoom::find($room_ids);
        $rooms->load('users');

        $foundRoom = $rooms->filter(function($room) use ($innovationDoctorUser){
            return $room->users->contains($innovationDoctorUser);
        });

        //  return first found if any
        if ($foundRoom->first())
        {
            return $foundRoom->first();
        }

        $chatRoom = ChatRoom::make();
        $chatRoom->generateName();
        $chatRoom->save();
        // $chatRoom->addUser($supportUser);
        $chatRoom->addUser($me);
        $chatRoom->addUser($innovationDoctorUser);
        $chatRoom->save();

        return $chatRoom;
    }
}
