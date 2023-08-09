<x-admin-layout>
    <x-slot name="page_title">
        {{ __('Create Innovator') }}
    </x-slot>

    <x-slot name="content">
        <a href="{{ route('admin.innovator') }}"><x-back-button></x-back-button></a>

        @formStart($form, ['action' => route('admin.innovator.create')])
        {{ csrf_field() }}

        @formWidget($form)

        @formEnd($form)
    </x-slot>
</x-admin-layout>

