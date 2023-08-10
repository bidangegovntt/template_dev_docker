<x-admin-layout>
    <x-slot name="page_title">
        {{ "Artikel" }}
    </x-slot>

    <x-slot name="content">
        <div class="flex">
            <div class="w-4/5">
                <form method="GET">
                    <input type="text" class="w-2/5" name="search" placeholder="Cari..."
                        value="{{ request('search') }}">
                </form>
            </div>

            <div class="w-1/5 flex justify-end">
                <a class="" href="{{ route('admin.training.new') }}">
                    <x-button>New</x-button>
                </a>
            </div>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-5 mx-auto">
                <div class="divide-y-2 divide-gray-100">
                    <ul>
                        @foreach ($trainings as $training)
                            <li class="innovation-item">
                                <div class="py-1 flex flex-wrap md:flex-nowrap">
                                    <div class="md:flex-grow">
                                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                                            <a href="{{ route('admin.training.edit', ['training' => $training]) }}">
                                                {{ $training->title }}
                                            </a>
                                        </h2>

                                        <div class="leading-relaxed mb-4">
                                            {!! substr($training->content, 0, 300) !!}
                                        </div>

                                        <div class="inline-flex float-left">
                                            <form
                                                action="{{ route('admin.training.delete', ['training' => $training]) }}"
                                                method="post"
                                                onsubmit="return confirm('Anda Yakin akan menghapus data ini?')">
                                                @csrf
                                                <x-delete-button type='submit'></x-delete-button>
                                            </form>
                                        </div>

                                        <div class="inline-flex float-right">
                                            <a href="{{ route('admin.training.edit', ['training' => $training]) }}">
                                                <x-edit-button></x-edit-button>
                                            </a>

                                            <a href="{{ route('training-show', ['training_id' => $training->id]) }}"
                                                target="_blank">
                                                <x-show-button></x-show-button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <hr class="mt-4 mb-3">
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <div>{{ $trainings->links() }}</div>

    </x-slot>
</x-admin-layout>
