@extends('home.layout')
@include('home.style.accordion-home')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item img-fluid active"
                        style="background-image: url('{{ asset('home/img/welcome.jpg') }}');border-radius: 0px !important;">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <div class="text-center">
                                    <a href="#">
                                        <h2>Selamat Datang di Rumah Inovasi Jawa Timur</h2>
                                    </a>
                                    <a href="#scrollspyHeading1" class="btn btn-orange scrollto">Lihat Selengkapnya</a>
                                </div>
                                {{-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil
                                    ut
                                    aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque
                                    accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
                            </div>
                        </div>
                    </div>

                <div class="carousel-item img-fluid active"
                        style="background-image: url('{{ asset('home/img/banner-home2.jpg') }}');border-radius: 0px !important;">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <div class="text-center">
                                    <a href="#">
                                        <h2>Dirgahayu Republik Indonesia</h2>
                                    </a>
                                    <a href="#scrollspyHeading1" class="btn btn-orange scrollto">Lihat Selengkapnya</a>
                                </div>
                                {{-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil
                                    ut
                                    aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque
                                    accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
                            </div>
                        </div>
                    </div>

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
                                {{-- <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil
                                    ut
                                    aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque
                                    accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
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
