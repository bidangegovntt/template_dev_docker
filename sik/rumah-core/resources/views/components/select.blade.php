@php
if (! isset($all) OR ! $all) {
	$all = false;
}

if (! isset($all_value)) {
	$all_value = "";
}

if (! isset($all_text)) {
	$all_text =  $all ? "Semua" : "Pilih salah satu";
}
@endphp

<div class="inline-block relative">
	<select {{ $attributes->merge(['class' => 'block appearance-none w-full bg-white border border-gray-100 hover:border-gray-300 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline']) }}>
		<option value="{{ $all_value }}">{{ $all_text }}</option>
		
		{{ $slot }}
	</select>
	<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
		<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
	</div>
</div>
