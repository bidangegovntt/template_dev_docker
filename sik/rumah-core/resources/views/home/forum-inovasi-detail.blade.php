@extends('home.layout')

@section('content')
    @livewire('home.forum-inovasi.forum-inovasi-show-topic', ['topic_id' => $topic_id])
@endsection
