<x-layout.home title="Home">
    <section class="bg-no-repeat bg-auto md:bg-auto bg-top"
             style="background-image: url('{{ asset('assets/images/hero-bg.png') }}')">
        <div
            class="max-w-6xl mx-auto sm:min-h-screen flex items-center justify-center lg:justify-between px-4 pb-8 sm:pb-0 sm:px-6 lg:px-8">

            <!--Hero Title-->
            <div class="w-full sm:max-w-2xl mt-32 sm:mt-0">
                <p data-aos="fade-right" data-aos-duration="800"
                   class="text-4xl sm:text-6xl font-bold text-black tracking-wide">Grow your business faster with
                    us.</p>
                <p data-aos="flip-up" data-aos-delay="200" data-aos-duration="700"
                   class="mt-8 text-gray-700 font-medium">Powerful, fast, secure, easy-to-use, multi-tenant e-commerce.
                    Empowering local shops and sellers. Vocal for local.</p>

                <p data-aos="zoom-in" data-aos-delay="500" class="text-xs text-gray-500 mt-2">Reserve your store name
                    before someone takes it.</p>

                <div class="mt-6 md:mt-8" data-aos="zoom-in" data-aos-delay="500">
                    <a href="{{ route('seller.register') }}"
                       class="block w-full md:w-64 px-5 py-3 text-center font-medium text-white bg-green-600 hover:bg-green-700 rounded-md transform btn-scale transition ease-in-out text-sm uppercase">
                        Register your business
                    </a>
                </div>

                <p data-aos="zoom-out" data-aos-delay="500" class="mt-8 text-xs font-light text-gray-500">No credit card
                    required.</p>
            </div>

            <!--Hero Image-->
            <div data-aos="zoom-in" data-aos-duration="1000" class="hidden lg:block max-w-md">
                <img src="{{ asset('assets/images/hero_bg.svg') }}" alt="" class="w-full h-full object-cover">
            </div>

        </div>
    </section>

    <section class="relative py-24 bg-gradient-to-tr from-blue-600 to-green-600">
        <div class="absolute inset-0 bg-white bg-opacity-90"></div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div data-aos="zoom-in" class="lg:text-center">
                <p class="text-base leading-6 text-green-500 font-semibold tracking-wide uppercase">Sikkim Store</p>

                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-green-700 sm:text-4xl sm:leading-10">
                    A better way to sell online
                </h3>

                <p class="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 lg:mx-auto">
                    Sikkim's e-commerce store. Multi-vendor, Multi-tenant.
                    No commissions and no hidden charges.
                    Empowering local shops and sellers.
                </p>
            </div>

            <ul class="mt-20 md:mt-32 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-12 sm:gap-x-8 sm:gap-y-10 md:gap-x-12 md:gap-y-16">

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base leading-none font-semibold text-gray-700">What you sell is 100%
                                yours.</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                Unlike many other sites, who takes your sales percentage,
                                the sales that you make are 100% yours. We don’t take any percentage whatsoever.
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base leading-none font-semibold text-gray-700">No hidden fees.</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                Dont worry, we dont have<span class="text-red-600 font-medium">T&C</span> or <span
                                    class="text-red-600 font-medium">*</span>next to our pricing.
                                How much for all these? Just a minimal amount per month.
                                All prices are upfront. No hidden charges, no hassle and headache.
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base leading-none font-semibold text-gray-700">Free Custom Domain.</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                You can can your own domain, e.g. <span class="text-indigo-600 font-medium">www.myownshop.com</span>.
                                We will guide you through every step to set up your own personal domain and use our
                                services.
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-semibold leading-none text-gray-700">Scalability? No worries.</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                You don’t have to worry about scalability, or downtime ever.
                                Our system runs on the latest technology and software stack that handles scaling like a
                                breeze.
                                You just sell, let us worry about the techs, we are nerds.
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-semibold leading-none text-gray-700">Admin Dashboard</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                Your store comes with a highly sophisticated admin dashboard.
                                Easy product update, add, or delete.
                                Shop performance with beautiful graphical representation.
                                See all your order details and sell progress and many more.
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-7000 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-semibold leading-none text-gray-700">
                                Your site is yours, completely.
                            </h4>
                            <p class="mt-2 text-sm text-gray-500">
                                Your site, be that free subdomain or your own domain,
                                you have complete freedom to customise it,
                                including logo and even colour schemes.
                                Your own terms and conditions, and footer as well.
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-semibold leading-none text-gray-700">Payment Gateway.</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                To make it even better, we will set up your own payment
                                gateway integration upon signup with Razorpay.
                                All the transactions straight from and to your bank account..
                            </p>
                        </div>
                    </div>
                </li>

                <li data-aos-delay="200" data-aos="fade-up">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-tr from-green-600 to-green-700 text-white shadow">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-semibold leading-none text-gray-700">Everything’s included.</h4>
                            <p class="mt-2 text-sm text-gray-500">
                                We take care of everything – from hosting to maintaining it.
                                That’s upgrades, updates, bug fixes, and any third-party changes.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="py-24 bg-white" id="register">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div data-aos-delay="300" data-aos="zoom-in" class="lg:text-center">
                <p class="text-base leading-6 text-green-500 font-semibold tracking-wide uppercase">Reserve your store
                    name now!</p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-green-700 sm:text-4xl sm:leading-10">
                    Success starts with a click.
                </h3>
                <p class="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 lg:mx-auto">
                    Online store makes 3 times more sales than average shops. And e-commerce sales are growing 46%
                    year-on-year*. For a lot of businesses, building an online store has gone from nice-to-have to
                    utterly essential, overnight.
                </p>
            </div>

            <div data-aos-delay="300" data-aos="zoom-in" class="mt-6 md:mt-8">
                <a a href="{{ route('seller.register') }}"
                   class="mx-auto block w-full md:w-64 px-5 py-3 text-center font-medium text-white bg-green-600 hover:bg-green-700 rounded-md transform btn-scale transition ease-in-out text-sm uppercase">
                    Register Now.
                </a>
            </div>
        </div>
    </section>

    <section class="relative py-24 bg-gradient-to-tr from-blue-600 to-green-600" id="register">
        <div class="absolute inset-0 bg-white bg-opacity-90"></div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div data-aos-delay="300" data-aos="zoom-in" class="lg:text-center mb-12">
                <p class="text-base leading-6 text-green-500 font-semibold tracking-wide uppercase">SHOPS</p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-green-700 sm:text-4xl sm:leading-10">
                    Featured Shops
                </h3>
                <p class="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 lg:mx-auto">
                    Browse through the best shops at Sikkim Store.
                </p>
            </div>
            <div data-aos-delay="100" data-aos="zoom-in" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($featured_stores as $store)
                    <x-shop.shop_card :store="$store"/>
                @endforeach
            </div>
        </div>
    </section>

    <section>

        <div class="bg-green-700">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between flex-wrap">
                    <div class="flex-1 flex items-center">
                        <div class="flex p-2 rounded-lg bg-green-800">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                            </svg>
                        </div>
                        <div class="ml-3 font-medium text-white truncate">
                            <p class="md:hidden">
                                Need Help?
                            </p>
                            <p class="hidden md:inline">
                                Need Help? Or more information!
                            </p>
                        </div>
                    </div>
                    <div class="order-2 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                        <a href=""
                           class="flex items-center justify-center px-4 py-3 border border-transparent rounded-md shadow-sm text-sm font-medium text-green-600 bg-white hover:bg-green-50 transform btn-scale transition ease-in-out">
                            Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.home>
