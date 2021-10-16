<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Links') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Spect8 Icon Links</x-headings.h2>
                    <hr class="mb-8" />
                    
                    <x-anchor href="#">Link</x-anchor>
                    <x-icon-link icon="edit"></x-icon-link>
                    <x-icon-link icon="delete" />
                    <x-icon-link icon="share" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>