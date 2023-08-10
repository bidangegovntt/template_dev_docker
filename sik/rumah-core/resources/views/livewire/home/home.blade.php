<div>
    {{-- <section class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Ruang <strong>Tamu</strong></h2>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="section-title p-0" data-aos="fade-up">
                        <h4>Artikel</h4>
                    </div>
                    <div class="list-group rounded shadow-sm" data-aos="fade-up">
                        @foreach ($trainings as $training)
                            <a href="{{ route('training-show', ['training_id' => $training->id]) }}"
                                class="list-group-item list-group-item-action">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">{{ $training->title }}</h5>
                                        <span class="text-muted" style="font-size: 75%;"><i class="fa fa-clock"
                                                aria-hidden="true"></i> {{ $training->training_date }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <a href="{{ route('training-list') }}" class="list-group-item list-group-item-action">
                            <div class="media">
                                <div class="media-body d-grid">
                                    <button class="btn btn-orange">Lihat Selengkapnya >></button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title p-0" data-aos="fade-up">
                        <h4>Kunjungan Lapangan</h4>
                    </div>
                    <div class="list-group rounded shadow-sm" data-aos="fade-up">
                        @foreach ($fieldTrips as $ft)
                            <a href="{{ route('kunjungan-lapangan-show', ['id' => $ft->id]) }}"
                                class="list-group-item list-group-item-action">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">{{ $ft->title }}</h5>
                                        <span class="text-muted" style="font-size: 75%;"><i class="fa fa-clock"
                                                aria-hidden="true"></i> {{ $ft->visit_date }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <a href="{{ route('kunjungan-lapangan') }}" class="list-group-item list-group-item-action">
                            <div class="media">
                                <div class="media-body d-grid">
                                    <button class="btn btn-orange">Lihat Selengkapnya >></button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <style>
        .bg-accordion {
            background: url('home/img/breadcrumb.jpg') no-repeat;
            background-size: cover;
        }

        .card[data-bs-toggle=collapse].collapsed .card-title {
            color: #212529;
        }

        .bg-accordion:not(.collapsed) {
            background-image: unset;
            background-color: white;
        }

    </style>
    <section class="services" id="scrollspyHeading1">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Salam <strong>Inovasi</strong></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @php
                        $array_faq = [
                            [
                                'title' => 'Selamat Datang di Rumah Inovasi Jawa Timur',
                                'content' => 'Rumah Inovasi adalah pusat informasi dan pengetahuan untuk inovasi pelayanan publik di Jawa Timur yang bertujuan untuk mendokumentasikan, mendiseminasikan dan mereplikasi informasi serta pengetahuan terkait inovasi pelayanan publik dan sebagai platform untuk saling interaksi, konsultasi dan mentoring diantara stakeholder inovasi pelayanan publik',
                            ],
                        ];
                    @endphp
                    <div id="accordionJobs" data-aos="fade-up">
                        @foreach ($array_faq as $key => $faq)
                            <div class="card shadow bg-accordion @if ($key > 0) collapsed @endif mb-2" data-bs-toggle="collapse"
                                data-bs-target="#jobCollapse{{ $key }}">
                                <div class="card-body">
                                    {{-- <div class="d-flex justify-content-between mb-2">
                                        <div class="d-flex align-items-center"><img class="me-2"
                                                src="../img/job-board/company/it-pro.png" width="24"
                                                alt="IT Pro Logo"><span class="fs-sm text-dark opacity-80 ps-1">IT Pro
                                                TV</span></div><span
                                            class="badge bg-faded-danger rounded-pill fs-sm">Hot</span>
                                    </div> --}}
                                    <h3 class="h6 card-title fw-bold pt-1 mb-0">{{ $faq['title'] }}</h3>
                                </div>
                                <div class="collapse @if ($key == 0) show @endif" id="jobCollapse{{ $key }}"
                                    data-bs-parent="#accordionJobs">
                                    <div class="card-body mt-n1 pt-0">
                                        <p class="fs-sm">{{ $faq['content'] }}</p>
                                        {{-- <div class="d-flex align-items-center justify-content-between">
                                            <div class="fs-sm"><span class="text-nowrap me-3"><i
                                                        class="fi-map-pin text-muted me-1"> </i>Chicago</span><span
                                                    class="text-nowrap me-3"><i
                                                        class="fi-cash fs-base text-muted me-1"></i>$7,500</span></div>
                                            <button
                                                class="btn btn-icon btn-light btn-xs text-primary shadow-sm rounded-circle"
                                                type="button" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="Add to saved jobs"
                                                aria-label="Add to saved jobs"><i class="fi-heart"></i></button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="card bg-accordion collapsed mb-2" data-bs-toggle="collapse"
                            data-bs-target="#jobCollapse2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="d-flex align-items-center"><img class="me-2"
                                            src="../img/job-board/company/xbox.png" width="24" alt="Xbox Logo"><span
                                            class="fs-sm text-dark opacity-80 ps-1">Xbox Company</span></div><span
                                        class="badge bg-faded-accent rounded-pill fs-sm">Featured</span>
                                </div>
                                <h3 class="h6 card-title pt-1 mb-0">Full-Stack Developer</h3>
                            </div>
                            <div class="collapse" id="jobCollapse2" data-bs-parent="#accordionJobs">
                                <div class="card-body mt-n1 pt-0">
                                    <p class="fs-sm">Euismod nec sagittis sit arcu libero, metus. Aliquam nisl
                                        rhoncus porttitor volutpat, ante cras tincidunt. Nec sit nunc, ornare tincidunt
                                        enim, neque. Ornare pulvinar enim fames orci enim in libero. <a href="#">Read
                                            more...</a></p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="fs-sm"><span class="text-nowrap me-3"><i
                                                    class="fi-map-pin text-muted me-1"> </i>Washington</span><span
                                                class="text-nowrap me-3"><i
                                                    class="fi-cash fs-base text-muted me-1"></i>$13,000</span></div>
                                        <button
                                            class="btn btn-icon btn-light btn-xs text-primary shadow-sm rounded-circle"
                                            type="button" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Add to saved jobs" aria-label="Add to saved jobs"><i
                                                class="fi-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure>
                        <img src="{{ asset('home/img/home-features.jpg') }}" alt="" class="img-fluid shadow"
                            data-aos="fade-up">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Inovasi <strong>Terbaru</strong></h2>
            </div>
            <div class="row portfolio-container" data-aos="fade-up">
                @foreach ($innovations as $inno)
                    @php
                        $background_color = '';
                        if ($inno->infographics == '') {
                            $photo = 'home/img/no-image.svg';
                            $background_color = 'style="background-color: #eee"';
                        } else {
                            $photo = 'storage/' . $inno->infographics;
                        }
                    @endphp
                    <div class="col-12 col-md-6 col-lg-4 portfolio-item text-center">
                        <a href="{{ route('profile-inovasi', ['id' => $inno->id]) }}">
                            <img src="{{ asset($photo) }}" class="w-100 img-fluid shadow" alt=""
                                style="background-size: cover; max-height: 234px">
                            <div class="portfolio-info">
                                <h4>{{ $inno->title }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6 mx-auto d-grid">
                    <a href="{{ route('lumbung-inovasi-list') }}" class="btn btn-orange">Lihat Selengkapnya >></a>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Didukung <strong>Oleh</strong></h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row" data-aos="fade-up">

                <div class="col-3 mx-auto mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ asset('home/img/logo-pemprov-jatim.jpg') }}" class="img-fluid" alt=""
                                style="height: 120px; border-radius: 0px !important">
                        </div>
                    </div>
                </div>

                <div class="col-3 mx-auto mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ asset('home/img/usaid.jpg') }}" class="img-fluid" alt=""
                                style="height: 120px; border-radius: 0px !important">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
