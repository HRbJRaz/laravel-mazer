<x-modal formAction="add">
    <x-slot name="title">
        Add New Location Rule
    </x-slot>

    <x-slot name="content">
        <div class="form-group">
            <label for="pickUp" class="text-dark">Pickup Location</label>
            <select wire:model="pickUp" id="pickUp" class="form-select">
                @foreach ($locations as $location)
                <option value="{{$location->name}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="dropOff" class="text-dark">Dropoff Location</label>
            <select wire:model="dropOff"  id="dropOff" class="form-select">
                @foreach ($locations as $location)
                <option value="{{$location->name}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="charge" class="form-label text-dark">Charge</label>
            <input class="form-control" type="number" id="charge" wire:model="charge" min=0 step=".01">
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add Rule</button>
    </x-slot>
</x-modal>