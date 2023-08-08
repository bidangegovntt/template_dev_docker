<x-admin-layout>
    <x-slot name="page_title">
        {{ __('Edit Kunjungan Lapangan') }}
    </x-slot>

    <x-slot name="content">
        <a href="{{ route('admin.fieldtrip') }}">
            <x-back-button>Back</x-back-button>
        </a>

        <section class="body-font relative">
            @include('admin.fieldtrip._form')
        </section>

    </x-slot>
</x-admin-layout>
