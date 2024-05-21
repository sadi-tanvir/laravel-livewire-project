<div class="w-full text-center">
    <h1 class="text-3xl">counter page</h1>
    <button wire:click="increment" type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        increment
    </button>


    <h1>count: <span class="text-red-500 text-2xl">{{ $number }}</span></h1>

    <input type="text" wire:model.live.debounce.1000ms='email' placeholder="Enter Name">
    {{ $email }}
</div>
