<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Klinik Inovasi</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Pojok Inovasi</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4 mt-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Materi Inovasi"
                            wire:model="cari_materi">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            @if (sizeof($learning_materials) > 0)
                                <ul class="list-group list-group-flush mb-4">
                                    @foreach ($learning_materials as $item)
                                        <li class="list-group-item mb-2">
                                            <a href="{{ route('klinik-inovasi-show', ['id' => $item->id]) }}">
                                                <h5 class="card-title">{{ $item->title }}</h5>
                                            </a>
                                            <div class="d-flex flex-wrap pb-1 text-muted">
                                                <div class="d-flex align-items-center pe-3 me-3 mb-2">
                                                    <i class="fa fa-clock opacity-70 me-2"></i>
                                                    <span>{{ $item->created_at }}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            @if (sizeof($learning_materials) > 0)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Total: {{ $learning_materials->total() }} data
                                            </div>
                                            <div class="col-md-6 float-right">
                                                <div class="float-right">
                                                    {{ $learning_materials->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('forum-inovasi') }}">
                        <div class="card shadow text-center">
                            <div class="card-body">
                                <div class="d-block mb-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <h5 class="card-title text-center mb-2">Forum Inovasi</h5>
                                <div class="card-text text-muted">Diskusikan lebih lanjut di sini</div>
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
