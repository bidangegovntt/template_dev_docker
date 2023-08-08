@extends('home.layout')

@section('content')
    @livewire('home.forum-replikasi.forum-replikasi-list-topic', ['innovation_id' => $innovation_id])
@endsection
