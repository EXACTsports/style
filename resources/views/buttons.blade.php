<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Buttons & Links') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Buttons</x-headings.h2>
                    <hr class="mb-8" />

                    <x-button>Do Something</x-button>
                </div>

                <div class="p-6">
                    <x-headings.h2 class="mb-4">Links</x-headings.h2>
                    <hr class="mb-8" />
                    
                    <x-anchor href="#">Go Somewhere</x-anchor>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>