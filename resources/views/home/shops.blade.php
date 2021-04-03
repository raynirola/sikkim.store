<x-layout.home title="Store Listings">

    <div class="pt-20"></div>

    <x-shop.section_with_header
        heading="Top Performing Shops"
        subheading="Browse through the top performing stores at Sikkim Store.">
        <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
            @foreach($top_performing_stores as $store)
                <x-shop.shop_card :store="$store" :rating="rand(1, 5)" :reviewCount="rand(1, 200)"/>
            @endforeach
        </div>
    </x-shop.section_with_header>


    <x-shop.section_with_header
        heading="Featured Shops"
        subheading="Browse through the best stores at Sikkim Store.">
        <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
            @foreach($featured_stores as $store)
                <x-shop.shop_card :store="$store"/>
            @endforeach
        </div>
    </x-shop.section_with_header>

    <x-shop.section_with_header
        heading="Newly Registered Shops"
        subheading="Browse through the latest stores at Sikkim Store.">
        <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
            @foreach($latest_stores as $store)
                <x-shop.shop_card :store="$store" :date="true"/>
            @endforeach
        </div>
    </x-shop.section_with_header>

    <div>
        <livewire:component.all-stores/>
    </div>

</x-layout.home>
