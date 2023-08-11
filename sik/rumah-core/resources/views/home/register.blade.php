@extends('home.layout')

@section('content')
	@if (env('USER_REGISTRATION_ALLOWED', 0))
    @livewire('home.register')
	@else
		<div class="alert alert-danger" role="alert">Pendaftaran tidak diizinkan</div>
	@endif
@endsection
