@extends('home.layout')

@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Klinik Inovasi</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Klinik Inovasi</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4 mt-1">
        <div class="container">
            <a href="{{ route('klinik-inovasi') }}" class="btn btn-orange mb-3">
                <i class="fa fa-arrow-alt-circle-left"></i> Kembali ke Klinik Inovasi
            </a>
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="border-bottom pb-2 mb-3">{{ $learning_material->title }}</h2>
                    <div class="d-flex flex-wrap pb-1 mb-3 text-muted">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-clock opacity-70 me-2"></i>
                            <span>{{ $learning_material->created_at }}</span>
                        </div>
                        @if ($learning_material->writer_name)
                            <div class="d-flex align-items-center border-start ps-3 ms-3 mb-2">
                                <i class="fa fa-user opacity-70 me-2"></i>
                                <span>{{ $learning_material->writer_name }}</span>
                            </div>
                        @endif
                        {{-- <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-bookmark opacity-70 me-2"></i>
                            <span>{{ $learning_material->innovation->title }}</span>
                        </div> --}}
                    </div>
                    {!! $learning_material->content !!}
                    @if (count($learning_material_attachments) > 0)
                        <div class="border-top pt-2 mt-3">
                            <h6>Download</h6>
                            <ul>
                                @foreach ($learning_material_attachments as $file)
                                    <li>
                                        <a href="{{ asset(disk_url($file->file_name_hash)) }}" target="_blank"
                                            rel="noopener noreferrer">
                                            {{ $file->file_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
