@extends('home.layout')

@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Training</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Ruang Tamu</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4">
        <div class="container">
            <a href="{{ route('training-list') }}" class="btn btn-orange mb-3">
                <i class="fa fa-arrow-alt-circle-left"></i> Kembali ke Training Event
            </a>
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="border-bottom pb-2 mb-3">{{ $training->title }}</h2>
                    <p class="text-muted mb-3"><i class="fa fa-clock"></i> {{ $training->created_at }}</p>
                    {!! $training->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
