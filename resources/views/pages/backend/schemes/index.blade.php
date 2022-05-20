<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Insurance') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.scheme.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.scheme-table')

    </x-backend.card>
</x-app-layout>
