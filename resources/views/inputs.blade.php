<x-app-layout>
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Inputs</x-breadcrumbs>
        
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-headings.h2 class="mb-4">Inputs</x-headings.h2>
                <hr class="mb-8" />

                <x-input.group for="textarea" label="Textarea" helpText="Sample Help Text">
                    <x-input.textarea></x-input.textarea>
                </x-input.group>

                <x-input.group for="text" label="Text" error="Sample error text">
                    <x-input.text />
                </x-input.group>

                <x-input.group for="checkbox" label="Checkbox">
                    <x-input.checkbox />
                </x-input.group>

                <x-input.group for="select" label="Select">
                    <x-input.select id="select">
                        <option value="" disabled>Select Column...</option>
                        <option>Option 1</option>
                        <option>Option 1</option>
                    </x-input.select>
                </x-input.group>
            </div>
        </div>
    </div>
</x-app-layout>