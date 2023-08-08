@extends('home.layout')

@section('content')
    {{-- @include('home.style.blog') --}}

    @livewire('home.forum-replikasi.forum-replikasi-show-topic', [
        'innovation_id' => $innovation_id,
        'topic_id' => $topic_id,
        // 'last_page' => $last_page,
    ])
@endsection
