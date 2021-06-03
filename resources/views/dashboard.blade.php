<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're  dashboard logged in as Admin<br>
                    Your name is: {{Auth::user()->name}}<br>
                    Your e-mail address is: {{Auth::user()->email}}<br>
                    {{-- Your password is: {{Auth::user()->password}}<br> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
