<x-admin-layout>
    <x-slot name="page_title">
            {{ __('Edit Innovation Doctor') }}
    </x-slot>


    <x-slot name="content">
        <a href="{{ route('admin.innovation-doctor') }}"><x-back-button></x-back-button></a>

        @formStart($form, ['action' => route('admin.innovation-doctor.update', [$innovationDoctor])])
        {{ csrf_field() }}

        @formWidget($form)

        @formEnd($form)
    </x-slot>
</x-admin-layout>

