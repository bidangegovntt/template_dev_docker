<div>
    @if ($state == 'displayFiles')
        <ol>
        @foreach ($attachments as $file)
            <li class="w-full inline-flex flex">
                <div class="w-4/5">
                    <a href="{{ asset(disk_url($file->file_name_hash)) }}" target="_blank" class="link">
                        {{ $file->file_name }}
                        <x-icon-open-external class="w-5 h-5 inline-flex"></x-icon-open-external>
                    </a>
                </div>
                <div class="w-1/5">
                    <x-button type="button" wire:click="promptDelete({{ $file->id }})" class="text-xs bg-red-700">Delete</x-button>
                </div>
            </li>
        @endforeach
        </ol>

    @elseif ($state == 'promptDelete')
        <div class="align-center mb-3">
        @if($learningMaterialAttachment)
            <p>Are you sure want to delete
                <a href="{{ asset(disk_url($learningMaterialAttachment->file_name_hash)) }}" target="_blank" class="link">
                    {{ $learningMaterialAttachment->file_name }}
                    <x-icon-open-external class="w-5 h-5 inline-flex"></x-icon-open-external>
                </a>
                ?
            </p>

            <div class="align-center inline-flex">
                <x-button type="button" wire:click="delete({{ $learningMaterialAttachment->id }})" class="text-xs bg-red-700 mx-2">Delete</x-button>
                <x-button type="button" wire:click="display({{ $learningMaterialAttachment->id }})" class="text-xs bg-grey-500">Cancel</x-button>

            </div>
        @else
            <p>File not found. May be already deleted?</p>
            <x-button type="button" wire:click="display({{ $learningMaterialAttachment->id }})" class="text-xs bg-grey-500">Cancel</x-button>
        @endif
        </div>
    @else

    @endif
</div>
