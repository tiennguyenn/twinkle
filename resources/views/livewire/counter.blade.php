<div class="flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Counter: {{ $count }}</h1>
        <button wire:click="increment" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Increment
        </button>
        <button wire:click="decrement" class="ml-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
            Decrement
        </button>
        <button wire:click="resetCount" class="ml-2 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            Reset
        </button>
        <div class="mt-4">
            <input type="number" wire:model="step" class="border rounded px-2 py-1 w-20" placeholder="Step" />
            <button wire:click="setStep" class="ml-2 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Set Step
            </button>
        </div>
    </div>
</div>
