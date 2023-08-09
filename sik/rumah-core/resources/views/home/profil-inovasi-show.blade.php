@extends('home.layout')

@section('content')
    <div>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Profil Inovasi</h2>
                    <ol>
                        <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                        <li><a href="{{ route('lumbung-inovasi-list') }}" class="fw-bold">Lumbung</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="content" class="pt-4 mt-1 portfolio">
            <div class="container">
                <div class="row mb-4">
                    @if ($innovation->photo != '')
                        <div class="col-md-12 col-lg-7 mb-3 mx-auto">
                            <div class="h-100 w-100 shadow main_pict"
                                style="height: 360px !important;background-size: cover; background-position: center center; background-image: url('{{ asset('storage/' . $innovation->photo) }}')">
                            </div>
                        </div>
                    @endif
                    @if ($innovation->video_url != '')
                        <div class="col-md-12 col-lg-5 mx-auto video-profile">
                            {!! $innovation->video_url !!}
                        </div>
                    @endif
                </div>
                <div class="row mb-4">
                    <div class="col-lg-7">
                        <div class="card shadow mb-3">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2 class="border-bottom pb-2">{{ $innovation->title }}</h2>
                                </div>
                                <div class="card shadow-sm mb-3">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <strong>Instansi</strong>
                                                <br>
                                                <span class="text-muted">
                                                    {{-- Instansi Terkait --}}
                                                    {{ $innovation->admin->instance_name ?? '' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Inovator</strong>
                                                <br>
                                                <span class="text-muted">
                                                    {{ $innovation->innovator->name ?? ''}}
                                                </span>

                                            </div>
                                            <div class="col-6 col-md-12 col-lg-4 mb-3">
                                                <strong>Kategori</strong>
                                                <br>
                                                <span class="text-muted">
                                                    {{ $innovation->category->name ?? ''}}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-lg-6 mb-3">
                                                <strong>Admin Inovasi</strong>
                                                <br>
                                                <span class="text-muted">
                                                    {{ $innovation->admin->name ?? '' }}
                                                </span>
                                            </div>
                                            <div class="col-6 col-md-12 col-lg-6 mb-3">
                                                <div class="mb-3">
                                                    <strong>Tahun</strong>
                                                    <br>
                                                    <span class="text-muted">
                                                        {{ $innovation->year_start ?? ''}}
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <strong>Status</strong>
                                                    <br>
                                                    <span class="text-muted">
                                                        {{ $innovation->sustainabilityStatus->name ?? ''}}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <strong>Prestasi</strong>
                                                <br>
                                                <span class="text-muted">
                                                    {{ $innovation->achievement ?? ''}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isi">
                                    {!! $innovation->summary !!}
                                </div>
                                <a href="#collapseExample" class="btn btn-primary mb-3" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Lihat Selengkapnya
                                </a>
                                <div class="collapse isi" id="collapseExample">
                                    {!! $innovation->description !!}
                                </div>
                                <div class="row border-top pt-3">
                                    <div class="col-6 mb-4">
                                        <label for="" class="fw-bold">Dibuat Oleh</label>
                                        @if (sizeof($innovation->creator_id()->get()) > 0)
                                            <br>
                                            <span>{{ $innovation->creator_id->name ?? ''}}</span>
                                        @else
                                            <br>
                                            <span>-</span>
                                        @endif
                                        <br>
                                        <small class="text-muted">{{ $innovation->created_at }}</small>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="" class="fw-bold">Diperbarui Oleh</label>
                                        @if (sizeof($innovation->updater_id()->get()) > 0)
                                            <br>
                                            <span>{{ $innovation->updater_id->name ?? ''}}</span>
                                        @else
                                            <br>
                                            <span>-</span>
                                        @endif
                                        <br>
                                        <small class="text-muted">{{ $innovation->updated_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        @if ($innovation->infographics != '')
                            <a href="{{ asset('storage/' . $innovation->infographics) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Infografis {{ $innovation->title }}">
                                <figure class="figure shadow bg-white">
                                    {{-- <img src="..." class="figure-img img-fluid rounded" alt="..."> --}}
                                    <img src="{{ asset('storage/' . $innovation->infographics) }}"
                                        class="img-thumbnail">
                                    <figcaption class="figure-caption text-center p-2">Klik untuk memperbesar
                                    </figcaption>
                                </figure>
                            </a>
                        @endif
                        @if (sizeof($innovation_files) > 0)
                            <div class="card shadow mb-3">
                                <div class="card-body">
                                    <div class="card-title mb-2">
                                        <h4 class="border-bottom pb-2 fw-bold">Download</h4>
                                    </div>

                                    @foreach ($innovation_files as $file)
                                        <div class="mb-4">
                                            <h5 class=""><span
                                                    class="border-bottom border-1">{{ $file->name }}</span></h5>
                                            @if (sizeof($file->files) > 0)
                                                <ul>
                                                    @foreach ($file->files as $file_item)
                                                        <li>
                                                            <a href="{{ asset('storage/' . $file_item->file_name_hash) }}"
                                                                class=mb-3">
                                                                </i> {{ $file_item->file_name }}
                                                            </a>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                            @else
                                                <span class="mb-3">Belum Ada File</span>
                                            @endif
                                            {{-- <br> --}}
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="card-text">Ada pertanyaan tentang Inovasi ini? Yuk, diskusikan
                                    lebih lanjut di Forum Replikasi</div>
                                <a href="{{ route('forum-replikasi-list-topic', ['innovation_id' => $innovation->id]) }}"
                                    class="btn btn-orange mt-1">
                                    <i class="fa fa-arrow-alt-circle-right"></i>
                                    Forum Replikasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
