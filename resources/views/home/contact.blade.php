<x-layout.home title="Store Listings">

    <section class="bg-gray-50">
        <div class="pt-12 md:pt-24"></div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16 md:pb-32">
            <h1 class="mb-4 md:mb-20 max-w-3xl text-4xl tracking-tight font-extrabold text-green-700 sm:text-5xl md:text-6xl">
                Get in touch
            </h1>
            <div class="flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mb-8 md:mb-0">
                    <h2 class="text-gray-900 text-lg mb-1 font-semibold">Let's work together.</h2>
                    <p class="leading-relaxed mb-5 text-sm text-gray-600">
                        We would love to hear from you! Send us a message using the form below or email us.
                    </p>
                    <livewire:contact-us/>
                    <p class="text-xs text-gray-500 mt-3">Dont worry, we hate spams as much as you do.</p>
                </div>
                <div
                    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:ml-10 p-10 flex items-end justify-start relative">
                    <iframe class="absolute inset-0" title="map"
                            src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=Gangtok&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                            width="100%" height="100%" style="filter: grayscale(1) contrast(1.2) opacity(0.4)"></iframe>
                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                            <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-green-500 leading-relaxed">example@email.com</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                            <p class="leading-relaxed">123-456-7890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout.home>
