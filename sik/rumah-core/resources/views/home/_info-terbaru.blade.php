<section id="content" class="pt-4 mt-1">
	<div class="container">
		@isset($showTitle)
			@if($showTitle)
            <div class="section-title" data-aos="fade-up">
                <h2>{!! $textTitle !!}</h2>
            </div>
			@endif
		@endisset
		
		<div class="row portfolio-container" data-aos="fade-up">
			@foreach ($infoTerbaru as $training)
				@php
					$background_color = '';
					if ($training->photo == '') {
						$photo = 'home/img/no-image.svg';
						$background_color = 'style="background-color: #eee"';
					} else {
						$photo = 'storage/' . $training->photo;
					}
				@endphp
				<div class="row portfolio-item text-center">
					<div class="col-3">
						<div class="card">
							<a href="{{ route('training-show', $training) }}">
								<img src="{{ asset($photo) }}" class="w-100 img-fluid shadow" alt=""
									style="background-size: cover;">
							</a>
						</div>
					</div>
					<div class="col-9">
						<div class="row portfolio-info" style="text-align: left">
							<div class='col-12'>
								<h4>{{ $training->title }}</h4>
							</div>
							<div class='col-12'>
								{!! substr($training->purifyContent(), 0, 300) !!}
							</div>
							<div class='col-12'>
								<a class="btn btn-sm btn-primary" href="{{ route('training-show', $training) }}">
									Lebih lanjut
								</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
