@extends('home.layout')

@section('content')
    <div>
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Notifikasi</h2>
                    <ol>
                        <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="content" class="pt-4 mt-1 portfolio">
            <div class="container">
                <div class="card shadow mb-3">
                    <div class="card-body mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pesan</h5>
                            </div>
                            <div class="card-body">
                                @if (sizeof($notification_chat) > 0)
                                    <div class="list-group list-group-flush">
                                        @foreach ($notification_chat as $notif)
                                            <div class="list-group-item py-2 px-0">
                                                @if ($notif->unread_counter == 1)
                                                    <span class="badge bg-danger">Baru</span>
                                                @endif
                                                <span class="text-muted">
                                                    {{ $notif->updated_at }} -
                                                </span> <a
                                                    href="{{ route('hotline-inovasi.show', [
                                                        'chatRoom' => $notif->notifable_id,
                                                    ]) }}">
                                                    Anda mendapatkan pesan dari {{ $notif->sender->name }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    Tidak ada notifikasi
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Forum Replikasi</h5>
                            </div>
                            <div class="card-body">
                                @if (sizeof($notification_replication) > 0)
                                    <div class="list-group list-group-flush">
                                        @foreach ($notification_replication as $notif)
                                            <div class="list-group-item py-2 px-0">
                                                @if ($notif->unread_counter == 1)
                                                    <span class="badge bg-danger">Baru</span>
                                                @endif
                                                <span class="text-muted">
                                                    {{ $notif->updated_at }} -
                                                </span> <a
                                                    href="{{ route('forum-replikasi-show-topic', [
                                                        'topic_id' => $notif->notifable_id,
                                                        'innovation_id' => $notif->notifable->innovation_id,
                                                    ]) }}">
                                                    {{ $notif->sender->name }} mengirimkan sesuatu di
                                                    "{{ $notif->notifable->title }}"
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    Tidak ada notifikasi
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Forum Inovasi</h5>
                            </div>
                            <div class="card-body">
                                @if (sizeof($notification_innovation) > 0)
                                    <div class="list-group list-group-flush">
                                        @foreach ($notification_innovation as $notif)
                                            <div class="list-group-item py-2 px-0">
                                                @if ($notif->unread_counter == 1)
                                                    <span class="badge bg-danger">Baru</span>
                                                @endif
                                                <span class="text-muted">
                                                    {{ $notif->updated_at }} -
                                                </span> <a
                                                    href="{{ route('forum-inovasi-show-topic', [
                                                        'topic_id' => $notif->notifable_id,
                                                    ]) }}">
                                                    {{ $notif->sender->name }} mengirimkan sesuatu di
                                                    "{{ $notif->notifable->title }}"
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    Tidak ada notifikasi
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
