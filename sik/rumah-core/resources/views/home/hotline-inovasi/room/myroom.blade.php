@extends('home.layout')

@section('content')
    <div>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('hotline-inovasi.my-messages') }}">
                        <h2>Pesanku</h2>
                    </a>
                </div>
            </div>
        </section>

        <section id="content" class="team mt-1 pt-1">
            <div class="container">
                <div class="card shadow mt-3">
                    <div class="card-body">
                        @if (!$chatRooms || $chatRooms->count() == 0)
                            <h5 class="text-center">Belum ada pesan</h5>
                        @else
                            <ul class="list-group list-group-flush">
                                @foreach ($chatRooms as $chatRoom)
                                    @php
                                        $participants = $chatRoom->users->except(Auth::user()->id);
                                    @endphp
                                    <li class="list-group-item py-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div
                                                    class="px-0 px-md-3 py-2 py-md-0 d-flex flex-column justify-content-between h-100">
                                                    <div>
                                                        <a
                                                            href="{{ route('hotline-inovasi.show', ['chatRoom' => $chatRoom]) }}">
                                                            <h4 class="card-title">
                                                                @foreach ($participants as $participant)
                                                                    <img class="rounded-circle me-2 border border-1"
                                                                        src="{{ asset($participant->photoOrDefault()) }}"
                                                                        width="64">
                                                                @endforeach

                                                                {{ $participants->pluck('name')->join(', ') }}
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
