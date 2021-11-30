<x-app-layout>  
    <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-breadcrumbs menuItem="Components">Steps</x-breadcrumbs>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <x-headings.h2 class="mb-4">Steps</x-headings.h2>
                <hr class="mb-8" />

                <x-progress-steps :current='$current'
                    :steps="['1' => 'Order details', '2' => 'Find store location', '3' => 'Payment', '4' => 'Confirmation']">
                </x-progress-steps>
            </div>
        </div>
    </div>
    
</x-app-layout>