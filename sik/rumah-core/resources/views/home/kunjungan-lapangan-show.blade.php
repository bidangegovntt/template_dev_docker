@extends('home.layout')

@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Kunjungan Lapangan</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Ruang Tamu</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4">
        <div class="container">
            <a href="{{ route('kunjungan-lapangan') }}" class="btn btn-orange mb-3">
                <i class="fa fa-arrow-alt-circle-left"></i> Kembali ke Kunjungan Lapangan
            </a>
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="border-bottom pb-2 mb-3">{{ $kunjungan->title }}</h2>
                    <div class="d-flex flex-wrap pb-1 mb-3 text-muted">
                        <div class="d-flex align-items-center border-end pe-3 me-3 mb-2">
                            <i class="fa fa-clock opacity-70 me-2"></i>
                            <span>{{ date_format(date_create($kunjungan->visit_date), 'd-m-Y') }}</span>
                        </div>
                        <div class="d-flex align-items-center border-end pe-3 me-3 mb-2">
                            <i class="fa fa-user opacity-70 me-2"></i>
                            <span>{{ $kunjungan->visitor_name }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-bookmark opacity-70 me-2"></i>
                            <span><a href="{{ route('profile-inovasi', ['id' => $kunjungan->innovation_id]) }}"
                                    target="_blank" rel="noopener noreferrer">
                                    {{ $kunjungan->innovation->title }}</a></span>
                        </div>
                    </div>
                    {!! $kunjungan->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
