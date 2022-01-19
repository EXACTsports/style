<x-app-layout>
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Tables</x-breadcrumbs>

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

                    <x-slot name="foot">
                        <x-table.foot colspan="3">Column Heading 1</x-table.foot>
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

                    <x-slot name="foot">
                        <x-table.foot>Column Heading 1</x-table.foot>
                        <x-table.foot>Column Heading 2</x-table.foot>
                        <x-table.foot>Column Heading 3</x-table.foot>
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>