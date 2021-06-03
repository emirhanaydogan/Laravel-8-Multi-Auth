<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit for Vehicle') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('vehicles.update',$vehicle->id) }}">
        @csrf
        @method('PUT')
        <div class="py-12">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Vehicle Edit
                        <div>
                            <x-label for="name" :value="__('Name')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                     value="{{ $vehicle->name }}"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="type" :value="__('Type')"/>
                            <x-input id="type" class="block mt-1 w-full" type="text" name="type"
                                     value="{{ $vehicle->type }}"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="plate" :value="__('Plate')"/>

                            <x-input id="plate" class="block mt-1 w-full" type="text" name="plate"
                                     value="{{ $vehicle->plate }}"/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
    </form>


</x-app-layout>
