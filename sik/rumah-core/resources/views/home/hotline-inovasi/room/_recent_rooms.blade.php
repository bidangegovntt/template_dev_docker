<ul class="list-group list-group-flush">
	@foreach($chatRooms as $chatRoom)
		@php
			$participants = $chatRoom->users->except(Auth::user()->id);
		@endphp
	<li class="list-group-item py-4">
		<div class="row">
			<div class="col-md-12">
				<div class="px-0 px-md-3 py-2 py-md-0 d-flex flex-column justify-content-between h-100">
					<div>
						<a href="{{ route('hotline-inovasi.show', ['chatRoom' => $chatRoom]) }}">
							<h3 class="card-title">
								@foreach($participants as $participant)
									<img src="{{ asset($participant->photo) }}">
								@endforeach

								{{ $participants->pluck('name')->join(', ') }}
							</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</li>
	@endforeach
</ul>
