<x-app-layout>  
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Buttons</x-breadcrumbs>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <x-headings.h2 class="mb-4">Alerts</x-headings.h2>
                <hr class="mb-8" />

                <!-- Flag -->
                <x-headings.h3 class="mb-4">Success with Flag</x-headings.h3>
                <x-alert class="my-4" type="success" flag>
                    <p class="text-sm">
                        Successfully uploaded.
                    </p>
                </x-alert>

                <!-- Alert Black -->
                <x-headings.h3 class="mb-4">Alert</x-headings.h3>
                <x-alert class="my-4" type="exclamation">
                    <p class="text-sm">
                        Warning. Bad things are happening.
                    </p>
                </x-alert>
                
                <!-- Success: Green -->
                <x-headings.h3 class="mb-4">Success</x-headings.h3>
                <x-alert class="my-4" type="success">
                    <p class="text-sm">
                        Successfully uploaded.
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
                        There were 2 errors with your submission.
                    </h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="pl-5 space-y-1 list-disc">
                            <li>
                                Your password must be at least 8 characters
                            </li>
                            <li>
                                Other problems here
                            </li>
                        </ul>
                    </div>
                </x-alert>
                
            </div>
        </div>
    </div>
</x-app-layout>