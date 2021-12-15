<x-app-layout>  
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Buttons</x-breadcrumbs>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <x-headings.h2 class="mb-4">Alerts</x-headings.h2>
                <hr class="mb-8" />
                
                <div class="space-y-4">
                    <div class="p-4 bg-yellow-100 border-l-4 border-bright-orange">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="w-5 h-5 text-bright-orange" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-bright-orange">
                                    Success.
                                    <a href="#" class="font-medium underline text-bright-orange hover:text-pale-orange">
                                        Upgrade your account to add more credits.
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-red-100 border-l-4 border-maroon">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/x-circle -->
                                <svg class="w-5 h-5 text-maroon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-maroon">
                                    Failure notice.
                                    <a href="#" class="font-medium underline text-maroony hover:text-gray-900">
                                        Upgrade your account to add more credits.
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>    

                    <div class="p-4 bg-gray-100 border-l-4 border-dark-gray">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/exclamation -->
                                <svg class="w-5 h-5 text-dark-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-dark-gray">
                                    Warning notice.
                                    <a href="#" class="font-medium underline text-dark-gray hover:text-gray-900">
                                        Upgrade your account to add more credits.
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>