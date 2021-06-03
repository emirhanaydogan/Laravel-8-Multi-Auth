<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show for Cargo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b> Sender Information</b>               
            <div>
                <x-label for="sname" :value="__('Name')" />
                <x-input id="sname" class="block mt-1 w-full" type="text" name="sname" placeholder="{{ $cargo->sname }}" readonly/>
            </div>
            <div class="mt-4">
                <x-label for="stcno" :value="__('IdNumber')"/>
                <x-input id="stcno" class="block mt-1 w-full" type="text" name="stcno" placeholder="{{ $cargo->stcno }}" readonly/>
            </div>
            <div class="mt-4">
                <x-label for="sphone" :value="__('Phone')"/>
                <x-input id="sphone" class="block mt-1 w-full" type="text" name="sphone" placeholder="{{ $cargo->sphone }}" readonly/>
            </div>
            <div class="mt-4">
                <x-label for="sadress" :value="__('Adress')"/>
                <x-input id="sadress" class="block mt-1 w-full" type="text" name="sadress" placeholder="{{ $cargo->sadress }}" readonly/>
            </div>
        </div>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <b> Receiver Information</b>                   
        <div>
            <x-label for="name" :value="__('Name')" />
            <x-input id="Rname" class="block mt-1 w-full" type="text" name="rname" placeholder="{{ $cargo->rname }}" readonly/>
        </div>
        <div class="mt-4">
            <x-label for="RtcNo" :value="__('IdNumber')" />
            <x-input id="RtcNo" class="block mt-1 w-full" type="text" name="rtcno" placeholder="{{ $cargo->rtcno }}" readonly/>
        </div>
        <div class="mt-4">
            <x-label for="Rphone" :value="__('Phone')" />
            <x-input id="Rphone" class="block mt-1 w-full" type="text" name="rphone" placeholder="{{ $cargo->rphone }}" readonly/>
        </div>
        <div class="mt-4">
            <x-label for="Radress" :value="__('Adress')" />
            <x-input id="Radress" class="block mt-1 w-full" type="text" name="radress" placeholder="{{ $cargo->radress }}" readonly/>
        </div>
        <div class="mt-4">
            <x-label for="price" :value="__('Price')" />
            <x-input id="price" class="block mt-1 w-full" type="text" name="price" placeholder="{{ $cargo->price }}" readonly/>
        </div>
</div>
          <div class="p-6 bg-white border-b border-gray-200">
            <b> Vehicle Information</b>                   

                <div class="mt-4">
                 <x-label for="vehicle_id" value="{{ __('Vehicle') }}" />
                 <x-input id="price" class="block mt-1 w-full" type="text" name="price" placeholder="{{ $cargo->vehicle->name  }}" readonly/>
             </div>
             <a class="btn btn-primary" href="{{ route('cargos.index') }}"> Back</a>   
            </div>
 </x-app-layout>