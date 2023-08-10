<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Direktori</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Direktori</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4 mt-1">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-4">
                    <form class="mb-5 card shadow" wire:submit.prevent="cari">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="">Judul</label>
                                        <input type="text" class="form-control" placeholder="Cari Judul"
                                            wire:model.defer="title" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Kategori</label>
                                        <select class="form-select" wire:model.defer="category">
                                            <option value="">-SEMUA-</option>
                                            @foreach ($category_list as $cat_item)
                                                <option value="{{ $cat_item['id'] }}">{{ $cat_item['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Daerah</label>
                                        <select class="form-select" wire:model.defer="city">
                                            <option value="">-SEMUA-</option>
                                            @foreach ($city_list as $city_item)
                                                <option value="{{ $city_item['id'] }}">{{ $city_item['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tahun</label>
                                        <input type="text" class="form-control" wire:model.defer="year_start"
                                            autocomplete="off">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6 d-grid">
                                            <button class="btn btn-orange btn-block" type="submit">Cari</button>
                                        </div>
                                        <div class="col-6 d-grid">
                                            <button class="btn btn-outline-secondary btn-block"
                                                wire:click="reset_cari">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @if (sizeof($innovation_list) > 0)
                                    @foreach ($innovation_list as $innovation_item)
                                        <li class="list-group-item py-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    @php
                                                        $background_color = '';
                                                        if ($innovation_item->photo == '') {
                                                            $photo = 'home/img/no-image.svg';
                                                            $background_color = 'style="background-color: #eee"';
                                                        } else {
                                                            $photo = 'storage/' . $innovation_item->photo;
                                                        }
                                                    @endphp
                                                    <img src="{{ asset($photo) }}" alt="" class="img-thumbnail"></a>

                                                </div>
                                                <div class="col-md-8">
                                                    <div
                                                        class="px-0 px-md-3 py-2 py-md-0 d-flex flex-column justify-content-between h-100">
                                                        <h3 class="card-title">
                                                            <a
                                                                href="{{ route('profile-inovasi', ['id' => $innovation_item->id]) }}">{{ $innovation_item->title }}
                                                            </a>
                                                        </h3>
                                                        <div class="d-flex flex-wrap pb-1 mb-4 text-muted">
                                                            <div
                                                                class="d-flex align-items-center border-end pe-3 me-3 mb-2">
                                                                <i class="fa fa-bookmark opacity-70 me-2"></i>
                                                                <span>{{ $innovation_item->category->name ?? '' }}</span>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center border-end pe-3 me-3 mb-2">
                                                                <i class="fa fa-city opacity-70 me-2"></i>
                                                                <span>{{ $innovation_item->city->name ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <i class="fa fa-clock opacity-70 me-2"></i>
                                                                <span>{{ $innovation_item->year_start }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    @endforeach
                                @else
                                    <div class="col-12 text-center p-3">Maaf, data yang dicari tidak ditemukan</div>
                                @endif

                            </ul>

                            @if (sizeof($innovation_list) > 0)
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                Total: {{ $innovation_list->total() }} data
                                            </div>
                                            <div class="col-md-6 text-end">
                                                {{ $innovation_list->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                            <div class="col-12">
                                <a class="btn btn-primary btn-block" href="{{ url('lumbung-inovasi-map') }}">Lihat Peta
                                    Inovasi</a>
                            </div>
                        </div> --}}
                            @endif
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
