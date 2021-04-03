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
                        <a href="{{ route('password.request') }}"
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

            <div class="mt-8 space-y-10">
                <div class="text-center border-b border-gray-200" style="line-height: 0px">
                <span class="p-2 text-xs font-semibold tracking-wide text-gray-600 uppercase bg-white"
                      style="line-height: 0px">Or</span>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="py-3 btn btn-icon btn-google">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="mr-1">
                            <path
                                d="M20.283,10.356h-8.327v3.451h4.792c-0.446,2.193-2.313,3.453-4.792,3.453c-2.923,0-5.279-2.356-5.279-5.28	c0-2.923,2.356-5.279,5.279-5.279c1.259,0,2.397,0.447,3.29,1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233	c-4.954,0-8.934,3.979-8.934,8.934c0,4.955,3.979,8.934,8.934,8.934c4.467,0,8.529-3.249,8.529-8.934	C20.485,11.453,20.404,10.884,20.283,10.356z"/>
                        </svg>
                        <span class="sr-only">Continue with</span> Google
                    </a>
                    <a href="#" class="py-3 btn btn-icon btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="currentColor" class="mr-1">
                            <path
                                d="M19.665,16.811c-0.287,0.664-0.627,1.275-1.021,1.837c-0.537,0.767-0.978,1.297-1.316,1.592	c-0.525,0.482-1.089,0.73-1.692,0.744c-0.432,0-0.954-0.123-1.562-0.373c-0.61-0.249-1.17-0.371-1.683-0.371	c-0.537,0-1.113,0.122-1.73,0.371c-0.616,0.25-1.114,0.381-1.495,0.393c-0.577,0.025-1.154-0.229-1.729-0.764	c-0.367-0.32-0.826-0.87-1.377-1.648c-0.59-0.829-1.075-1.794-1.455-2.891c-0.407-1.187-0.611-2.335-0.611-3.447	c0-1.273,0.275-2.372,0.826-3.292c0.434-0.74,1.01-1.323,1.73-1.751C7.271,6.782,8.051,6.563,8.89,6.549	c0.46,0,1.063,0.142,1.81,0.422s1.227,0.422,1.436,0.422c0.158,0,0.689-0.167,1.593-0.498c0.853-0.307,1.573-0.434,2.163-0.384	c1.6,0.129,2.801,0.759,3.6,1.895c-1.43,0.867-2.137,2.08-2.123,3.637c0.012,1.213,0.453,2.222,1.317,3.023	c0.392,0.372,0.829,0.659,1.315,0.863C19.895,16.236,19.783,16.529,19.665,16.811L19.665,16.811z M15.998,2.38	c0,0.95-0.348,1.838-1.039,2.659c-0.836,0.976-1.846,1.541-2.941,1.452c-0.014-0.114-0.021-0.234-0.021-0.36	c0-0.913,0.396-1.889,1.103-2.688c0.352-0.404,0.8-0.741,1.343-1.009c0.542-0.264,1.054-0.41,1.536-0.435	C15.992,2.127,15.998,2.254,15.998,2.38L15.998,2.38z"/>
                        </svg>
                        <span class="sr-only">Continue with</span> Apple
                    </a>
                </div>
            </div>
            <div class="pt-6 mt-8 text-sm font-normal text-gray-700 border-t border-gray-200">
                No account? Create one
                <a href="{{ route('register') }}" class="text-green-600 hover:text-green-700 font-medium hover:underline">here</a>.
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
