<div class=" flex items-center space-x-6">
    <x-primary-button wire:click="increment">+</x-primary-button>
    <h1>{{ $count }}</h1>

    <x-danger-button wire:click="decrement">-</x-danger-button>
</div>
