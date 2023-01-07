<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">ID</option>
                <option value="session_id">Stripe ID</option>
                <option value="customer_id">Customer ID</option>
                <option value="regNo">Car</option>
                <option value="pickupDate">Pick Up Date</option>
                <option value="pickupLocation">Pick Up Location</option>
                <option value="dropoffDate">Drop Off Date</option>
                <option value="dropoffLocation">Drop Off Location</option>
                <option value="status">Status</option>
                <option value="total_price">Total Price</option>
                <option value="created_at">Booking Date</option>
                <option value="updated_at">Updated at</option>
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
                    <th class="px-4 py-2">Car</th>
                    <th class="px-4 py-2">Pick Up Date</th>
                    <th class="px-4 py-2">Pick Up Location</th>
                    <th class="px-4 py-2">Drop Off Date</th>
                    <th class="px-4 py-2">Drop Off</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Totap Price(MYR)</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td class="border px-4 py-2">{{ $order->id }}</td>
                        <td class="border px-4 py-2">{{ $order->regNo }}</td>
                        <td class="border px-4 py-2">{{ $order->pickupDate}}</td>
                        <td class="border px-4 py-2">{{ $order->pickupLocation }}</td>
                        <td class="border px-4 py-2">{{ $order->dropoffDate }}</td>
                        <td class="border px-4 py-2">{{ $order->dropoffLocation }}</td>
                        <td class="border px-4 py-2">{{ $order->status }}</td>
                        <td class="border px-4 py-2">{{ $order->total_price }}</td>
                        <td class="border px-4 py-2">{{ $order->created_at ->diffForHumans()}}</td>
                        <td class="border px-4 py-2">{{ $order->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $orders->links() !!}
    </div>
</div>
