<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create for Cargo Register') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('cargos.store') }}">
        @csrf
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b>Sender Information</b>                  
            <div>
                <x-label for="sname" :value="__('Name')" />
                <x-input id="sname" class="block mt-1 w-full" type="text" name="sname"   required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="stcNo" :value="__('IdNumber')" />
                <x-input id="stcNo" class="block mt-1 w-full" type="text" name="stcno" minlength='11'  maxlength='11' size="11"  required />
            </div>
            <div class="mt-4">
                <x-label for="Sphone" :value="__('Phone')" />
                <x-input id="sphone" class="block mt-1 w-full" type="text" placeholder="+90 (XXX) XXX-XX-XX"  name="sphone" required />
            </div>
            <div class="mt-4">
                <x-label for="Sadress" :value="__('Adress')" />
                <x-input id="Sadress" class="block mt-1 w-full" type="text" name="sadress"  required />
            </div>
            </div>
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
           <b> Receiver Information</b>                   
    <div>
        <x-label for="name" :value="__('Name')" />
        <x-input id="Rname" class="block mt-1 w-full" type="text" name="rname" required autofocus />
    </div>
    <div class="mt-4">
        <x-label for="RtcNo" :value="__('IdNumber')" />
        <x-input id="RtcNo" class="block mt-1 w-full" type="text" name="rtcno"  required />
    </div>
    <div class="mt-4">
        <x-label for="Rphone" :value="__('Phone')" />
        <x-input id="rphone" class="block mt-1 w-full" type="text" name="rphone" placeholder="+90 (XXX) XXX-XX-XX" required />
    </div>
    <div class="mt-4">
        <x-label for="Radress" :value="__('Adress')" />
        <x-input id="Radress" class="block mt-1 w-full" type="text" name="radress"  required />
    </div>
    <div class="mt-4">
        <x-label for="price" :value="__('Price')" />
        <x-input id="price" class="block mt-1 w-full" type="text" name="price"  required />
    </div>
</div>
             <div class="p-6 bg-white border-b border-gray-200">
           <b> Vehicle Information</b>                   
   
         <div class="mt-4">
                    <x-label for="vehicle_id" value="{{ __('Vehicle') }}" />
                    <select name="vehicle_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                         @foreach ($vehicles as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

    <div class="flex items-center justify-end mt-4">
    <x-button class="ml-4">
        {{ __('Submit') }}
    </x-button>
    </div>
</div>
        
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script>
$('#sphone').inputmask("+99 (999) 999-9999");
$('#rphone').inputmask("+99 (999) 999-9999");
$('#price').mask("#,##0.00", {reverse: true});
</script>
