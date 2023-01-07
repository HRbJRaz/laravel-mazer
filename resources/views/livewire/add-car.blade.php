<x-modal formAction="addCar">
    <x-slot name="title">
        Add New Car
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </x-slot>

    <x-slot name="content">
        <div class="form-group">
            <label for="regNo" class="text-dark">Registration #</label>
            <input type="text" class="form-control" id="regNo" name="regNo" wire:model="regNo" placeholder="Enter Registration">
        </div>
        <div class="form-group">
            <label for="cartype" class="text-dark">Car Type</label>
            <select name="cartype" id="cartype" class="form-select"  wire:model="cartype_id">
                @foreach ($cartypes as $cartype)
                    
                <option value="{{$cartype->id}}">{{$cartype->make}} {{$cartype->model}} {{$cartype->transmission}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="engNo" class="text-dark">Engine #</label>
            <input type="text" class="form-control" id="engNo" name="engNo"  wire:model="engineNo" placeholder="Enter Engine #">
        </div>
        <div class="form-group">
            <label for="chaNo" class="text-dark">Chassis #</label>
            <input type="text" class="form-control" id="chaNo" name="chaNo"  wire:model="chassisNo" placeholder="Enter Chassis #">
        </div>
        <div class="form-group">
            <label for="location" class="text-dark">Location</label>
            <select name="location" id="location" class="form-select" wire:model="location_id" >
                @foreach ($locations as $location)
                <option value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="owner" class="text-dark">Company</label>
            <select name="owner" id="owner" class="form-select" wire:model="owner_id" >
                @foreach ($owners as $owner)
                <option value="{{$owner->id}}">{{$owner->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="state" class="text-dark">State</label>
            <select name="state" id="state" class="form-select" wire:model="state" >
                <option value="Administration">Administration</option>
                <option value="Parking">Parking</option>
                <option value="Leased">Leased</option>
                <option value="Cleaning">Cleaning</option>
                <option value="Repair">Repair</option>
                <option value="Dicommissioned">Dicomissioned</option>
            </select>
        </div>
            
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add</button>
    </x-slot>
</x-modal>