<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show for Vehicle') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b> Vehicle Information</b>               
            <div>
                <x-label for="sname" :value="__('Name')" />
                <x-input id="sname" class="block mt-1 w-full" type="text" name="sname" placeholder="{{ $vehicle->name }}" readonly/>
            </div>
            <div class="mt-4">
                <x-label for="stcno" :value="__('Type')"/>
                <x-input id="stcno" class="block mt-1 w-full" type="text" name="stcno" placeholder="{{ $vehicle->type }}" readonly/>
            </div>
            <div class="mt-4">
                <x-label for="sphone" :value="__('Plate')"/>
                <x-input id="sphone" class="block mt-1 w-full" type="text" name="sphone" placeholder="{{ $vehicle->plate }}" readonly/>
            </div>
        </div>
    </div> 
          <div class="p-6 bg-white border-b border-gray-200">
             <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Back</a>   
            </div>
 </x-app-layout>