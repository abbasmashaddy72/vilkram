<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Contact Us') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.contact-us.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.contact-us-table')

    </x-backend.card>
</x-app-layout>
