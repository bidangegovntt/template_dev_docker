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
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                            <div id="data_topik"></div>
                            <table class="table table-condensed table-striped">
                                <thead class="">
                                    <tr>
                                        <th>Topik</th>
                                        <th class="text-center">Respon</th>
                                        <th class="text-end">Post Terakhir</th>
                                    </tr>
                                </thead>
                                <tbody class="border-top border-1">
                                    @if (sizeof($topics) > 0)
                                        @foreach ($topics as $key => $topic)
                                            <tr>
                                                <td>
                                                    <a
                                                        href="{{ route('forum-inovasi-show-topic', ['topic_id' => $topic->id, 'page' => 'last']) }}">
                                                        <h5 class="mb-1">{{ $topic->title }}</h5>
                                                    </a>
                                                    <span class="text-muted">Dibuat Oleh: <a
                                                            href="#">{{ $topic->sender->name }}</a></span>
                                                </td>
                                                <td class="text-center">{{ $topic->reply_count }}</td>
                                                <td class="text-end">
                                                    <small>{{ $topic->last_post_time }}</small>
                                                    <br>
                                                    <a href="#">{{ $topic->lastpostuser_name }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="text-center">Tidak ada data Topik</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            @if (sizeof($topics) > 0)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Total: {{ $topics->total() }} data
                                            </div>
                                            <div class="col-md-6">
                                                {{ $topics->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        </div>
                    </div>
                    <div class="card mb-3 shadow">
                        <div class="card-body">
                            @guest
                                <div class="text-center">
                                    Anda harus login untuk membuat topik baru
                                    <br>
                                    <a class="btn btn-primary mt-2"
                                        href="{{ route('home-login', ['pergi-ke' => url()->current()]) }}">
                                        <i class="fa fa-sign-in-alt me-2"></i> Login
                                    </a>
                                </div>
                            @endguest

                            @auth
                                <h4 class="border-bottom pb-3">Topik Baru</h4>
                                <form wire:submit.prevent="saveNewTopic">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input
                                                    class="form-control @error('judul_baru')
                                                        is-invalid
                                                    @enderror"
                                                    placeholder="Judul" wire:model.defer="judul_baru">
                                                @error('judul_baru')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <div wire:ignore>
                                                    <textarea class="form-control"
                                                        placeholder="Tulis Topik/Pertanyaan Baru"
                                                        wire:model.defer="isi_baru" id="isi_topik_baru"></textarea>
                                                </div>
                                                @if (session()->has('error-isi-topik-baru'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error-isi-topik-baru') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-share"></i>
                                        Kirim</button>
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
                                <div class="card-text text-muted">Pelajari materi-materi tentang inovasi lebih lanjut di sini</div>
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
            $('#isi_topik_baru').summernote({
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
            $('#isi_topik_baru').summernote('reset');

            $('html, body').animate({
                scrollTop: $("#data_topik").offset().top - 100
            }, 2000);
        })
    </script>
@endsection
