@extends('home.layout')

@section('content')
    {{-- @include('home.style.blog') --}}
    @livewire('home.training.training-list')
@endsection
