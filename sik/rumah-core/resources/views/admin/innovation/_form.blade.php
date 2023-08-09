@formStart($form)
{{ csrf_field() }}

<link rel="stylesheet" href="{{ asset('home/vendor/leaflet/leaflet/leaflet.css') }}" />
<link rel="stylesheet" href="{{ asset('js/leaflet-location-picker/leaflet-locationpicker.src.css') }}">

<div class="container px-5 py-5 mx-auto flex flex-wrap lg:flex-nowrap">
    <div class="w-full lg:w-4/6 lg:mr-4 mb-4">
        <div class="mb-4">
            <x-form-widget :form="$form['title']" class="summernote" label="Judul"></x-form-widget>
        </div>
        <div class="mb-4">
            <x-form-widget :form="$form['summary']" class="summernote" label="Ringkasan Pembuka"></x-form-widget>
        </div>
        <div class="mb-4">
            <x-form-widget :form="$form['description']" class="summernote" label="Deskripsi"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['achievement']" label="Prestasi"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['photo']" label="Foto Utama"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['infographics']" label="Infografis"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['video_url']" label="Kode Embed Video"></x-form-widget>
        </div>

        <div class="mb-4">
            @formLabel($form['attachment_files'], 'Lampiran File')

            <div class="list_saved_attachment_files">
                @isset($innovation)
                    <livewire:admin.show-innovation-files :innovationFiles="$innovation->innovationFiles"
                        :innovationId="$innovation->id">
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
    </div>
    <div class="w-full lg:w-2/6 lg:ml-4 mb-4">
        <div class="mb-4">
            <x-form-widget :form="$form['category_id']" label="Kategori"></x-form-widget>
        </div>
        <div class="mb-4">
            <x-form-widget :form="$form['address']" label="Alamat"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['city_id']" label="Kota"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['sustainability_status_id']" label="Status keberlanjutan"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['year_start']" label="Tahun mulai"></x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['innovator_id']" label="Inovator">
                <x-slot name="help">
                    atau buat baru <a href="{{ route('admin.user') }}" class="link">di sini
                        <x-icon-open-external class="w-5 h-5 inline-flex"></x-icon-open-external>
                    </a>
                </x-slot>
            </x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['innovation_admin_id']" label="Admin Inovasi">
                <x-slot name="help">
                    atau buat baru <a href="{{ route('admin.user') }}" class="link">di sini
                        <x-icon-open-external class="w-5 h-5 inline-flex"></x-icon-open-external>
                    </a>
                </x-slot>
            </x-form-widget>
        </div>

        <div class="mb-4">
            <x-form-widget :form="$form['published_status']" label="Status Publikasi"></x-form-widget>
        </div>

        <div class="mb-4">
            @php
                $geoloc = '';
                if (isset($innovation)) {
                    if ($innovation->latitude != 0 and $innovation->longitude != 0) {
                        $geoloc = $innovation->latitude . ',' . $innovation->longitude;
                    }
                }
            @endphp
            <label for="geoloc">Koordinat Peta</label>
            <input type="text" id="geoloc"
                class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out bg-gray-300"
                readonly value="{{ $geoloc }}" />
            {{-- <x-form-widget :form="$form['geoloc']" label="Location Picker"></x-form-widget> --}}
            <x-form-widget :form="$form['latitude']" label=""></x-form-widget>
            <x-form-widget :form="$form['longitude']" label=""></x-form-widget>
            <div id="fixedMapCont" style="border: 3px solid #222;height:200px" class="mt-2"></div>
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
<script src="{{ asset('home/vendor/leaflet/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/leaflet-location-picker/leaflet-locationpicker.min.js') }}"></script>
@php
$latitude = '-7.5237446270431985';
$longitude = '112.30809716414304';

if (isset($innovation)) {
    if ($innovation->latitude != 0) {
        $latitude = $innovation->latitude;
    }

    if ($innovation->longitude != 0) {
        $longitude = $innovation->longitude;
    }
}
@endphp
<script>
    $('#geoloc').leafletLocationPicker({
        alwaysOpen: true,
        mapContainer: "#fixedMapCont",
        height: '200',
        map: {
            center: [{{ $latitude }}, {{ $longitude }}],
            zoom: 7
        },
        onChangeLocation: function(e) {
            $('#form_latitude').val(e.latlng.lat);
            $('#form_longitude').val(e.latlng.lng);
        }
    })
    // .on('changeLocation', function(e) {
    // 	$(this)
    // 	.siblings('#form_latitude').val( e.latlng.lat )
    // 	.siblings('#form_longitude').val( e.latlng.lng );
    // });
</script>
