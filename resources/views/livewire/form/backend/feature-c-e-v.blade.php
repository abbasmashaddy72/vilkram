<x-backend.custom-form back='true'>
    <x-slot name="title">{{ __('Feature') }}</x-slot>
    @if ($action == 'create')
        <form wire:submit.prevent="store">
        @elseif($action == 'edit')
            <form wire:submit.prevent="update">
            @else
                <form id="form">
    @endif
    @csrf

    @wire('debounce.200ms')
        <x-form-select name="team_id" label="Doctor Name" :options="Helper::getKeyValues('Team', 'name', 'id')" placeholder="Please Select" />

        <x-form-input name="title" label="Title" type="text" />

        <x-form-textarea name="excerpt" label="Excerpt" required />

        <x-backend.ckeditor id="bodyen" lang="EN" name="description" label="Description" required />
    @endwire

    <div class="mt-3">
        @if ($action == 'create')
            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        @elseif($action == 'edit')
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        @else
        @endif
    </div>
    </form>
</x-backend.custom-form>
