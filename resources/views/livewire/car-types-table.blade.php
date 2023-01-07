<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search cars...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">ID</option>
                <option value="type">type</option>
                <option value="make">Make</option>
                <option value="model">Model</option>
                <option value="cc">CC</option>
                <option value="introYear">introduction Year</option>
                <option value="consumption">consumption</option>
                <option value="transmission">Transmission</option>
                <option value="doors">Doors</option>
                <option value="seats">Seats</option>
                <option value="created_at">Created</option>
                <option value="updated_at">Updated</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Make</th>
                    <th class="px-4 py-2">Model</th>
                    <th class="px-4 py-2">Transmission</th>
                    <th class="px-4 py-2">CC</th>
                    <th class="px-4 py-2">Introduction Year</th>
                    <th class="px-4 py-2">Consumption</th>
                    <th class="px-4 py-2">Doors</th>
                    <th class="px-4 py-2">Seats</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">created_at</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartypes as $cartype)
                @php
                    $img = $cartype->imgHook;
                @endphp
                    <tr>
                        <td class="border px-4 py-2">{{ $cartype->id }}</td>
                        <td class="border px-4 py-2">{{ $cartype->type }}</td>
                        <td class="border px-4 py-2">{{ $cartype->make}}</td>
                        <td class="border px-4 py-2">{{ $cartype->model }}</td>
                        <td class="border px-4 py-2">{{ $cartype->transmission }}</td>
                        <td class="border px-4 py-2">{{ $cartype->cc }}</td>
                        <td class="border px-4 py-2">{{ $cartype->introYear }}</td>
                        <td class="border px-4 py-2">{{ $cartype->consumption }}</td>
                        <td class="border px-4 py-2">{{ $cartype->doors }}</td>
                        <td class="border px-4 py-2">{{ $cartype->seats }}</td>
                        <td class="border px-4 py-2"><img src="{{asset("frontend/images/$img") }}" alt=""></td>
                        <td class="border px-4 py-2">{{ $cartype->created_at->diffForHumans() }}</td>
                        <td class="border px-4 py-2">
                            <a href="" wire:click.prevent="edit({{$cartype}})"><i class="bi bi-pencil mr-2"></i>Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $cartypes->links() !!}
    </div>
</div>
