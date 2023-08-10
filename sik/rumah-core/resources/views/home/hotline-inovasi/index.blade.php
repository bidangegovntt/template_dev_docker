@extends('home.layout')

@section('content')
    <div>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $pageTitle }}</h2>

                    @auth
                        <a class="btn btn-primary" href="{{ route('hotline-inovasi.my-messages') }}">
                            <i class="fas fa-envelope"></i>&nbsp;Pesanku
                        </a>
                    @endauth

                </div>
            </div>
        </section>
        <section id="content" class="pt-4 mt-1">
            <div class="container">

				@if(null !== $displayedBlocks['innovationMentor'] && $displayedBlocks['innovationMentor'])
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="section-title pb-1">
                                    <h2>Mentor <strong>Inovasi</strong></h2>
                                </div>
                                <div class="row mx-auto justify-content-center">

                                    @foreach ($innovationMentor as $mentor)
                                        <div class="col-lg-4 col-md-6 mb-3">
                                            <a href="{{ route('hotline-inovasi-detail', ['innovationDoctor' => $mentor]) }}"
                                                class="no-hover">
                                                <div class="card shadow-sm">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="{{ asset(!empty($mentor->profile_photo_path) ? 'storage/' . $mentor->profile_photo_path : 'home/img/people-no-face.svg') }}"
                                                                    alt="" class="w-100 rounded-circle border border-1">
                                                            </div>
                                                            <div class="col-8">
                                                                <h4 class="card-title">{{ $mentor->name }}</h4>
                                                                <div class="card-text text-muted">
                                                                    {{ $mentor->instance_name }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				@endif


				@if(null !== $displayedBlocks['innovationDoctor'] && $displayedBlocks['innovationDoctor'])
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="section-title pb-1">
                                    <h2>Dokter <strong>Inovasi</strong></h2>
                                </div>
                                <div class="row mx-auto justify-content-center">

                                    @foreach ($innovationDoctor as $doctor)
                                        <div class="col-lg-4 col-md-6 mb-3">
                                            <a href="{{ route('hotline-inovasi-detail', ['innovationDoctor' => $doctor]) }}"
                                                class="no-hover">
                                                <div class="card shadow-sm">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="{{ asset(!empty($doctor->profile_photo_path) ? 'storage/' . $doctor->profile_photo_path : 'home/img/people-no-face.svg') }}"
                                                                    alt="" class="w-100 rounded-circle border border-1">
                                                            </div>
                                                            <div class="col-8">
                                                                <h4 class="card-title">{{ $doctor->name }}</h4>
                                                                <div class="card-text text-muted">
                                                                    {{ $doctor->innovatorOf[0]->title ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				@endif

                {{-- <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="section-title pb-1">
                            <h2>Dokter <strong>Inovasi</strong></h2>
                        </div>
                        <div class="row mx-auto justify-content-center">

                            @foreach ($innovators as $innovator)
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <a href="{{ route('hotline-inovasi-detail', ['innovationDoctor' => $innovator]) }}"
                                        class="no-hover">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="{{ asset(!empty($innovator->profile_photo_path) ? 'storage/' . $innovator->profile_photo_path : 'home/img/people-no-face.svg') }}"
                                                            alt="" class="w-100 rounded-circle border border-1">
                                                    </div>
                                                    <div class="col-8">
                                                        <h4 class="card-title">{{ $innovator->name }}</h4>
                                                        <div class="card-text text-muted">
                                                            {{ $innovator->innovatorOf[0]->title ?? '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div> --}}
            </div>
        </section>
    </div>
@endsection
