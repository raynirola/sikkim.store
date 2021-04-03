<x-slot name="title">Reset password</x-slot>
<div class="flex flex-col h-screen sm:h-auto justify-end">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="fixed bottom-0 w-full sm:relative px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10 box-shadow">

            <div class="mb-5 flex flex-col items-center justify-center">
                <a href="{{ route('home') }}" title="Sikkim Store Home Page" class="flex items-center justify-start" aria-label="Sikkim Store">
                    <x-logo_type class="w-auto h-8"/>
                </a>
                <h2 class="text-sm font-semibold text-center text-gray-900 leading-9">
                    Reset password
                </h2>
            </div>

            <form wire:submit.prevent="resetPassword">
                <input wire:model="token" type="hidden">

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            wire:model.defer="email"
                            class="py-2.5 mt-1 block w-full rounded-md border-gray-300 focus:border-green-600 focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('email') border-red-300 focus:shadow-outline-red @enderror"
                            placeholder="e.g. kulan@example.net"
                            autocomplete="username"
                            inputmode="email"
                            autofocus
                            required
                            disabled
                        />
                    </div>

                    @error('email')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            wire:model.defer="password"
                            class="py-2.5 mt-1 block w-full rounded-md border-gray-300 focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('password') border-red-300 focus:shadow-outline-red @enderror"
                            placeholder="New password"
                            autocomplete="new-password"
                            required
                        />
                    </div>

                    @error('password')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                        Confirm Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            wire:model.defer="passwordConfirmation"
                            class="py-2.5 mt-1 block w-full rounded-md border-gray-300 focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400"
                            placeholder="Confirm password"
                            autocomplete="new-password"
                            required
                        />
                    </div>
                </div>

                <div class="mt-6">
                    <button wire:loading.attr="disabled" wire:target="resetPassword" type="submit" class="w-full btn btn-icon btn-primary bg-green-600 hover:bg-green-700 disabled:opacity-50 py-3">
                        <svg wire:loading wire:target="resetPassword" class="animate-spin mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff" stroke-width="3px" fill="none"></circle>
                            <path class="opacity-75" fill="#ffffff" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span wire:loading.remove wire:target="resetPassword">
                                Reset password
                            </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
