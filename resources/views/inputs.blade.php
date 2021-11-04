<x-app-layout>
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Inputs</x-breadcrumbs>
        
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-headings.h2 class="mb-4">Inputs</x-headings.h2>
                <hr class="mb-8" />

                <x-headings.h3 class="mb-4">Column</x-headings.h3>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <!-- Input: text -->
                    <x-input.group for="testText" label="input.text" error="Sample error text" helpText="Sample help text">
                        <x-input.text id="testText" name="testText" aria-placeholder="test" placeholder="testText" />
                    </x-input.group>
                    <!-- Textarea -->
                    <x-input.group for="testTextarea" label="input.textarea" error="Sample error text" helpText="Sample help text">
                        <x-input.textarea id="testTextarea" name="testTextarea" aria-placeholder="test" placeholder="testTextarea" rows="5"></x-input.textarea>
                    </x-input.group>
                    <!-- Input: Checkbox -->
                    <x-input.group for="testCheckbox" label="input.checkbox" error="Sample error text" helpText="Sample help text">
                        <x-input.checkbox id="testCheckbox" name="testCheckbox" value="1" />
                    </x-input.group>
                    <!-- Select/Dropdown -->
                    <x-input.group for="testSelect" label="input.select" error="Sample error text" helpText="Sample help text">
                        <x-input.select id="testSelect" name="testSelect">
                            <option value="" disabled>Select Column...</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 1</option>
                        </x-input.select>
                    </x-input.group>


                    <!-- Input: Radio -->
                    <x-input.radio-group label="Radio group">
                        <x-input.radio id="radio-group" name="radio-group" value="1" label="radio 1"></x-input.radio>
                        <x-input.radio id="radio-group" name="radio-group" value="2" label="radio 2"></x-input.radio>
                    </x-input.radio-group>
                </div>

                <hr class="my-8" />

                <x-headings.h3 class="mb-4">Inline</x-headings.h3>
                <div>
                    <!-- Input: text -->
                    <x-input.group inline for="text" label="input.text" error="Sample error text" helpText="Sample help text">
                        <x-input.text id="test" name="test" aria-placeholder="test" placeholder="test" />
                    </x-input.group>
                    <!-- Textarea -->
                    <x-input.group inline for="testTextarea" label="input.textarea" error="Sample error text" helpText="Sample help text">
                        <x-input.textarea id="testTextarea" name="testTextarea" aria-placeholder="test" placeholder="testTextarea">
                        </x-input.textarea>
                    </x-input.group>
                    <!-- Input: Checkbox -->
                    <x-input.group inline for="testCheckbox" label="input.checkbox" error="Sample error text" helpText="Sample help text">
                        <x-input.checkbox id="testCheckbox" name="testCheckbox" value="1" />
                    </x-input.group>
                    <!-- Select/Dropdown -->
                    <x-input.group inline for="testSelect" label="input.select" error="Sample error text" helpText="Sample help text">
                        <x-input.select id="testSelect" name="testSelect">
                            <option value="" disabled>Select Column...</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 1</option>
                        </x-input.select>
                    </x-input.group>
                    <!-- Input: Radio -->
                    <x-input.radio-group inline label="Radio group">
                        <x-input.radio id="radio-group" name="radio-group" value="1" label="radio 1"></x-input.radio>
                        <x-input.radio id="radio-group" name="radio-group" value="2" label="radio 2"></x-input.radio>
                    </x-input.radio-group>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>