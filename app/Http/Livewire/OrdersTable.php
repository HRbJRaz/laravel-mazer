<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Orders;
use Livewire\WithPagination;

class OrdersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public function render()
    {
        Orders::get();
        return view('livewire.orders-table', [
            'orders' => Orders::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
