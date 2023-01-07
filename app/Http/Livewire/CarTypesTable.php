<?php

namespace App\Http\Livewire;

use App\Models\CarTypes;
use Livewire\Component;
use Livewire\WithPagination;

class CarTypesTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public function render()
    {
        CarTypes::get();
        return view('livewire.car-types-table', [
            'cartypes' => Cartypes::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
