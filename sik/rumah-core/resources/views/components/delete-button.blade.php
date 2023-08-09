<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-1']) }}>
    @if ($attributes->has('show-icon') OR $attributes->has('icon-only'))

    <svg xmlns="http://www.w3.org/2000/svg"
        class="{{ $attributes->merge(['icon-class' => 'h-4 w-4'])->get('icon-class') }}"
        viewBox="0 0 20 20"
        fill="{{ $attributes->merge(['icon-fill' => 'currentColor'])->get('icon-fill') }}"
        >
      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
    </svg>

    @endif

    @if (! $attributes->has('icon-only'))

    {{ $slot->isNotEmpty() ? $slot : 'delete' }}

    @endif
</button>
