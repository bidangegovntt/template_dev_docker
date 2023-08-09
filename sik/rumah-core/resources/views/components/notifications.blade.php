<div>
@if (session('status'))

    <x-alert-bar-success>
        {{ session('status') }}
    </x-alert-bar-success>

@endif

@if (session('error'))

    <x-alert-bar-danger>
        {{ session('error') }}
    </x-alert-bar-danger>

@endif

@if (session('info'))

    <x-alert-bar-info>
        {{ session('info') }}
    </x-alert-bar-info>

@endif

</div>

