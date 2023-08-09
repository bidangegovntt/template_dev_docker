<span>
	@formLabel($form, $attributes->has('label') ? $attributes['label'] : $form)
	@formErrors($form)

    {{ $pre_widget ?? ''}}

	@formWidget(
		$form,
		['attr' => [
            'class' => $attributes->merge([
                'class' => 'w-full bg-white rounded border border-gray-300 focus:border-indigo-500'
					.' focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700'
                    .' py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ])->get('class'),
            'row' => $attributes->has('row') ? $attributes->get('row') : '',
            'col' => $attributes->has('col') ? $attributes->get('col') : '',
            ],
        ],
    )

	{{ $slot ?? '' }}

	@isset($help)
	<small class="text-muted">{{ $help }}</small>
	@endisset

</span>
