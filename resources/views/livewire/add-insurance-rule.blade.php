<x-modal formAction="add">
    <x-slot name="title">
        Add Insurance Rule
    </x-slot>

    <x-slot name="content">
        <div class="form-group">
            <label for="region" class="text-dark">Region</label>
            <select wire:model="region" id="region" class="form-select">
                @foreach ($regions as $region)
                <option value="{{$region->region}}">{{$region->region}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product" class="text-dark">Package</label>
            <select wire:model="product"  id="product" class="form-select">
                @foreach ($products as $product)
                <option value="{{$product->product}}">{{$product->product}}</option>
                @endforeach
            </select>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" class="btn btn-primary">Add Rule</button>
    </x-slot>
</x-modal>