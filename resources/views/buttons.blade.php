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

                    <div class="mb-8 space-y-4">
                        <x-headings.h4>Standard is medium text</x-headings.h4>
                        <x-button.primary>Primary (w/o icon)</x-button.primary>
                        <x-button.primary icon="football">Primary (w icon)</x-button.primary>
                        <x-button.secondary>Secondary (w/o icon)</x-button.secondary>
                        <x-button.secondary icon="video">Secondary (w icon)</x-button.secondary>
                        <x-button.cancel>Cancel</x-button.cancel>
                    </div>

                    <div class="space-y-4">
                        <x-headings.h4>With text-sm</x-headings.h4>
                        <x-button.primary class="text-sm">Primary (w/o icon)</x-button.primary>
                        <x-button.primary class="text-sm" icon="football">Primary (w icon)</x-button.primary>
                        <x-button.secondary class="text-sm">Secondary (w/o icon)</x-button.secondary>
                        <x-button.secondary class="text-sm" icon="video">Secondary (w icon)</x-button.secondary>
                        <x-button.cancel class="text-sm">Cancel</x-button.cancel>
                    </div>


                    <x-headings.h2 class="mt-12 mb-4">Spect8 Buttons</x-headings.h2>
                    <hr class="mb-8" />
                    
                    <div class="mb-8 space-y-4">
                        <x-button.s8primary>Primary (w/o icon)</x-button.s8primary>
                        <x-button.s8primary icon="football">Primary (w icon)</x-button.s8primary>
                        <x-button.s8secondary>Secondary (w/o icon)</x-button.s8secondary>
                        <x-button.s8secondary icon="video">Secondary (w icon)</x-button.s8secondary>
                        <x-button.cancel>Cancel</x-button.cancel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>