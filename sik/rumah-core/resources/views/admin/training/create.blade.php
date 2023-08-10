<x-admin-layout>

    <x-slot name="page_title">
		{{ "Buat Artikel" }}
    </x-slot>

    <x-slot name="content">
        <a href="{{ route('admin.training') }}">
            <x-back-button>Back</x-back-button>
        </a>

        <section class="body-font relative">
            @include('admin.training._form')
        </section>

    </x-slot>
</x-admin-layout>
