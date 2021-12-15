<x-app-layout>
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Logos</x-breadcrumbs>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <x-headings.h2 class="mb-4">EXACT Logo</x-headings.h2>
                <hr class="mb-8" />

                <x-logo></x-logo>
                <p class="my-4">PNG format. Base size: 326 x 120 px.</p>

                <x-headings.h2 class="mb-4">Spect8 Logo</x-headings.h2>
                <hr class="mb-8" />
                
                <x-s8logo></x-s8logo>
                <p class="my-4">PNG format. Base size: 336 x 100 px.</p>
            </div>
        </div>
    </div>
</x-app-layout>