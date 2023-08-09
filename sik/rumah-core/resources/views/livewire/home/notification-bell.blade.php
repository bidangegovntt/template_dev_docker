<div wire:poll.3000ms>
    @if ($ada_notifikasi > 0)
        {{-- <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
        </div> --}}
        <span
            class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1 "
            style="animation: pulse 1s ease infinite;">
            <span class="visually-hidden">unread messages</span>
        </span>
        <style>
            @keyframes pulse {
                0% {
                    transform: scale(1);
                    opacity: 1;
                }

                60% {
                    transform: scale(1.3);
                    opacity: 0.4;
                }

                100% {
                    transform: scale(1.4);
                    opacity: 0;
                }
            }

        </style>
    @endif
</div>
