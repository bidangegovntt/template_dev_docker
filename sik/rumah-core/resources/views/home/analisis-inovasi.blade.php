@extends('home.layout')

@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Analisis Inovasi</h2>
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
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="h3">Kategori</div>
                            <canvas id="category_chart" height="400px" width="400px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="h3">Tahun</div>
                            <canvas id="year_chart" height="400px" width="400px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mx-auto">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="h3">Status Keberlanjutan</div>
                            <canvas id="status_chart" height="400px" width="400px"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
        integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-autocolors"></script> --}}
    {{-- <script
        src="https://github.com/nagix/chartjs-plugin-colorschemes/releases/download/v0.4.0/chartjs-plugin-colorschemes.min.js">
    </script> --}}

    <script>
        // var dynamicColors = function() {
        //     var r = Math.floor(Math.random() * 255);
        //     var g = Math.floor(Math.random() * 255);
        //     var b = Math.floor(Math.random() * 255);
        //     return "rgb(" + r + "," + g + "," + b + ")";
        // }

        // function dynamicColors() {
        //     return '#' + Math.floor(Math.random() * 16777215).toString(16);
        // }

        var colors = ["ff595e", "ffca3a", "8ac926", "1982c4", "6a4c93", "f94144", "f3722c", "f8961e", "f9844a", "f9c74f",
            "90be6d", "43aa8b", "4d908e", "577590", "277da1"
        ];

        /* kategori */
        var categoryCanvas = document.getElementById("category_chart").getContext('2d');

        var categoryData = {
            labels: [
                @foreach ($categories as $category)
                    "{{ $category->category->name }}",
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($categories as $category)
                        {{ $category->count_category }},
                    @endforeach
                ],
                backgroundColor: [
                    @foreach ($categories as $key => $category)
                        '#'+colors[{{ $key }}],
                    @endforeach
                ]
            }]
        };

        var categoryChart = new Chart(categoryCanvas, {
            type: 'pie',
            data: categoryData,
        });

        /* tahun */
        var yearCanvas = document.getElementById("year_chart").getContext('2d');

        var yearData = {
            labels: [
                @foreach ($years as $year)
                    "{{ $year->year_start }}",
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($years as $year)
                        {{ $year->count_year }},
                    @endforeach
                ],
                backgroundColor: [
                    @foreach ($years as $key => $year)
                        '#'+colors[{{ $key }}],
                    @endforeach
                ]
            }]
        };

        var yearChart = new Chart(yearCanvas, {
            type: 'pie',
            data: yearData,
        });

        /* status */
        var statusCanvas = document.getElementById("status_chart").getContext('2d');

        var statusData = {
            labels: [
                @foreach ($statuses as $status)
                    "{{ $status->sustainabilityStatus->name }}",
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($statuses as $status)
                        {{ $status->count_status }},
                    @endforeach
                ],
                backgroundColor: [
                    @foreach ($statuses as $key => $status)
                        '#'+colors[{{ $key }}],
                    @endforeach
                ]
            }]
        };

        var statusChart = new Chart(statusCanvas, {
            type: 'pie',
            data: statusData,
        });
    </script>
@endsection
