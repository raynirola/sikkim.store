<x-layout.base>
    <x-slot name="title">{{ $title ?? '' }}</x-slot>
    {{--    <x-header/>--}}
    <div class="flex flex-col sm:justify-center min-h-screen bg-gray-100">
        {{ $slot }}
    </div>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
</x-layout.base>
