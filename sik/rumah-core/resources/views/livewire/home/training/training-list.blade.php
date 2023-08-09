<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Training Event</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Ruang Tamu</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="pt-4 mt-1">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    @if (sizeof($training_list) > 0)
                        <ul class="list-group list-group-flush mb-4">
                            @foreach ($training_list as $training)
                                <li class="list-group-item">
                                    <a href="{{ route('training-show', ['training_id' => $training->id]) }}">
                                        <h5 class="card-title">{{ $training->title }}</h5>
                                    </a>
                                    <p class="card-text text-muted"><i class="fa fa-clock"></i>
                                        {{ $training->created_time }}</p>
                                </li>
                            @endforeach
                        </ul>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        Total: {{ $training_list->total() }} data
                                    </div>
                                    <div class="col-md-6 float-right">
                                        <div class="float-right">
                                            {{ $training_list->links() }}
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
                                    <p class="h4">Belum Ada Event Training</p>
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