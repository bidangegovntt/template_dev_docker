<x-admin-layout>
    <x-slot name="page_title">
        {{ __('Innovator') }}
    </x-slot>


    <x-slot name="content">

        <div class="flex">
            <div class="w-4/5">
                <input type="text" class="w-2/5 " name="search" placeholder="Cari...">
            </div>

            <div class="w-1/5 flex justify-end">
                <a href="{{ route('admin.innovator.new') }}"><x-button>New</x-button></a>
            </div>
        </div>


        <section class="text-gray-600 body-font">
          <div class="container px-5 py-5 mx-auto">
            <div class="divide-y-2 divide-gray-100">

            <ul>
            @foreach($innovators as $innovator)
                <li class="innovation-item">

                     <div class="py-1 flex flex-wrap md:flex-nowrap">
                        <div class="md:flex-grow">
                          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">

                            <a href="{{ route('admin.innovator.edit', ['innovator' => $innovator]) }}">
                            {{ $innovator->fullname }}
                            </a>
                          </h2>

                          <div class="leading-relaxed">
                             {{ $innovator->instance_name }}
                          </div>

                          <div class="inline-flex float-right">
                            <a href="{{ route("admin.innovator.edit", ['innovator' => $innovator]) }}">
                                <x-edit-button></x-edit-button>
                            </a>

                            <a href="">
                                <x-show-button></x-show-button>
                            </a>
                          </div>
                        </div>
                      </div>

                </li>
            @endforeach
            </ul>

            </div>
        </div>
    </section>

        {{ $innovators->links() }}
    </x-slot>
</x-admin-layout>
