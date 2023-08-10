<x-admin-layout>
    <x-slot name="page_title">
        {{ __('User') }}
    </x-slot>

    <x-slot name="content">

        <div class="flex">
            <div class="w-4/5">
                <form>
                    <input type="text" class="w-2/5 " name="search" placeholder="Cari..."
                        value="{{ request('search') }}">
                </form>
            </div>

            <div class="w-1/5 flex justify-end">
                <a href="{{ route('admin.user.new') }}">
                    <x-button>New</x-button>
                </a>
            </div>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-5 mx-auto">
                <div class="divide-y-2 divide-gray-100">

                    <ul class="flex flex-wrap -m-2">
                        @foreach ($users as $user)
                            <li class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                <a href="{{ route('admin.user.edit', ['user' => $user]) }}">
                                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                        <x-profile-picture
                                            src="{{ $user->profile_photo_path ? asset('storage/'. $user->profile_photo_path) : '' }}"
                                            alt="{{ $user->name }}" class="w-12 h-12 mr-4"></x-profile-picture>
                                        <div class="flex-grow">
                                            <h2 class="text-gray-900 title-font font-medium">{{ $user->name }}</h2>
                                            <p class="text-gray-500">{{ $user->instance_name }}</p>
                                        </div>

                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </section>

        {{ $users->links() }}
    </x-slot>
</x-admin-layout>
