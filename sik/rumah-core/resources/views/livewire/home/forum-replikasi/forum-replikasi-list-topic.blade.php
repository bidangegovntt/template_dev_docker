<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Forum Replikasi</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Direktori</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="border-bottom pb-2 mb-2">{{ $innovation->title }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                            <a href="{{ route('forum-replikasi-list') }}" class="btn btn-orange mb-3">
                                <i class="fa fa-arrow-alt-circle-left"></i> Kembali ke Forum Replikasi
                            </a>
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
                                                        href="{{ route('forum-replikasi-show-topic', ['innovation_id' => $innovation->id, 'topic_id' => $topic->id, 'page' => 'last']) }}">
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
                                            <td colspan="3" class="text-center">Belum ada data diskusi, jadilah yang
                                                pertama men-diskusikan ini</td>
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
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-md-12 col-lg-6 mb-3">
                                    <strong>Kategori</strong>
                                    <br>
                                    <span class="text-muted">
                                        {{ $innovation->category->name }}
                                    </span>
                                </div>
                                <div class="col-6 col-md-12 col-lg-6 mb-3">
                                    <strong>Tahun</strong>
                                    <br>
                                    <span class="text-muted">
                                        {{ $innovation->year_start }}
                                    </span>
                                </div>
                                <div class="col-6 col-md-12 col-lg-6 mb-3">
                                    <strong>Instansi</strong>
                                    <br>
                                    <span class="text-muted">
                                        {{-- Instansi Terkait --}}
                                        {{ $innovation->admin->instance_name }}
                                    </span>
                                </div>
                                <div class="col-6 col-md-12 col-lg-6 mb-3">
                                    <strong>Inovator</strong>
                                    <br>
                                    <span class="text-muted">
                                        {{ $innovation->innovator->name }}
                                    </span>
                                </div>
                                <div class="col-6 col-md-12 col-lg-6 mb-3">
                                    <strong>Admin Inovasi</strong>
                                    <br>
                                    <span class="text-muted">
                                        {{ $innovation->admin->name }}
                                    </span>
                                </div>
                                <div class="col-6 col-md-12 col-lg-6 mb-3">
                                    <strong>Status</strong>
                                    <br>
                                    <span class="text-muted">
                                        {{ $innovation->sustainabilityStatus->name }}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-grid">
                                    <a class="btn btn-orange"
                                        href="{{ route('profile-inovasi', ['id' => $innovation->id]) }}">Lihat Profil
                                        Inovasi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
