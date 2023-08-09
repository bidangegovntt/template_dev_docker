@extends('home.layout')

@section('content')
    <div>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hotline Inovasi</h2>
                </div>
            </div>
        </section>
        <section id="content" class="blog mt-1">
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <img src="{{ asset(!empty($innovationDoctor->profile_photo_path) ? 'storage/' . $innovationDoctor->profile_photo_path : 'home/img/people-no-face.svg') }}"
                                    class="w-100 rounded-circle border border-1 mb-3">
                                <div class="text-center mb-3">
                                    @guest
                                        <a href="{{ route('home-login', ['pergi-ke' => route('hotline-inovasi.with-doctor', ['innovationDoctor' => $innovationDoctor]) ]) }}"
                                            class="btn btn-primary btn-lg"><i class="bi bi-chat"></i> Kirim Pesan</a>
                                    @endguest
                                    @auth
                                        @if (Auth::user() && Auth::user()->isMe($innovationDoctor->user))
                                            <a href="{{ route('hotline-inovasi.my-messages') }}"
                                                class="btn btn-primary btn-lg">Lihat Pesanku</a>
                                        @else
                                            <a href="{{ route('hotline-inovasi.with-doctor', ['innovationDoctor' => $innovationDoctor]) }}"
                                                class="btn btn-primary btn-lg"><i class="bi bi-chat"></i> Kirim Pesan</a>
                                        @endif
                                    @endauth
                                </div>
                                {{-- move to component --}}
                                {{-- @include ('components._profile-picture', ['path' => $innovationDoctor->photo ]) --}}

                            </div>
                            <div class="col-md-8">
                                <h2 class="entry-title">
                                    {{ $innovationDoctor->name }}
                                </h2>

                                <div class="entry-content isi">
                                    <p class="text-muted">
                                        {{ $innovationDoctor->instance_name }}
                                    </p>

                                    {!! $innovationDoctor->description !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
