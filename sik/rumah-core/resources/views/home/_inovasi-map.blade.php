<link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet/leaflet.css') }}" />

<link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet-sidebar/leaflet-sidebar.min.css') }}" />
<link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet-markercluster/MarkerCluster.css') }}" />
<link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet-markercluster/MarkerCluster.Default.css') }}" />
<style>
	#map {
		height: 60vh;
	}

	.leaflet-control {
		z-index: 1
	}

</style>

<section id="content" class="pt-4 mt-1">
	<div class="container">
		@isset($showTitle)
			@if($showTitle)
            <div class="section-title" data-aos="fade-up">
                <h2>{!! $textTitle !!}</h2>
            </div>
			@endif
		@endisset
		<div class="row mb-3">
			<div class="col-md-4">
				<form class="mb-5 card shadow" id="filter_inovasi" onsubmit="return false">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="mb-3">
									<label for="">Judul</label>
									<input type="text" class="form-control" placeholder="Cari Judul" name="title"
										autocomplete="off">
								</div>
								<div class="mb-3">
									<label for="">Kategori</label>
									<select class="form-select" name="category">
										<option value="">-SEMUA-</option>
										@foreach ($category_list as $cat_item)
											<option value="{{ $cat_item['id'] }}">{{ $cat_item['name'] }}
											</option>
										@endforeach
									</select>
								</div>
								<div class="mb-3">
									<label for="">Daerah</label>
									<select class="form-select" name="city">
										<option value="">-SEMUA-</option>
										@foreach ($city_list as $city_item)
											<option value="{{ $city_item['id'] }}">{{ $city_item['name'] }}
											</option>
										@endforeach
									</select>
								</div>
								<div class="mb-3">
									<label for="">Tahun</label>
									<input type="text" class="form-control" name="year_start" autocomplete="off">
								</div>
								<div class="row mb-3">
									<div class="col-6 d-grid">
										<button class="btn btn-orange btn-block" type="submit"
											onclick="update_map()">Cari</button>
									</div>
									<div class="col-6 d-grid">
										<button class="btn btn-outline-secondary btn-block"
											onclick="reset_cari()">Reset</button>
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
						<div wire:ignore>
							<div id="map"></div>
						</div>
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
	var innovationRoute = "{{ route('list-inovasi') }}";

	var map = L.map('map');
	map.setView({{ json_encode([$centerPoint->lat, $centerPoint->lng]) }}, {{ $centerPoint->zoomLevel }}); // jawatimur

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var layerGroup = L.layerGroup().addTo(map);

	function loadMap() {
		var aumAjax = new L.GeoJSON.AJAX("{{ route('maps.innovations') }}", {
			onEachFeature: function(feature, layer) {
				L.marker(feature.geometry.coordinates.reverse()).addTo(layerGroup)
					.bindPopup('<strong>' + feature.properties.name + '</strong>' +
						'<br>' +
						'<small>' + feature.properties.alamat + '</small>' +
						'<br>' +
						'<small>' + feature.properties.kategori + ' - ' + feature.properties.tahun +
						'</small>' +
						'<br>' +
						'<br>' +
						'<div style="float:right: font-size: 0.7em"><a href="' + innovationRoute + '/' +
						feature.properties.id + '">lebih lanjut</a></div>'
					)
			}
		});
	}

	$(document).ready(function() {
		loadMap();
	});

	function ajaxCallback(response) {
		layerGroup.clearLayers();

		var equipmentDetails = response.features;

		$.each(equipmentDetails, function(i, value) {
			L.marker(value.geometry.coordinates.reverse()).addTo(layerGroup)
				.bindPopup('<strong>' + value.properties.name + '</strong>' +
					'<br>' +
					'<small>' + value.properties.alamat + '</small>' +
					'<br>' +
					'<small>' + value.properties.kategori + ' - ' + value.properties.tahun + '</small>' +
					'<br>' +
					'<br>' +
					'<div style="float:right: font-size: 0.7em"><a href="' + innovationRoute + '/' +
					value.properties.id + '">lebih lanjut</a></div>'
				)
		});
	}

	function update_map() {
		$.ajax({
			url: "{{ route('maps.innovations') }}" + '?' + $('#filter_inovasi').serialize(),
			method: 'get',
			dataType: 'json',
		}).done(ajaxCallback);
	}

	function reset_cari() {
		$('input, select').val('');

		$.ajax({
			url: "{{ route('maps.innovations') }}",
			method: 'get',
			dataType: 'json',
		}).done(ajaxCallback);
	}
</script>
