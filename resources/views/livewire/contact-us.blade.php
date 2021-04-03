<div>
    <form wire:submit.prevent="sendMessage">
        @csrf
        <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input
                id="name"
                type="text"
                wire:model.defer="name"
                class="py-2.5 mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('name') border-red-600 @enderror"
                placeholder="e.g. Man Maya Gurung"
                autocomplete="name"
                autofocus
                required
            />
            @error('name')
            <p class="mt-1 px-0.5 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input
                id="email"
                type="email"
                wire:model.defer="email"
                class="py-2.5 mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 @error('email') border-red-600 @enderror"
                placeholder="e.g. mmaya@sikkim.store"
                autocomplete="email"
                required
            />
            @error('email')
            <p class="mt-1 px-0.5 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message"
                      wire:model.defer="message"
                      class="py-2.5 mt-1 block w-full bg-white rounded-md border border-gray-300 focus:border-green-600 focus:ring focus:ring-green-300 focus:ring-opacity-20 h-32  resize-none leading-6 transition-colors duration-200 ease-in-out placeholder-gray-400 @error('message') border-red-600 @enderror"
                      placeholder="Something interesting perhaps"></textarea>
            @error('message')
            <p class="mt-1 px-0.5 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <button wire:loading.attr="disabled" wire:target="sendMessage" type="submit" class="block w-full btn btn-default bg-green-600 hover:bg-green-700 py-3 text-white text-sm uppercase disabled:opacity-50">
            <svg wire:loading wire:target="sendMessage" class="animate-spin mr-3 h-5 w-5 text-white" fill="none"
                 viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#ffffff" stroke-width="3px"
                        fill="none"></circle>
                <path class="opacity-75" fill="#ffffff"
                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span wire:loading.remove wire:target="sendMessage">Send Message</span>
        </button>
    </form>
</div>
