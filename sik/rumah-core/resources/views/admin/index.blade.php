<x-admin-layout>
    <x-slot name="page_title">
        {{ __('Dashboard') }}
    </x-slot>

    <x-slot name="content">
        <h1>Statistik Inovasi</h1>
        <table class="border-collapse w-full border border-gray-400 bg-white text-sm shadow-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="w-1/5 border border-gray-300 font-semibold p-4 text-gray-900 text-left">No</th>
                    <th class="w-3/5 border border-gray-300 font-semibold p-4 text-gray-900 text-left">Daerah</th>
                    <th class="w-1/5 border border-gray-300 font-semibold p-4 text-gray-900 text-left">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($statistic as $value)
                    <tr>
                        <td class="border border-gray-300 p-4 text-gray-500">{{$no}}</td>
                        <td class="border border-gray-300 p-4 text-gray-500">{{$value->city->name}}</td>
                        <td class="border border-gray-300 p-4 text-gray-500">{{$value->jumlah}}</td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-admin-layout>
