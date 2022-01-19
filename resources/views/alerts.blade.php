<x-app-layout>  
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Buttons</x-breadcrumbs>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <x-headings.h2 class="mb-4">Alerts</x-headings.h2>
                <hr class="mb-8" />

                <div class="p-4 mb-4 bg-green-100 border-l-4 border-green-400">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Heroicon name: solid/check-circle -->
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3 text-green-900">
                            info here
                        </div>
                    </div>
                </div>

                <!-- Flag -->
                <x-headings.h3 class="mb-4">Success with Flag</x-headings.h3>
                <x-alert class="my-4" type="success" flag>
                    <p class="text-sm">
                        Successfully uploaded
                    </p>
                </x-alert>
                
                <!-- Success: Green -->
                <x-headings.h3 class="mb-4">Success</x-headings.h3>
                <x-alert class="my-4" type="success">
                    <p class="text-sm">
                        Successfully uploaded
                    </p>
                </x-alert>

                <!-- Warning: Yellow -->
                <x-headings.h3 class="mb-4">Warning</x-headings.h3>
                <x-alert class="my-4" type="warning">
                    <p class="text-sm">
                        You have no credits left.
                        <a href="#" class="font-medium underline hover:text-gray-800">
                            Upgrade your account to add more credits.
                        </a>
                    </p>
                </x-alert>

                <!-- Failure: Red -->
                <x-headings.h3 class="mb-4">Failure</x-headings.h3>
                <x-alert class="my-4" type="failure">
                    <h3 class="text-sm font-medium ">
                        There were 2 errors with your submission
                    </h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="pl-5 space-y-1 list-disc">
                            <li>
                                Your password must be at least 8 characters
                            </li>
                            <li>
                                Your password must include at least one pro wrestling finishing move
                            </li>
                        </ul>
                    </div>
                </x-alert>
                <!-- EXACT Orange -->
                <x-headings.h3 class="mb-4">EXACT Orange</x-headings.h3>
                <x-alert class="my-4" type="orange">
                    <h3 class="text-sm font-medium ">
                        There were 2 errors with your submission
                    </h3>
                </x-alert>
            </div>
        </div>
    </div>
</x-app-layout>