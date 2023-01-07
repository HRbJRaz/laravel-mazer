<x-modal formAction="add">
    <x-slot name="title">
        Add New Seat
    </x-slot>

    <x-slot name="content">
        <div class="form-group">
            <label for="types" class="text-dark">Type</label>
            <select wire:model="types" id="types" class="form-select">
                @foreach ($types as $type)
                <option value="{{$type->type}}">{{$type->type}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="colour" class="form-control-label text-dark">Colour</label>
            <select wire:model="colour" id="colour" class="form-select">
                @foreach ($colours as $colour)
                <option value="{{$colour->colour}}">{{$colour->colour}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="region" class="form-label text-dark">Region</label>
            <select wire:model="region" id="region" class="form-select">
                @foreach ($regions as $region)
                <option value="{{$region->region}}">{{$region->region}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="state" class="text-dark">State</label>
            <select wire:model="state" id="state" class="form-select">
                @foreach ($states as $states)
                <option value="{{$states->state}}">{{$states->state}}</option>
                @endforeach
            </select>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add Rule</button>
    </x-slot>
</x-modal>