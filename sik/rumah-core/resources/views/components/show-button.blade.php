<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-1']) }}>

    @if ($attributes->has('show-icon') OR $attributes->has('icon-only'))

    <svg xmlns="http://www.w3.org/2000/svg"
        class="{{ $attributes->merge(['icon-class' => 'h-4 w-4'])->get('icon-class') }}"
        viewBox="0 0 20 20"
        fill="{{ $attributes->merge(['icon-fill' => 'currentColor'])->get('icon-fill') }}"
        >
      <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
    </svg>

    @endif

    @if (! $attributes->has('icon-only'))

    {{ $slot->isNotEmpty() ? $slot : 'show' }}

    @endif
</button>
