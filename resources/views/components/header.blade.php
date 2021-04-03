<header x-data="{ scrollBarAtTop : true, open: false }" class="fixed top-0 inset-x-0 z-10"
        @scroll.window="scrollBarAtTop = (window.pageYOffset > 20) ? false : true">
    <nav class="relative"
         :class="{'py-3 sm:py-4 md:py-6 bg-white md:bg-transparent' : scrollBarAtTop, 'bg-white shadow py-3 sm:py-3 md:py-4' : !scrollBarAtTop}">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between">

                <div class="flex-1 flex items-center md:space-x-14">

                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-7"/>
                    </a>

                    <div class="hidden sm:flex items-center space-x-12 text-sm text-gray-500">
                        <a href="{{ route('home') }}"
                           class="hidden md:block hover:text-green-600 @if(request()->routeIs('home')) text-green-700 font-medium @endif">Home</a>
                        <a href="{{ route('shops') }}"
                           class="hidden md:block hover:text-green-600 @if(request()->routeIs('shops')) text-green-700 font-medium @endif">Shops</a>
                        <a href="{{ route('contact') }}"
                           class="hidden md:block hover:text-green-600 @if(request()->routeIs('contact')) text-green-700 font-medium @endif">Contact</a>
                        <a href="" class="hidden md:block hover:text-green-600">FAQs</a>
                    </div>
                </div>

                <div class="md:hidden">
                    <button @click="open = !open"
                            type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <div
                    class="hidden absolute inset-y-0 right-0 md:flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    @auth('user')
                        <a href=""
                           class="text-gray-700 hover:text-green-500  focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                            </svg>
                        </a>
                        <span
                            class="md:pl-4 md:py-2 text-sm font-medium tracking-tight text-gray-700 hidden md:block">
                            {{auth()->user()->name}}
                        </span>

                        <div class="ml-3 relative"
                             x-data="{ isOpen: false }">
                            <div>
                                <button
                                    class="flex text-sm rounded-full overflow-hidden focus:outline-none  border-white focus:border-indigo-500 transition duration-150 ease-in-out"
                                    @click="isOpen = !isOpen"
                                    @keydown.escape="isOpen = false">
                                    <img
                                        class="h-8 w-8 rounded-full object-cover"
                                        src="{{ auth('user')->user()->avatar }}"
                                        alt=""/>
                                </button>
                            </div>
                            <div x-show="isOpen"
                                 x-transition:enter="transition ease-out transform duration-150 transform"
                                 x-transition:enter-start="opacity-0 scale-75"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in transform duration-100 transform"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-75"
                                 @click.away="isOpen = false "
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg z-20">
                                <div class="rounded-md bg-white box-shadow">
                                    <a href="{{ route('user.profile') }}"
                                       class="block px-4 py-2 text-sm leading-5 text-gray-700 rounded-t-md hover:bg-green-500 hover:text-white focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-user mr-4"></i> Your Profile </a>

                                    <a href="{{ '' }}"
                                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:text-white hover:bg-green-500 focus:outline-none transition duration-150 ease-in-out">
                                        <i class="fas fa-cog mr-4"></i>Track Order</a>

                                    <form action="{{ route('logout') }}"
                                          method="post">
                                        @csrf
                                        <button type="submit"
                                                class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-green-500 hover:text-white rounded-b-md focus:outline-none transition duration-150 ease-in-out">
                                            <i class="fas fa-sign-out-alt mr-4"></i>Sign out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth

                    @guest()
                        <div>
                            <a href="{{ route('login') }}"
                               class="btn btn-light transition ease-in-out duration-200 text-gray-600 px-4">Login</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        <div x-state:on="Menu open"
             x-state:off="Menu closed"
             x-show="open"
             x-transition:enter="duration-150 ease-out"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="duration-100 ease-in"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             :class="{ 'block': open, 'hidden': !open }"
             class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <x-logo class="h-5"/>
                    </div>
                    <div class="-mr-2">
                        <button @click="open = !open" type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-11/12 h-0.5 bg-gray-100 rounded-full mx-auto mt-2"></div>

                @auth('user')
                    <div class="px-2 pt-4 pb-3">
                        <div class="flex items-center px-3">
                            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex-shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover"
                                     src="{{ auth('user')->user()->avatar }}" alt=""/>
                            </div>

                            <div>
                                <div class="text-sm font-semibold text-gray-800">{{ auth('user')->user()->name }}</div>
                                <div class="font-normal text-sm text-gray-500">{{ auth('user')->user()->email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3 space-y-1">
                        <div class="relative px-2 border-green-600">
                            <a href="{{ route('user.profile') }}"
                               class="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 @if(request()->routeIs('user.profile')) bg-gray-100 @endif transition ease-in-out">My Profile</a>

                            @if(request()->routeIs('user.profile'))
                                <div class="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"></div>
                            @endif
                        </div>
                        <div class="relative px-2 border-green-600">
                            <a href="#"
                               class="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition ease-in-out">Track Order</a>
                        </div>

                    </div>
                    <div class="w-11/12 h-0.5 bg-gray-100 rounded-full mx-auto mt-2"></div>
                @endauth
                <div class="pt-2 pb-3 space-y-1">
                    <div class="relative px-2 border-green-600">
                        <a href="{{ route('home') }}"
                           class="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 @if(request()->routeIs('home')) bg-gray-100 @endif transition ease-in-out">Home</a>

                        @if(request()->routeIs('home'))
                            <div class="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"></div>
                        @endif
                    </div>
                    <div class="relative px-2 border-green-600">
                        <a href="{{ route('shops') }}"
                           class="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 @if(request()->routeIs('shops')) bg-gray-100 @endif transition ease-in-out">Shops</a>

                        @if(request()->routeIs('shops'))
                            <div class="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"></div>
                        @endif
                    </div>
                    <div class="relative px-2 border-green-600">
                        <a href="{{ route('contact') }}"
                           class="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 @if(request()->routeIs('contact')) bg-gray-100 @endif transition ease-in-out">Contact</a>

                        @if(request()->routeIs('contact'))
                            <div class="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"></div>
                        @endif
                    </div>
                    <div class="relative px-2 border-green-600">
                        <a href=""
                           class="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition ease-in-out">FAQs</a>
                    </div>

                </div>
                <div class="p-2">
                    @auth('user')
                        <button type="submit" form="logoutForm"
                                class="block w-full px-5 py-3 text-center font-medium text-green-600 bg-gray-100 hover:bg-gray-200 rounded-md transform btn-scale transition ease-in-out">
                            Logout
                        </button>

                        <form id="logoutForm" action="{{ route('logout') }}" method="post" hidden>@csrf</form>
                    @else
                        <a href="{{ route('login') }}"
                           class="block w-full px-5 py-3 text-center font-medium text-green-600 bg-gray-100 hover:bg-gray-200 rounded-md transform btn-scale transition ease-in-out">
                            Login
                        </a>
                    @endauth
                </div>

            </div>
        </div>
    </nav>
</header>
