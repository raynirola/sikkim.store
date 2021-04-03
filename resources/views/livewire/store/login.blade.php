<section class="grid grid-cols-1 lg:grid-cols-2">
    <div class="sm:min-h-screen flex flex-col sm:justify-center  px-4 pt-6 pb-8 sm:py-20 bg-white xl:py-32 ">
        <div class="mx-auto w-full md:w-3/5 lg:w-4/5 xl:w-3/5">
            <a href="{{ route('home') }}" title="Sikkim Store Home Page" class="flex items-center justify-start" aria-label="Sikkim Store">
                <x-logo class="w-auto h-8"/>
            </a>
            <h1 class="mt-8 text-xl font-extrabold text-left text-gray-800 tracking-tight">Log in to your account</h1>
            @if(session('registered'))
                <div class="mt-4 rounded-md bg-green-50 p-4">
                    <div class="flex items-start">
                        <svg class="mt-0.5 flex-shrink-0 h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-green-600">
                                {{ session('registered') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            <form wire:submit.prevent="authenticate" class="mt-4 space-y-5">
                <label class="block">
                    <span class="block mb-1 text-xs font-medium text-gray-700">Email</span>
                    <input
                        type="email"
                        wire:model.defer="email"
                        class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400"
                        placeholder="e.g. manmayagurung@example.net"
                        autocomplete="username"
                        inputmode="email"
                        required
                    />
                    @error('email')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </label>

                <label class="block">
                    <span class="block mb-1 text-xs font-medium text-gray-700">Password</span>
                    <input
                        type="password"
                        wire:model.defer="password"
                        class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400"
                        placeholder="Enter password"
                        autocomplete="recent_password"
                        required
                    />
                    @error('password')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </label>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.defer="remember" id="remember" type="checkbox"
                               class="form-checkbox w-4 h-4 text-green-600 transition duration-150 ease-in-out rounded-md"/>
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">Remember me</label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('seller.password.request') }}"
                           class="text-green-600 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>
                <button wire:loading.attr="disabled" wire:target="authenticate" type="submit"
                        class="w-full btn btn-icon btn-primary btn-lg bg-green-600 hover:bg-green-700 disabled:opacity-50">
                    <svg wire:loading wire:target="authenticate" class="animate-spin mr-3 h-5 w-5 text-white" fill="none"
                         viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff" stroke-width="3px"
                                fill="none"></circle>
                        <path class="opacity-75" fill="#ffffff"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span wire:loading.remove wire:target="authenticate">Login</span>
                </button>
            </form>

            <div class="pt-6 mt-8 text-sm font-normal text-gray-700 border-t border-gray-200">
                No account? Create one
                <a href="{{ route('seller.register') }}" class="text-green-600 hover:text-green-700 font-medium hover:underline">here</a>.
            </div>
            <div class="pt-6 mt-8 text-sm font-normal space-x-1">
                <a href="#" class="text-xs text-purple-700 hover:text-black">Privacy Policy</a>
                <span>&bullet;</span>
                <a href="#" class="text-xs text-purple-700 hover:text-black">Terms & Conditions</a>
            </div>
        </div>
    </div>
    <div class="hidden lg:block h-screen">
        <img
            src="https://images.unsplash.com/photo-1598971861713-54ad16a7e72e?w=1234"
            alt="3 women looking at a laptop"
            class="object-cover w-full h-full"
            loading="lazy"
        />
    </div>
</section>
