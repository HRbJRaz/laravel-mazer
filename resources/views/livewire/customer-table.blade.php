<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">ID</option>
                <option value="email">Email</option>
                <option value="age">Age</option>
                <option value="fName">First Name</option>
                <option value="lName">Last Name</option>
                <option value="tel">Phone</option>
                <option value="country">Nationality</option>
                <option value="idNo">ID/Passport</option>
                <option value="licNo">Driver's Licence</option>
                <option value="address">Address</option>
                <option value="city">City</option>
                <option value="poscode">Post Code</option>
                <option value="state">State</option>
                <option value="created_at">Created at</option>
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
                    <th class="px-4 py-2">First Name</th>
                    <th class="px-4 py-2">Last Name</th>
                    <th class="px-4 py-2">E-mail</th>
                    <th class="px-4 py-2">Age</th>
                    <th class="px-4 py-2">Phone</th>
                    <th class="px-4 py-2">Nationality</th>
                    <th class="px-4 py-2">ID/Passport</th>
                    <th class="px-4 py-2">Driver's Licence</th>
                    <th class="px-4 py-2">Address</th>
                    <th class="px-4 py-2">City</th>
                    <th class="px-4 py-2">Post Code</th>
                    <th class="px-4 py-2">State</th>
                    <th class="px-4 py-2">created_at</th>
                    <th class="px-4 py-2">updated_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td class="border px-4 py-2">{{ $customer->id }}</td>
                        <td class="border px-4 py-2">{{ $customer->fName }}</td>
                        <td class="border px-4 py-2">{{ $customer->lName}}</td>
                        <td class="border px-4 py-2">{{ $customer->email }}</td>
                        <td class="border px-4 py-2">{{ $customer->age }}</td>
                        <td class="border px-4 py-2">{{ $customer->tel }}</td>
                        <td class="border px-4 py-2">{{ $customer->country }}</td>
                        <td class="border px-4 py-2">{{ $customer->idNo }}</td>
                        <td class="border px-4 py-2">{{ $customer->licNo }}</td>
                        <td class="border px-4 py-2">{{ $customer->address }}</td>
                        <td class="border px-4 py-2">{{ $customer->poscode }}</td>
                        <td class="border px-4 py-2">{{ $customer->city }}</td>
                        <td class="border px-4 py-2">{{ $customer->state }}</td>
                        <td class="border px-4 py-2">{{ $customer->created_at->diffForHumans() }}</td>
                        <td class="border px-4 py-2">{{ $customer->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $customers->links() !!}
    </div>
</div>
