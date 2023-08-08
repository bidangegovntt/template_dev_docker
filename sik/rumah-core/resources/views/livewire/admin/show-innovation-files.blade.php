<div>
    @if ($state == 'displayFiles')
        <ol>
        @foreach ($innovationFiles as $file)
            <li class="w-full inline-flex flex">
                <div class="w-1/4 mb-3">
                    {{ $file->attachmentType ? $file->attachmentType->name : '' }}
                </div>
                <div class="w-2/4">
                    <a href="{{ disk_url($file->file_name_hash) }}" target="_blank" class="link">
                        {{ $file->file_name }}
                        <x-icon-open-external class="w-5 h-5 inline-flex"></x-icon-open-external>
                    </a>
                </div>
                <div class="w-1/4">
                    <x-button type="button" wire:click="promptDelete({{ $file->id }})" class="text-xs bg-red-700">Delete</x-button>
                </div>
            </li>
        @endforeach
        </ol>
    @elseif ($state == 'promptDelete')
        <div class="align-center mb-3">
        @if($innovationFile)
            <p>Are you sure want to delete {{ $innovationFile->attachmentType ? $innovationFile->attachmentType->name : '' }}
                <a href="{{ asset(disk_url($innovationFile->file_name_hash)) }}" target="_blank" class="link">
                    {{ $innovationFile->file_name }}
                    <x-icon-open-external class="w-5 h-5 inline-flex"></x-icon-open-external>
                </a>
                ?
            </p>

            <div class="align-center inline-flex">
                <x-button type="button" wire:click="delete({{ $innovationFile->id }})" class="text-xs bg-red-700 mx-2">Delete</x-button>
                <x-button type="button" wire:click="display({{ $innovation->id }})" class="text-xs bg-grey-500">Cancel</x-button>

            </div>
        @else
            <p>File not found. May be already deleted?</p>
            <x-button type="button" wire:click="display({{ $innovation->id }})" class="text-xs bg-grey-500">Cancel</x-button>
        @endif
        </div>
    @else

    @endif
</div>
