<x-app-layout>
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Links</x-breadcrumbs>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <x-headings.h2 class="mb-4">EXACT Links</x-headings.h2>
                <hr class="mb-8" />
                
                <p class="text-gray-800">This is a standard <x-anchor href="#" color="blue">link (blue-600)</x-anchor> in a paragraph.</p>
                <p class="text-gray-800">This is a standard <x-anchor href="#" color="blue" icon="back">link (blue-600)</x-anchor>
                    with a back icon in a paragraph.</p>
                <p class="text-gray-800">This is a standard <x-anchor href="#" color="blue" icon="ext">link (blue-600)</x-anchor>
                        with an external link icon in a paragraph.</p>
                <p class="text-gray-800">This is a standard <x-anchor href="#" color="logo-orange">link (logo-orange)</x-anchor> in a
                    paragraph, using the EXACT Sports Logo Orange.</p> 
            </div>
            <div class="p-6">
                <x-headings.h2 class="mb-4">Spect8 Links</x-headings.h2>
                <hr class="mb-8" />
            
                <p class="text-gray-800">This is a standard <x-anchor href="#" color="bright-orange">link (bright-orange)</x-anchor>
                    in a paragraph, using the Spect8 Logo Orange.</p>
                <p class="text-gray-800">This is a standard <x-anchor href="#" color="maroon">link (maroon)</x-anchor> in a
                    paragraph.</p>
            </div>
            <div class="p-6">
                <x-headings.h2 class="mb-4">Spect8 Icon Links</x-headings.h2>
                <hr class="mb-8" />
                
                <div><x-icon-link href="#" icon="football"></x-icon-link> (icon: football)</div>
                <div><x-icon-link href="#" icon="edit"></x-icon-link> (icon: edit)</div>
                <div><x-icon-link href="#" icon="delete"></x-icon-link> (icon: delete)</div>
                <div><x-icon-link href="#" icon="share"></x-icon-link> (icon: share)</div>
                <div><x-icon-link href="#" icon="label"></x-icon-link> (icon: label)</div>           
            </div>
        </div>
    </div>
</x-app-layout>