<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create for Vehicle') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('vehicles.store') }}">
        @csrf
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Vehicle Create                 
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" maxlength="25" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="type" :value="__('Type')" />

                <x-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required />
            </div>
            <div class="mt-4">
                <x-label for="plate" :value="__('Plate')" />

                <x-input id="plate" class="block mt-1 w-full" type="text" name="plate" :value="old('plate')" required />
            </div>
            <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('Submit') }}
            </x-button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
