<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Kunjungan Lapangan</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Artikel</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4 mt-1">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    @if (sizeof($kunjungan_list) > 0)
                        <ul class="list-group list-group-flush mb-4">
                            @foreach ($kunjungan_list as $kunjungan)
                                <li class="list-group-item mb-2">
                                    <a href="{{ route('kunjungan-lapangan-show', ['id' => $kunjungan->id]) }}">
                                        <h5 class="card-title">{{ $kunjungan->title }}</h5>
                                    </a>
                                    <div class="d-flex flex-wrap pb-1 text-muted">
                                        <div class="d-flex align-items-center border-end pe-3 me-3 mb-2">
                                            <i class="fa fa-clock opacity-70 me-2"></i>
                                            <span>{{ $kunjungan->visit_date }}</span>
                                        </div>
                                        <div class="d-flex align-items-center border-end pe-3 me-3 mb-2">
                                            <i class="fa fa-user opacity-70 me-2"></i>
                                            <span>{{ $kunjungan->visitor_name }}</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fa fa-bookmark opacity-70 me-2"></i>
                                            <span>{{ $kunjungan->innovation->title }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        Total: {{ $kunjungan_list->total() }} data
                                    </div>
                                    <div class="col-md-6 float-right">
                                        <div class="float-right">
                                            {{ $kunjungan_list->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="{{ asset('home/img/no-data.svg') }}" class="img-fluid p-3"
                                    style="height: 200px" alt="">
                                <p class="h4">Belum Ada Data Kunjungan Lapangan</p>
                            </div>
                        </div>
                    @endif
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
