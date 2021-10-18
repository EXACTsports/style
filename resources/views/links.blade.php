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
                    <x-headings.h2 class="mb-4">Links</x-headings.h2>
                    <hr class="mb-8" />
                    
                    <p><x-anchor href="#">Standard Link in Text (Gray)</x-anchor></p>
                    <p><x-anchor href="#" color="bright-orange">Standard Link in Text (Bright Orange)</x-anchor></p>
                    <p><x-anchor href="#" color="maroon">Standard Link in Text (Maroon)</x-anchor></p>        
                </div>
                <div class="p-6">
                    <x-headings.h2 class="mt-8 mb-4">Icon Links</x-headings.h2>
                    <hr class="mb-8" />
                    <x-icon-link href="#" icon="football"></x-icon-link>
                    <x-icon-link href="#" icon="edit"></x-icon-link>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>