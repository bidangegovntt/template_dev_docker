@formStart($form)
{{ csrf_field() }}

<div class="container px-5 py-5 mx-auto flex flex-wrap lg:flex-nowrap">
    <div class="w-full sm:w-full md:w-full lg:w-4/6 mb-4 lg:mr-4">
        <div class="mb-4">
            <x-form-widget :form="$form['title']" class="summernote" label="Judul"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['content']" class="summernote" label="Content"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['writer_name']" label="Writer Name"></x-form-widget>
        </div>

        <div class="mb-4">
            @formLabel($form['attachment_files'], 'Lampiran File')

            <div class="list_saved_attachment_files">
                @isset($learningMaterial)
                    <livewire:admin.show-attachment-files :attachments="$learningMaterial->attachments"
                        :learningMaterialId="$learningMaterial->id">
                    @endisset
            </div>

            @formWidget($form['attachment_files'], [
            "attr" => [
            "data-prototype" => $form['attachment_files']->vars['prototype'] ,
            "data-index" => count($form['attachment_files']) > 0 ? $form['attachment_files']->last()->vars['name'] +
            1 : 0,
            "class" => "attachment-files",
            ],
            'entry_options' => [],
            ])

            <x-button type="button" class="add_file text-xs bg-blue-700"
                data-collection-holder-id="form_attachment_files">add file</x-button>
            <div class="hidden" id="delete-button-prototype">
                <x-button type="button" class="text-xs bg-red-700">Delete</x-button>
            </div>
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
        addFileFormDeleteLink(item);

        collectionHolder.dataset.index++;
    };

    const addFileFormDeleteLink = (fileFormLi) => {
        const prototypeButton = document.querySelector('#delete-button-prototype')
        const removeFormButton = document.importNode(prototypeButton.children[0], true)

        fileFormLi.appendChild(removeFormButton);

        removeFormButton.addEventListener('click', (e) => {
            e.preventDefault()
            fileFormLi.remove();
        });
    }

    const files = document.querySelectorAll('ul.files')
    files.forEach((tag) => {
        addFileFormDeleteLink(tag)
    })

    document
        .querySelectorAll('.add_file')
        .forEach(btn => btn.addEventListener("click", addFormToCollection));
</script>
