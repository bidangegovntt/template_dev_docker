@formStart($form)
{{ csrf_field() }}

<div class="container px-5 py-5 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 rounded-lg overflow-y-auto sm:mr-10 p-1 items-end justify-start relative">

        <div class="relative mb-4">
            <x-form-widget :form="$form['name']" label="Nama"></x-form-widget>
        </div>

        <div class="relative mb-4">
            <x-form-widget :form="$form['email']" label="Email"></x-form-widget>
        </div>

        <div class="relative mb-4">
            <x-form-widget :form="$form['password']" label="Password"></x-form-widget>
        </div>

        <div class="relative mb-4">
            <x-form-widget :form="$form['instance_name']" label="Nama Instansi"></x-form-widget>
        </div>

        <div class="relative mb-4">
            <x-form-widget :form="$form['city_id']" label="Daerah"></x-form-widget>
        </div>

        <div class="relative mb-4">
            <x-form-widget :form="$form['description']" label="Bio data"></x-form-widget>
        </div>
    </div>

    <div class="lg:w-1/3 md:w-1/2 sm:mr-10 rounded-sm relative">
        <div class="relative mb-4">
            <x-form-widget :form="$form['profile_photo_path']" label="Foto Profil"></x-form-widget>
        </div>

        <div class="relative mb-4">
            <x-form-widget :form="$form['roles']" label="Roles"></x-form-widget>
        </div>

        @formWidget($form['save'], ['attr' => ['class' => 'items-center my-4 px-4 py-2 bg-gray-800 border
        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
        active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25
        transition ease-in-out duration-150 text-normal']])
    </div>

</div>

@formEnd($form)
