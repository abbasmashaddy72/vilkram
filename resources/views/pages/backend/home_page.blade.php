<x-app-layout>
    <x-backend.card>
        <x-slot name="title">
            {{ __('Home Page') }}
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </x-backend.card>

    <x-backend.card>

        <x-slot name="title">
            {{ __('Sliders') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.slider.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.slider-table')

    </x-backend.card>
</x-app-layout>
