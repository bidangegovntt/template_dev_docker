<div>
    <link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet/leaflet.css') }}" />

    <link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet-sidebar/leaflet-sidebar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet-markercluster/MarkerCluster.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet-markercluster/MarkerCluster.Default.css') }}" />
    <style>
        #map { height: 100vh; }
        .leaflet-control {
            z-index: 1
        }
    </style>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Peta Inovasi</h2>
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
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('home/vendor/leaflet/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/leaflet-sidebar/leaflet-sidebar.min.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/leaflet-ajax/dist/leaflet.ajax.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/leaflet-choropleth/dist/choropleth.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/Leaflet.ActiveLayers/dist/leaflet.active-layers.min.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/leaflet-markercluster/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/spin.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/leaflet.spin.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/chroma.js') }}"></script>
    <script src="{{ asset('home/vendor/leaflet/jquery.min.js') }}"></script>
    <script>
        function loadMap() {
            var map = L.map('map');
            map.setView([-7.551706, 111.6122776], 8); // jawatimur

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var innovationRoute = "{{ route('list-inovasi') }}";

            var aumAjax = new L.GeoJSON.AJAX("{{ route('maps.innovations') }}", {
                onEachFeature: function(feature, layer) {
                    L.marker(feature.geometry.coordinates.reverse()).addTo(map)
                        .bindPopup('<strong>' + feature.properties.name + '</strong>' +
                            '<br>' +
                            '<small>' + feature.properties.alamat + '</small>' +
                            '<div style="float:right: font-size: 0.7em"><a href="' + innovationRoute + '/' +
                            feature.properties.id + '">lebih lanjut</a></div>'
                        )
                }
            });
        }

        $(document).ready(function () {
            loadMap();
        })

        // loadMap();

        // (function() {

        // })()
    </script>
</div>
