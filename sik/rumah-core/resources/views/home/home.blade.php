@extends('home.layout')
@include('home.style.accordion-home')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

				@php
					$has_active = false;
				@endphp

				@if(env('HOME_DISABLE_BANNER_1') == '')
				<div class="carousel-item img-fluid {{ $has_active ? '' : 'active' }}"
					style="background-image: url('{{ asset(env('HOME_BANNER_IMG_1', 'home/img/welcome.jpg')) }}');border-radius: 0px !important;">
					<div class="carousel-container">
						<div class="carousel-content animate__animated animate__fadeInUp">
							<div class="text-center">
								<a href="#">
									<h2>Selamat Datang di {{ env('APP_NAME', 'Lopo Inovasi NTT') }}</h2>
								</a>
								<a href="#scrollspyHeading1" class="btn btn-orange scrollto">Lihat Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
					@php
						$has_active = true;
					@endphp
				@else
					@php
						$has_active = false;
					@endphp
				@endif

				@if(env('HOME_DISABLE_BANNER_2') == '')
                <div class="carousel-item img-fluid {{ $has_active ? '' : 'active' }}"
					style="background-image: url('{{ asset(env('HOME_BANNER_IMG_2', 'home/img/banner-home2.jpg')) }}');border-radius: 0px !important;">
					<div class="carousel-container">
						<div class="carousel-content animate__animated animate__fadeInUp">
							<div class="text-center">
								<a href="#">
									<h2>Dirgahayu Republik Indonesia</h2>
								</a>
								<a href="#scrollspyHeading1" class="btn btn-orange scrollto">Lihat Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
				@php
					$has_active = true;
				@endphp
				@endif

                @foreach ($innovations as $key => $innovation)
                    <div class="carousel-item img-fluid"
                        style="background-image: url('{{ asset('storage/' . $innovation->photo) }}');border-radius: 0px !important;">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <div class="text-center">
                                    <a href="{{ route('profile-inovasi', ['id' => $innovation->id]) }}">
                                        <h2>{{ $innovation->title }}</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon fa fa-arrow-circle-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon fa fa-arrow-circle-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>

    </section>
    <!-- End Hero -->
@endsection

@section('content')
    @livewire('home.home')
@endsection
