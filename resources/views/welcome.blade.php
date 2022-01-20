<x-main-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <p>{{ __('Willkommen im Laravel Shop') }}</p>
    </div>
</x-main-layout>
