@extends('home.layout')

@section('content')
    {{-- <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Lupa Password</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                </ol>
            </div>
        </div>
    </section>

    <section id="content" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 entries">
                    <div class="card shadow">
                        <div class="card-body">

                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        @if (session()->has('msg-error'))
                                            <div class="alert alert-danger">
                                                {{ session('msg-error') }}
                                            </div>
                                        @endif
                                        @if (session()->has('msg-success'))
                                            <div class="alert alert-success">
                                                {{ session('msg-success') }}
                                            </div>
                                        @endif

                                        <h3>Masukkan email </h3>

                                        <div class="mb-2">
                                            <label for="">Email</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control
                                                @error('email')
                                                    is-invalid
                                                @enderror"
                                                value="{{ old('email') }}" autocomplete="off">
                                            @error('email')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary mr-2" type="submit">Kirim Email</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @livewire('home.forgot-password')
@endsection
