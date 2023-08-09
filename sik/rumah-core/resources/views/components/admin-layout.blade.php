<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page_title }}
        </h2>
    </x-slot>

    <x-slot name="styles">
        <style>
            .link {
                text-decoration-line: underline;
            }

        </style>

        {{ $styles ?? '' }}
    </x-slot>

    <x-slot name="scripts">
        {{ $scripts ?? '' }}
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-5">
            <x-notifications></x-notifications>

            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $content }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
