<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search seats...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">ID</option>
                <option value="seat_price">Price</option>
                <option value="pickup_date">Pickup</option>
                <option value="dropoff_date">DropOff</option>
                <option value="state">State</option>
                <option value="created_at">Created at</option>
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
                    <th class="px-4 py-2">Session</th>
                    <th class="px-4 py-2">Seat</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">PickUp</th>
                    <th class="px-4 py-2">DropOff</th>
                    <th class="px-4 py-2">State</th>
                    <th class="px-4 py-2">Booking Date</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($seats as $seat)
                    <tr>
                        <td class="border px-4 py-2">{{ $seat->id }}</td>
                        <td class="border px-4 py-2">{{ $seat->session_id }}</td>
                        <td class="border px-4 py-2">{{ $seat->seat_id}}</td>
                        <td class="border px-4 py-2">{{ $seat->seat_price }}</td>
                        <td class="border px-4 py-2">{{ $seat->pickup_date }}</td>
                        <td class="border px-4 py-2">{{ $seat->dropoff_date }}</td>
                        <td class="border px-4 py-2">{{ $seat->state }}</td>
                        <td class="border px-4 py-2">{{ $seat->created_at }}</td>
                        <td class="border px-4 py-2">
                            <a href="" wire:click.prevent="edit({{$seat}})"><i class="bi bi-pencil mr-2"></i>Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $seats->links() !!}
    </div>
</div>
