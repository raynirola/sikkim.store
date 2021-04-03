<div x-cloak x-show="messageSent; $nextTick(() => setTimeout(() => messageSent = false, 4000))" @message-sent.window="messageSent = true" class="w-full fixed top-0 right-0 sm:top-20 sm:right-4 md:rounded-lg shadow box-shadow sm:max-w-sm border border-gray-200 z-10 bg-white"

     x-transition:enter="transform transition ease-in-out duration-800"
     x-transition:enter-start="-translate-y-full sm:-translate-y-0 sm:translate-x-full"
     x-transition:enter-end="translate-y-0 sm:translate-x-0"

     x-transition:leave="transform transition ease-in-out duration-400"
     x-transition:leave-start="translate-y-0 sm:translate-x-0"
     x-transition:leave-end="-translate-y-full sm:-translate-y-0 sm:translate-x-full">

    <div class="relative flex items-start p-4">

        <svg class="w-5 text-green-600 mr-3 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <div>
            <p class="font-medium text-sm text-gray-900 mb-1">Successfully sent!</p>
            <p class="text-xs text-gray-600">Your message has been sent, we'll get in touch.</p>
        </div>

        <svg @click="messageSent = false" class="absolute top-2 right-2 w-5 text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>
</div>
