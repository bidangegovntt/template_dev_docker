@formStart($form)
{{ csrf_field() }}

<x-slot name="styles">
    <link rel="stylesheet" href="{{ asset('home/vendor/summernote/summernote-lite.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
</x-slot>

<x-slot name="scripts">
    <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('home/vendor/summernote/summernote-lite.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js"></script>

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
                height: 150,
                toolbar: summernote_toolbar_opt
            });

            const datepickerEl = document.getElementById('form_visit_date');
            const datepicker = new Datepicker(datepickerEl, {
                format: 'dd-mm-yyyy',
                autohide: true,

            });
        })
    </script>
</x-slot>

<div class="container px-5 py-5 mx-auto flex flex-wrap lg:flex-nowrap">
    <div class="w-full sm:w-full md:w-full lg:w-4/6 mb-4 lg:mr-4">
        <div class="mb-4">
            <x-form-widget :form="$form['title']" class="" label="Judul"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['visit_date']" class="" label="Tanggal Kunjungan">
            </x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['visitor_name']" class="" label="Nama Pengunjung">
            </x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['innovation_id']" class="" label="Inovasi">
            </x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['content']" class="summernote" label="Isi"></x-form-widget>
        </div>

        @formWidget($form['save'], ['attr' => ['class' => 'items-center px-4 py-2 bg-gray-800 border border-transparent
        rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900
        focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out
        duration-150 text-normal']])
    </div>
</div>

@formEnd($form)

<script>
    const addFormToCollection = (e) => {
        const collectionHolder = document.querySelector('#' + e.currentTarget.dataset.collectionHolderId);

        const item = document.createElement('li');

        item.innerHTML = collectionHolder
            .dataset
            .prototype
            .replace(
                /add_new_file/g,
                collectionHolder.dataset.index
            );

        console.log({
            index: collectionHolder.dataset.index,
            item
        })
        item.classList.add('item_attachment_file')

        collectionHolder.appendChild(item);
        addEmailFormDeleteLink(item);

        collectionHolder.dataset.index++;
    };

    const addEmailFormDeleteLink = (emailFormLi) => {
        const prototypeButton = document.querySelector('#delete-button-prototype')
        const removeFormButton = document.importNode(prototypeButton.children[0], true)

        emailFormLi.appendChild(removeFormButton);

        removeFormButton.addEventListener('click', (e) => {
            e.preventDefault()
            emailFormLi.remove();
        });
    }

    const emails = document.querySelectorAll('ul.files')
    emails.forEach((tag) => {
        addEmailFormDeleteLink(tag)
    })

    document
        .querySelectorAll('.add_file')
        .forEach(btn => btn.addEventListener("click", addFormToCollection));
</script>
