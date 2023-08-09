<img src="{{ !empty($attributes['src']) ? asset($attributes['src']) : asset('home/img/people.svg') }}"
    class="{{ $attributes->merge(['class' => 'bg-gray-100 object-cover object-center flex-shrink-0 rounded-full m-4'])->get('class') }}"

    @if(!empty($attributes['alt']))
    alt="{{ $attributes['alt'] ? $attributes['alt'] : '' }}"
    @endif
>
