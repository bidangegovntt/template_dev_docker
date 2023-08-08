<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-1']) }}>
    @if ($attributes->has('show-icon') OR $attributes->has('icon-only'))

    <svg xmlns="http://www.w3.org/2000/svg" 
        class="{{ $attributes->merge(['icon-class' => 'h-4 w-4'])->get('icon-class') }}" 
        viewBox="0 0 20 20" 
        fill="{{ $attributes->merge(['icon-fill' => 'currentColor'])->get('icon-fill') }}"
        >
	  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
	  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
	</svg>

    @endif

    @if (! $attributes->has('icon-only'))

    {{ $slot->isNotEmpty() ? $slot : 'edit' }}

    @endif
</button>
