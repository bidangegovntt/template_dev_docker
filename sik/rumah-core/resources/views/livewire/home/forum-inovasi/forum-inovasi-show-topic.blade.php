<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Forum Inovasi</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Pojok Inovasi</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{ route('forum-inovasi') }}" class="btn btn-orange mb-3">
                                <i class="fa fa-arrow-alt-circle-left"></i> Kembali ke Daftar Topik
                            </a>
                            <h4 class="border-bottom pb-2">{{ $topic->title }}</h4>
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    @php
                                        $sender_photo = 'home/img/no-image.svg';

                                        if ($topic->sender->profile_photo_path != '') {
                                            $sender_photo = 'storage/' . $topic->sender->profile_photo_path;
                                        }
                                    @endphp
                                    <img src="{{ asset($sender_photo) }}" class="img-fluid" alt=""
                                        style="max-height: 120px">
                                    <div class="text-bold mt-2">{{ $topic->sender->name }}</div>
                                    <div class="text-muted mb-3">{{ $topic->sender->role }}</div>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-muted mb-2">{{ $topic->created_at }}</div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            @auth
                                                @if ($topic->sender_id == Auth::user()->id)
                                                    <button class="btn btn-sm btn-danger"
                                                        onclick="confirm('Anda yakin hapus topik ini?') || event.stopImmediatePropagation()"
                                                        wire:click="deleteTopic({{ $topic->id }})">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                @endif
                                            @endauth
                                        </div>
                                    </div>
                                    <div>{!! $topic->content !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="border-bottom pb-3 mt-5">Respon</h4>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div id="data_topik"></div>
                            @if (sizeof($topicDetails) > 0)
                                <div class="list-group list-group-flush mb-3">
                                    @foreach ($topicDetails as $td)
                                        <div class="list-group-item py-2 px-0">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-3 text-center">
                                                    @php
                                                        $sender_photo = 'home/img/no-image.svg';

                                                        if ($td->sender->profile_photo_path != '') {
                                                            $sender_photo = 'storage/' . $td->sender->profile_photo_path;
                                                        }
                                                    @endphp
                                                    <img src="{{ asset($sender_photo) }}" class="img-fluid"
                                                        alt="" style="max-height: 120px">
                                                    <div class="text-bold mt-2">{{ $td->sender->name }}</div>
                                                    <div class="text-muted mb-3">{{ $td->sender->role }}</div>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text-muted mb-2">{{ $topic->created_at }}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-end">
                                                            @auth
                                                                @if ($td->sender_id == Auth::user()->id)
                                                                    <button class="btn btn-sm btn-danger"
                                                                        onclick="confirm('Anda yakin hapus respon ini?') || event.stopImmediatePropagation()"
                                                                        wire:click="deleteRespond({{ $td->id }}, {{ $topicDetails->currentPage() }})">
                                                                        <i class="fa fa-trash"></i> Hapus
                                                                    </button>
                                                                @endif
                                                            @endauth
                                                        </div>
                                                    </div>
                                                    <div>{!! $td->content !!}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Total: {{ $topicDetails->total() }} data
                                            </div>
                                            <div class="col-md-6">
                                                {{ $topicDetails->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="text-center">Belum ada respon, jadilah yang pertama merespon</div>
                            @endif
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            @guest
                                <div class="text-center">
                                    Anda harus login untuk memberikan respon
                                    <br>
                                    <a class="btn btn-primary mt-2"
                                        href="{{ route('home-login', ['pergi-ke' => url()->current()]) }}">
                                        <i class="fa fa-sign-in-alt me-2"></i> Login
                                    </a>
                                </div>
                            @endguest
                            @auth
                                <form wire:submit.prevent="saveNewTopic">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <div wire:ignore>
                                                    <textarea class="form-control" placeholder="Tulis Respon Anda"
                                                        wire:model.defer="isi_baru" id="isi_baru"></textarea>
                                                </div>
                                            </div>
                                            @if (session()->has('error-isi-topik-baru'))
                                                <div class="alert alert-danger">
                                                    {{ session('error-isi-topik-baru') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-share"></i> Kirim
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('klinik-inovasi') }}">
                        <div class="card shadow text-center">
                            <div class="card-body">
                                <div class="d-block mb-3">
                                    <i class="fa fa-clinic-medical fa-5x"></i>
                                </div>
                                <h5 class="card-title text-center mb-2">Klinik Inovasi</h5>
                                <div class="card-text text-muted">Pelajari materi-materi tentang inovasi lebih lanjut di
                                    sini</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <style>
        .pagination {
            float: right;
            margin: 0px;
        }

    </style>
</div>

@section('plugin-css')
    <link rel="stylesheet" href="{{ asset('home/vendor/summernote/summernote-lite.min.css') }}">
@endsection

@section('plugin-js')
    <script src="{{ asset('home/vendor/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#isi_baru').summernote({
                height: 200,
                codemirror: {
                    theme: 'monokai'
                },
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['insert', ['link']],
                ],
                callbacks: {
                    onBlur: function() {
                        @this.set('isi_baru', $(this).val());
                    }
                }
            });
        });

        window.addEventListener('clear-isi-topik', event => {
            $('#isi_baru').summernote('reset');

            $('html, body').animate({
                scrollTop: $("#data_topik").offset().top - 100
            }, 2000);
        })
    </script>
@endsection
