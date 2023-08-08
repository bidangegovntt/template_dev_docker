<img src="{{ asset(!empty($path) ? $path : 'home/img/people.svg') }}"
    @isset($class)
    class="{{ implode(' ', $class ? array_merge($class, ['img-fluid']) : ['img-fluid']) }}"
    @endisset

    @isset($alt)
    alt="{{ implode(' ', $alt ? array_merge($alt, []) : []) }}"
    @endisset
>
