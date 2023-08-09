@extends('home.layout')

@section('content')
    @livewire('home.reset-password', ['token' => request()->query('token')])
@endsection
