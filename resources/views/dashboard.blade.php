<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-2 mb-4">
                        <x-headings.h2>Styles</x-headings.h2>
                        <ul>
                            <li><a href="{{route('style.colours')}}">Colours</a></li>
                            <li><a href="{{route('style.colours')}}">Fonts</a></li>
                        </ul>
                    </div>
                    
                    <div class="mt-2 mb-4">
                        <x-headings.h2>Media</x-headings.h2>
                        <ul>
                            <li><a href="#">Images</a></li>
                            <li><a href="#">Icons</a></li>
                        </ul>
                    </div>

                    <div class="mt-2 mb-4">
                        <x-headings.h2>Components</x-headings.h2>
                        <ul>
                            <li><a href="#">Logo</a></li>
                            <li><a href="{{route('comp.headings')}}">Headings</a></li>
                            <li><a href="{{route('comp.buttons')}}">Buttons</a></li>
                            <li><a href="{{route('comp.links')}}">Links</a></li>
                            <li><a href="#">Badges</a></li>
                            <li><a href="{{route('comp.tables')}}">Tables</a></li>
                            <li><a href="{{route('comp.inputs')}}">Inputs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
