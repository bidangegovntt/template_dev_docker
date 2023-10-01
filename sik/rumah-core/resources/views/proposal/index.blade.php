<x-admin-layout>
    <x-slot name="page_title">
        Proposals
    </x-slot>


    <x-slot name="content">
        <div class="flex">
            <div class="w-4/5">
                <form>
                    <input type="text" class="w-2/5 " name="q" placeholder="Cari..."
                        value="{{ request('q')  }}">
                </form>
            </div>

            <div class="w-1/5 flex justify-end">

				<a href="{{ route('admin.proposal.export.excel') }}">
					<x-button>Export Data</x-button>
				</a>
            </div>
        </div>

		<div class="flex flex-col">
		  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
			  <div class="overflow-hidden">
				<table class="min-w-full text-left text-sm font-light">
				  <thead class="border-b font-medium dark:border-neutral-500">
					<tr>
					  <th scope="col" class="px-4 py-4">No</th>
					  <th scope="col" class="px-4 py-4">Judul Proposal</th>
					  <th scope="col" class="px-4 py-4">Kelompok</th>
					  <th scope="col" class="px-4 py-4">Kategori</th>
					  <th scope="col" class="px-4 py-4">Nama File</th>
					  <th scope="col" class="px-4 py-4"></th>
					</tr>
				  </thead>
				  <tbody>
					@foreach ($propo as $k => $proposal)
						<tr>
							<td class="whitespace-nowrap px-4 py-4 font-medium">{{ $k+1 }}</td>
							<td class="whitespace-nowrap px-4 py-4">
								<a href="{{ route('proposal.show', $proposal) }}">
									{{ $proposal->judul_proposal }}
								</a>
							</td>
							<td class="whitespace-nowrap px-4 py-4">{{ $proposal->kelompok }}</td>
							<td class="whitespace-nowrap px-4 py-4">{{ $proposal->kategori ? $proposal->kategori->cat_name : '' }}</td>
							<td class="whitespace-nowrap px-4 py-4"><a href="{{ asset('storage/'.$proposal->path_up_implementasi) }}" target="_blank">&nbsp;{{ $proposal->path_up_implementasi }}</a></i></td>
							<td class="whitespace-nowrap px-4 py-4">
								<a href="{{ route('proposal.show', $proposal) }}">
									<x-show-button>Show</x-show-button>
								</a>
							</td>
						</tr>
					@endforeach
				  </tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div>

		{{ $propo->links() }}

    </x-slot>
</x-admin-layout>
