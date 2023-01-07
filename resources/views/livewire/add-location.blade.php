<x-modal formAction="add">
    <x-slot name="title">
        Add New Location Rule
    </x-slot>

    <x-slot name="content">
        <div class="form-group">
            <label for="pickUp" class="text-dark">Region</label>
            <select wire:model="pickUp" id="pickUp" class="form-select">
                @foreach ($regions as $region)
                <option value="{{$region->region}}">{{$region->region}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label text-dark">Location</label>
            <input type="text" class="form-control" wire:model="name" id="name">
        </div>
        <div class="form-group">
            <label for="status" class="form-label text-dark">Status</label>
            <input type="text" class="form-control" wire:model="status" id="status">
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add Rule</button>
    </x-slot>
</x-modal>