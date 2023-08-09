@extends('home.layout')
@include('home.style.chat')

@section('content')
    {{-- <style>
        .direct-chat .card-body {
            padding: 2rem;
            overflow-y: scroll;
            height: 400px;
        }

    </style> --}}
    <div>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pesan</h2>
                </div>
            </div>
        </section>

        <section id="content" class="team mt-0 pt-1">
            <div class="container">
                @livewire('hotline.messages', ['chatRoom' => $chatRoom])
            </div>
        </section>
    </div>


@endsection
