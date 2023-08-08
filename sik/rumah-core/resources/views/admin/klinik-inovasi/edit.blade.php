<x-admin-layout>
    <x-slot name="page_title">
        Edit Klinik Inovasi
    </x-slot>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('home/vendor/summernote/summernote-lite.min.css') }}">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('home/vendor/summernote/summernote-lite.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                const summernote_toolbar_opt = [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]

                $('#form_content').summernote({
                    height: 300,
                    toolbar: summernote_toolbar_opt
                });
            })
        </script>
    </x-slot>


    <x-slot name="content">
        <div class="w-full flex justify-between">
            <a href="{{ route('admin.klinik-inovasi') }}">
                <x-back-button>Back</x-back-button>
            </a>

            <a href="{{ route('klinik-inovasi-show', $learningMaterial->id) }}">
                <x-show-button>Show</x-show-button>
            </a>
        </div>

        <section class="body-font relative">
            @include('admin/klinik-inovasi/_form')
        </section>


    </x-slot>
</x-admin-layout>

