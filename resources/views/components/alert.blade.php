@props(['type', 'href'])

<div class="p-4 bg-yellow-100 border-l-4 border-bright-orange">
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Heroicon name: solid/check-circle -->
            <svg class="w-5 h-5 text-bright-orange" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
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