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
        <div class="row">
            <div class="form-group col-md-6">
                <label for="regNo" class="text-dark">Category</label>
                <input type="text" class="form-control" id="type" name="type" wire:model="type" placeholder="Enter Category">
            </div>
            <div class="form-group col-md-6">
                <label for="make" class="text-dark">Make</label>
                <input type="text" class="form-control" id="make" name="make" wire:model="make" placeholder="Enter Make/Brand">
            </div>
            <div class="form-group col-md-6">
                <label for="model" class="text-dark">Model</label>
                <input type="text" class="form-control" id="model" name="model"  wire:model="model" placeholder="Enter Model">
            </div>
            <div class="form-group col-md-6">
                <label for="introYear" class="text-dark">Introduction Year</label>
                <input type="number" min="1900" max="2099" step="1" class="form-control" wire:model="introYear">
            </div>
        </div>
        <div class="form-group">
            <label for="model" class="text-dark">Transmission</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label text-dark" for="AT">Automatic</label>
                <input type="radio" name="transmission" class="form-check-input" id="AT" value="AT">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label text-dark" for="MT">Manual</label>
                <input type="radio" name="transmission" class="form-check-input" id="MT" value="MT">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label text-dark" for="CVT">CVT</label>
                <input type="radio" name="transmission" class="form-check-input" id="CVT" value="CVT">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label text-dark" for="SAT">Semi-automatic</label>
                <input type="radio" name="transmission"  class="form-check-input" id="SAT" value="SAT">
            </div>
           <div class="form-check form-check-inline">
                <label class="form-check-label text-dark" for="TT">Tiptronic</label>
                <input type="radio" name="transmission" class="form-check-input" id="TT" value="TT">
            </div> 
            <div class="form-check form-check-inline">
                <label class="form-check-label text-dark" for="DCT">Dual Clutch</label>
                <input type="radio" name="transmission" class="form-check-input" id="DCT" value="DCT">
            </div>
        </div>
        <div class="row">
            
            <div class="form-group col-md-6">
                <label for="consumption" class="text-dark">Fuel Consumption</label>
                <input type="number" min="0.5" max="50" step=".1" class="form-control" wire:model="consumption">
            </div>
            <div class="form-group col-md-6">
                <label for="cc" class="text-dark">CC</label>
                <input type="number" min="0.5" max="10" step=".1" class="form-control" wire:model="cc">
            </div>
            <div class="form-group col-md-6">
                <label for="doors" class="text-dark">Doors</label>
                <input type="number" min="2" max="10" step="1" class="form-control" wire:model="doors">
            </div>
            <div class="form-group col-md-6">
                <label for="seats" class="text-dark">Seats</label>
                <input type="number" min="2" max="10" step="1" class="form-control" wire:model="seats">
            </div>   
        </div> 
        
        <div class="form-group">
            <label for="details" class="text-dark">Description</label>
            <textarea class="form-control" wire:model="details" row="5"></textarea>
        </div>     
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add</button>
    </x-slot>
</x-modal>