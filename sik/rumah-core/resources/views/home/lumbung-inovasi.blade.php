@extends('home.layout')

@section('content')
    <section id="content" class="services mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Lumbung Inovasi</h2>
            </div>
            <div class="sidebar">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('lumbung-inovasi-list') }}">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-list"></i></div>
                            <h4 class="title">Daftar Inovasi</h4>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('lumbung-inovasi-map') }}">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-map"></i></div>
                            <h4 class="title">Peta Inovasi</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
