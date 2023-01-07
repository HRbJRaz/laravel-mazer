<x-modal>
    <x-slot name="title">
        Hi! 👋 {{ $name }}
    </x-slot>

    <x-slot name="content">
        You are looking at a child component
    </x-slot>

    <x-slot name="buttons">
        <button wire:click="$emit('closeModal')" class="btn btn-primary">Close Modal</button>
    </x-slot>
</x-modal>