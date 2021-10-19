<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tables') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Tables</x-headings.h2>
                    <hr class="mb-8" />

                    <x-table class="mb-8">
                        <x-slot name="head">
                            <x-table.head>Column Heading 1</x-table.head>
                            <x-table.head>Column Heading 2</x-table.head>
                            <x-table.head>Column Heading 3</x-table.head>
                        </x-slot>

                        <x-slot name="body">
                            @for ($i = 0; $i < 5; $i++)
                            <x-table.row>
                                <x-table.cell>
                                    Column Cell Content
                                </x-table.cell>
                                <x-table.cell>
                                    Column Cell Content
                                </x-table.cell>
                                <x-table.cell>
                                    Column Cell Content
                                </x-table.cell>
                            </x-table.row>
                            @endfor
                        </x-slot>
                    </x-table>
                    
                    <x-headings.h3 class="mb-4">Spect8 Tables</x-headings.h3>
                    
                    <x-table brand="s8">
                        <x-slot name="head">
                            <x-table.head>Column Heading 1</x-table.head>
                            <x-table.head>Column Heading 2</x-table.head>
                            <x-table.head>Column Heading 3</x-table.head>
                        </x-slot>
                    
                        <x-slot name="body">
                            @for ($i = 0; $i < 5; $i++) <x-table.row>
                                <x-table.cell>
                                    Column Cell Content
                                </x-table.cell>
                                <x-table.cell>
                                    Column Cell Content
                                </x-table.cell>
                                <x-table.cell>
                                    Column Cell Content
                                </x-table.cell>
                                </x-table.row>
                            @endfor
                        </x-slot>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>