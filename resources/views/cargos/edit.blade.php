<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit for Cargo') }}
        </h2>
    </x-slot>
        <form action="{{ route('cargos.update',$cargo->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Cargo Edit                 
            <div class="mt-4">
                <x-label for="sname" :value="__('Name')" />
                <x-input id="sname" class="block mt-1 w-full" type="text" name="sname" value="{{ $cargo->sname }}"/>
            </div>
            <div class="mt-4">
                <x-label for="stcno" :value="__('IdNumber')" />
                <x-input id="stcno" class="block mt-1 w-full" type="text" name="stcno" value="{{ $cargo->stcno }}"/>
            </div>
            <div class="mt-4">
                <x-label for="sphone" :value="__('Phone')" />
                <x-input id="sphone" class="block mt-1 w-full" type="text" name="sphone" value="{{ $cargo->sphone }}"/>
            </div>
            <div class="mt-4">
                <x-label for="sadress" :value="__('Adress')" />
                <x-input id="sadress" class="block mt-1 w-full" type="text" name="sadress" value="{{ $cargo->sadress }}"/>
            </div>
        </div>
    </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <b> Receiver Information</b>                   
 <div>
     <x-label for="name" :value="__('Name')" />
     <x-input id="Rname" class="block mt-1 w-full" type="text" name="rname" value="{{ $cargo->rname }}"/>
 </div>
 <div class="mt-4">
     <x-label for="RtcNo" :value="__('IdNumber')" />
     <x-input id="RtcNo" class="block mt-1 w-full" type="text" name="rtcno" value="{{ $cargo->rtcno }}"/>
 </div>
 <div class="mt-4">
     <x-label for="Rphone" :value="__('Phone')" />
     <x-input id="Rphone" class="block mt-1 w-full" type="text" name="rphone" value="{{ $cargo->rphone }}"/>
 </div>
 <div class="mt-4">
     <x-label for="Radress" :value="__('Adress')" />
     <x-input id="Radress" class="block mt-1 w-full" type="text" name="radress" value="{{ $cargo->radress }}"/>
 </div>
 <div class="mt-4">
     <x-label for="price" :value="__('Price')" />
     <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ $cargo->price }}"/>
    <x-input id="diff_price" class="block mt-1 w-full" type="hidden" name="diff_price" value="{{ $cargo->price }}"/>
 </div>
 
</div>
          <div class="p-6 bg-white border-b border-gray-200">
        <b> Vehicle Information</b>                   

                <div class="mt-4">
                 <x-label for="vehicle_id" value="{{ __('Vehicle') }}" />
                 <select name="vehicle_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                      @foreach ($vehicles as $key => $value)
                         <option value="{{ $key }}">{{ $value }}</option>
                         @if ($key !== $vehicle->id )
                         <option value="{{ $key }}">{{ $value }}</option>
                     @endif
                     @endforeach
                 </select>
                   <div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Submit') }}
    </x-button>
    </div>
             </div>

            </div>  
    </form>

</x-app-layout>

<script>
    var price = document.getElementById('price');
    var diff_price = document.getElementById('diff_price');

    var priceValue = price.value
    var newValue = 0

    price.addEventListener('focusout', (event) => {
    console.log(event.target.value)
    newValue = event.target.value
    diff_price.value = newValue - priceValue

    });

    console.log(priceValue)




</script>

