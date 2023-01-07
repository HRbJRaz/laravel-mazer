<x-modal formAction="add">
    <x-slot name="title">
        Add New Insurance
    </x-slot>

    <x-slot name="content">
        <div class="form-group">
            <label for="product" class="form-control-label text-dark">Package</label>
            <input wire:model="product" id="product" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="coverage" class="form-control-label text-dark">Coverage</label>
            <textarea wire:model="coverage" id="coverage"rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="percentage" class="form-control-label text-dark">Charge</label>
            <input class="form-control" type="number" id="percentage" wire:model="percentage" min=0 step=".01">
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add Rule</button>
    </x-slot>
</x-modal>