<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Headings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-headings.h2 class="mb-4">Headings</x-headings.h2>
                    <hr class="mb-8" />
                    
                    <x-headings.h1>Heading 1</x-headings.h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos in corrupti
                        eius! Laborum voluptates voluptatem similique sapiente fugit officia magni, iure provident, quam
                        libero nostrum fuga dolor pariatur delectus!</p>
                    <x-headings.h2>Heading 2</x-headings.h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos in corrupti
                        eius! Laborum voluptates
                        voluptatem similique sapiente fugit officia magni, iure provident, quam libero nostrum fuga
                        dolor pariatur delectus!
                    </p>
                    <x-headings.h3>Heading 3</x-headings.h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos in corrupti
                        eius! Laborum voluptates
                        voluptatem similique sapiente fugit officia magni, iure provident, quam libero nostrum fuga
                        dolor pariatur delectus!
                    </p>
                    <x-headings.h4>Heading 4</x-headings.h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos in corrupti
                        eius! Laborum voluptates
                        voluptatem similique sapiente fugit officia magni, iure provident, quam libero nostrum fuga
                        dolor pariatur delectus!
                    </p>
                    <x-headings.h5>Heading 5</x-headings.h5>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos in corrupti
                        eius! Laborum voluptates
                        voluptatem similique sapiente fugit officia magni, iure provident, quam libero nostrum fuga
                        dolor pariatur delectus!
                    </p>
                    <x-headings.h6>Heading 6</x-headings.h6>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos in corrupti
                        eius! Laborum voluptates
                        voluptatem similique sapiente fugit officia magni, iure provident, quam libero nostrum fuga
                        dolor pariatur delectus!
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>