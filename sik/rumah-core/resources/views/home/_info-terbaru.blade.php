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
			@foreach ($trainings as $training)
				@php
					$background_color = '';
					if ($training->photo == '') {
						$photo = 'home/img/no-image.svg';
						$background_color = 'style="background-color: #eee"';
					} else {
						$photo = 'storage/' . $training->photo;
					}
				@endphp
				<div class="col-12 col-md-6 col-lg-4 portfolio-item text-center">
					<a href="{{ route('training-show', $training) }}">
						<img src="{{ asset($photo) }}" class="w-100 img-fluid shadow" alt=""
							style="background-size: cover; max-height: 234px">
						<div class="portfolio-info">
							<h4>{{ $training->title }}</h4>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>
