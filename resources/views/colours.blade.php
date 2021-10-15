<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Fonts & Colours') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Exact Custom Colours</x-headings.h2>
                    <hr class="mb-8" />
                
                    <div class="flex space-x-4">
                        <div class="flex items-center justify-center w-32 h-32 text-center text-white rounded bg-logo-orange">Logo
                            Orange<br />[#FE5000]</div>
                    </div>
                </div>
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Exact Standard Colours</x-headings.h2>
                    <hr class="mb-8" />
                
                    <div class="flex space-x-4">
                        <div class="flex items-center justify-center w-32 h-32 text-center text-white bg-gray-900 rounded">Background <br /> [gray-900]</div>
                        <div class="flex items-center justify-center w-32 h-32 text-center text-gray-900 bg-white rounded">Content Background <br /> [white]</div>
                        <div class="flex items-center justify-center w-32 h-32 text-center text-white bg-gray-800 rounded">Text <br /> [gray-800]</div>
                    </div>
                </div>
                                
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Spect8 Custom Colours</x-headings.h2>
                    <hr class="mb-8" />
                    
                    <div class="flex space-x-4">
                        <div class="flex items-center justify-center w-32 h-32 text-center text-white rounded bg-maroon">Maroon <br />[#8E1000]</div>
                            
                        <div class="flex items-center justify-center w-32 h-32 text-center rounded text-maroon bg-bright-orange">Bright Orange<br />[#F28C00]</div>
                        <div class="flex items-center justify-center w-32 h-32 text-center rounded text-maroon bg-pale-orange">Pale Orange<br />[#F4BE76]</div>
                    
                        <div class="flex items-center justify-center w-32 h-32 text-center text-white rounded bg-dark-gray">Dark Gray<br />[#363F51]</div>
            
                        <div class="flex items-center justify-center w-32 h-32 text-center text-white rounded bg-pale-brown">Pale Brown<br />[#B99A7B]</div>
                        <div class="flex items-center justify-center w-32 h-32 text-center rounded text-dark-gray bg-beige">Beige<br />[#F8F4EA]</div>
                    </div>
                </div>

                <div class="p-6">
                    <x-headings.h2 class="mb-4">Fonts</x-headings.h2>
                    <hr class="mb-8" />

                    <x-headings.h3>Headings: Roboto</x-headings>
                    <p class="font-sans">Content &amp; Navigation: Noto Sans</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>