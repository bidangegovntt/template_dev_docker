<x-admin-layout>
    <x-slot name="page_title">
        {{ __('Edit Innovator') }}
    </x-slot>


    <x-slot name="content">
        <a href="{{ route('admin.innovator') }}"><x-back-button></x-back-button></a>

        @formStart($form, ['action' => route('admin.innovator.update', [$innovator])])
        {{ csrf_field() }}

        @formWidget($form)

        @formEnd($form)
    </x-slot>
</x-admin-layout>

