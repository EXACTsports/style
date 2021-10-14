<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Inputs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-input.group for="textarea" label="Textarea">
                        <x-input.textarea></x-input.textarea>
                    </x-input.group>

                    <x-input.group for="text" label="Text">
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
    </div>
</x-app-layout>