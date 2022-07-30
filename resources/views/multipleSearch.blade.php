<x-app-layout>

    @push('css')
        <style>
            @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
        </style>
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" pl-8 py-4 md:py-8 h-full px-4 md:px-0">

        <livewire:multiple-search-component />

    </div>

    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    @endpush

</x-app-layout>
