<x-app-layout>
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-headings.h2>EXACT Sports Brands and Styles</x-headings.h2>
                This project holds the style and component information for the EXACT range of Brands.  The actual components reside in the <x-anchor href="https://github.com/EXACTsports/brand">EXACTsports/brand</x-anchor> package and the Tailwind custom colors configuration is in <x-anchor href="https://github.com/EXACTsports/colors">EXACTsports/colors</x-anchor>.

                <hr class="my-4" />

                <div class="">
                    <div class="mt-2 mb-4">
                        <x-headings.h2>Styles</x-headings.h2>
                        <ul>
                            <li><a href="{{route('style.colors')}}">Colors</a></li>
                            <li><a href="{{route('style.fonts')}}">Fonts</a></li>
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
                            <li><a href="{{route('comp.logos')}}">Logos</a></li>
                            <li><a href="{{route('comp.headings')}}">Headings</a></li>
                            <li><a href="{{route('comp.alerts')}}">Alerts</a></li>
                            <li><a href="{{route('comp.buttons')}}">Buttons</a></li>
                            <li><a href="{{route('comp.links')}}">Links</a></li>
                            <li><a href="{{route('comp.badges')}}">Badges</a></li>
                            <li><a href="{{route('comp.tables')}}">Tables</a></li>
                            <li><a href="{{route('comp.inputs')}}">Inputs</a></li>
                            <li><a href="{{route('comp.steps')}}">Steps</a></li>
                            <li><a href="{{route('comp.loading')}}">Loading</a></li>
                            <li><a href="{{route('comp.tooltips')}}">Tooltips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
