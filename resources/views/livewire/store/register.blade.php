<section class="grid grid-cols-1 lg:grid-cols-2">
    <div class="sm:min-h-screen flex flex-col sm:justify-center px-4 pt-6 pb-8 sm:py-20 bg-white xl:py-32">
        <div class="mx-auto w-full md:w-3/5 lg:w-4/5 xl:w-3/5">
            <a href="{{ route('home') }}" title="Sikkim Store Home Page" class="flex items-center justify-start" aria-label="Sikkim Store">
                <x-logo class="w-auto h-8"/>
            </a>
            <h1 class="mt-8 text-xl font-extrabold leading-snug tracking-tight text-left text-gray-900">
                    Sign up to start selling today, for free!
            </h1>

            @if($secondStepVerified)
                <form wire:submit.prevent="register" class="mt-8">
                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 leading-5">
                            Phone number
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="phone_number"
                                type="tel"
                                wire:model.defer="phone_number"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 disabled:text-gray-500 @error('phone_number') border-red-300 @enderror"
                                placeholder="9087654536"
                                autocomplete="tel"
                                inputmode="tel"
                                required
                                autofocus
                            />
                        </div>

                        @error('phone_number')
                        <p class="mt-2 text-xs text-red-600">{{ $errors->first() }}</p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <label for="address" class="block text-sm font-medium text-gray-700 leading-5">
                            Store Address 1
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="address"
                                type="text"
                                wire:model="address"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('address') border-red-300 @enderror"
                                placeholder="eg. Shop no 1, 2nd Floor, Lall Bazaar"
                                autocomplete="address_line_1"
                                inputmode="address"
                                required
                            />
                        </div>

                        @error('address')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="mt-6">
                        <label for="district" class="block text-sm font-medium text-gray-700 leading-5">
                            District
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <select id="district"
                                    required
                                    class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('district') border-red-300 @enderror">
                                <option selected disabled>Choose</option>
                                <option>East District</option>
                                <option>West District</option>
                                <option>South District</option>
                                <option>North District</option>
                            </select>
                        </div>
                        @error('district')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="address" class="block text-sm font-medium text-gray-700 leading-5">
                            Constituency
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="slug"
                                type="text"
                                wire:model="slug"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('slug') border-red-300 @enderror"
                                placeholder="jasuda-baskets"
                                inputmode="text"
                                required
                            />
                        </div>
                        @error('slug')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <button wire:loading.attr="disabled" wire:target="register" type="submit"
                                class="w-full btn btn-icon btn-primary btn-lg bg-green-600 hover:bg-green-700 disabled:opacity-50">
                            <svg wire:loading wire:target="register"
                                 class="animate-spin mr-3 h-5 w-5 text-white" fill="none"
                                 viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff"
                                        stroke-width="3px"
                                        fill="none"></circle>
                                <path class="opacity-75" fill="#ffffff"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span wire:loading.remove wire:target="register" class="text-base">Register</span>
                        </button>
                    </div>
                </form>

            @elseif($invitationVerified)
                <form wire:submit.prevent="verifySecondStep" class="mt-8">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Store Name
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="name"
                                type="text"
                                wire:model="name"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('name') border-red-300 @enderror"
                                placeholder="Jasuda Baskets"
                                autocomplete="business_name"
                                inputmode="text"
                                required
                                autofocus
                            />
                        </div>

                        @error('name')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="mt-6">
                        <label for="slug" class="block text-xs font-medium text-gray-500 leading-5">
                            Store Username
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="slug"
                                type="text"
                                wire:model="slug"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('slug') border-red-300 @enderror"
                                placeholder="jasuda-baskets"
                                inputmode="text"
                                required
                            />
                        </div>
                        @error('slug')
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
                                type="password"
                                wire:model.defer="password"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('password') border-red-300 @enderror"
                                placeholder="Enter password"
                                autocomplete="new_password"
                                required
                            />
                        </div>

                        @error('password')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password_confirmation"
                               class="block text-sm font-medium text-gray-700 leading-5">
                            Confirm Password
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="password_confirmation"
                                type="password"
                                wire:model.defer="passwordConfirmation"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400"
                                placeholder="Enter password"
                                autocomplete="new_password"
                                required
                            />
                        </div>
                    </div>

                    <div class="mt-6">
                        <button wire:loading.attr="disabled" wire:target="verifySecondStep" type="submit"
                                class="w-full btn btn-icon btn-primary btn-lg bg-green-600 hover:bg-green-700 disabled:opacity-50">
                            <svg wire:loading wire:target="verifySecondStep"
                                 class="animate-spin mr-3 h-5 w-5 text-white" fill="none"
                                 viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff"
                                        stroke-width="3px"
                                        fill="none"></circle>
                                <path class="opacity-75" fill="#ffffff"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span wire:loading.remove wire:target="verifySecondStep" class="text-base">{{$step}}</span>
                        </button>
                    </div>
                </form>
            @else
                <form wire:submit.prevent="verifyInvitation" class="mt-8">
                    <div>
                        <label for="invitationCode" class="block text-sm font-medium text-gray-700 leading-5">
                            Invitation Code
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="invitationCode"
                                type="text"
                                wire:model.defer="invitationCode"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('*') border-red-300 @enderror"
                                placeholder="67FGY56Rt"
                                autocomplete="one-time-code"
                                inputmode="text"
                                required
                                autofocus
                            />
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            Email address
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input
                                id="email"
                                type="email"
                                wire:model.defer="email"
                                class="py-2.5 mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 disabled:text-gray-500"
                                placeholder="e.g. mgurung@example.net"
                                autocomplete="username"
                                inputmode="email"
                                required
                            />
                        </div>

                        @error('*')
                        <p class="mt-2 text-xs text-red-600">{{ $errors->first() }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <button wire:loading.attr="disabled" wire:target="verifyInvitation" type="submit"
                                class="w-full btn btn-icon btn-primary btn-lg bg-green-600 hover:bg-green-700 disabled:opacity-50">
                            <svg wire:loading wire:target="verifyInvitation"
                                 class="animate-spin mr-3 h-5 w-5 text-white" fill="none"
                                 viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff"
                                        stroke-width="3px"
                                        fill="none"></circle>
                                <path class="opacity-75" fill="#ffffff"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span wire:loading.remove wire:target="verifyInvitation" class="text-base">Verify Invitation Code</span>
                        </button>
                    </div>
                </form>
            @endif

            <div class="mt-12 text-sm font-normal text-gray-700">
                Already have an account?
                <a href="{{ route('seller.login') }}" class="text-green-600 hover:text-green-700 font-medium hover:underline">Login</a>
            </div>

            <div class="mt-8 text-sm font-normal space-x-1">
                <a href="#" class="text-xs text-purple-700 hover:text-black">Privacy Policy</a>
                <span>&bullet;</span>
                <a href="#" class="text-xs text-purple-700 hover:text-black">Terms & Conditions</a>
                <span>&bullet;</span>
                <a href="#" class="text-xs text-purple-700 hover:text-black">Join early access</a>
            </div>
        </div>
    </div>

    <div class="relative hidden lg:block sm:min-h-screen bg-cover object-center" style="background-image: url('https://images.unsplash.com/photo-1582308281127-44c931038160?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1293&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-80"></div>

        <div class="relative w-full sm:min-h-screen lg:flex flex-col justify-center px-4 py-20 space-y-10 xl:py-32 md:px-40 lg:px-20 xl:px-40">

            <a href="{{ route('home') }}" title="Go to Sikkim Store Home Page">
                <x-logo_dark class="w-auto h-8"/>
                <span class="sr-only">Sikkim Store Home Page</span>
            </a>
            <div class="flex space-x-3 items-start">
                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 text-green-600">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"/>
                </svg>
                <div>
                    <h2 class="font-medium text-green-600 leading-none">Free account</h2>
                    <p class="mt-2 text-sm text-gray-400">
                        Create products, categories, upload images and setup taxonomy, and
                        start selling, as simple as that, for free.
                    </p>
                </div>
            </div>
            <div class="flex space-x-3">
                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 text-green-600">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <h2 class="font-medium text-green-600 leading-none">What you sell is 100% yours.</h2>
                    <p class="mt-2 text-sm text-gray-400">Unlike many other sites, who takes your sales percentage, the
                        sales that you make are 100% yours. We don’t take any percentage whatsoever.</p>
                </div>
            </div>
            <div class="flex space-x-3">
                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 text-green-600">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"/>
                </svg>
                <div>
                    <h2 class="font-medium text-green-600 leading-none">Custom Domain</h2>
                    <p class="mt-2 text-sm text-gray-400">
                        Dont like the default default, e.g. yourshop.sikkim.store. Or you
                        want map your own domain, e.g. www.myownshop.com? Its there.
                    </p>
                </div>
            </div>
            <div class="flex space-x-3">
                <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-5 h-5 text-green-600">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"/>
                </svg>
                <div>
                    <h2 class="font-medium text-green-600 leading-none">Everything’s included</h2>
                    <p class="mt-2 text-sm text-gray-400">We take care of everything – from hosting to maintaining it.
                        That’s upgrades, updates, bug fixes, and any third-party changes. You just sell.</p>
                </div>
            </div>
        </div>
    </div>
</section>

