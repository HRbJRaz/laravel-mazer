<?php

namespace App\Http\Livewire;

use App\Models\Locations;
use Livewire\WithPagination;
use Livewire\Component;

class LocationsTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public function render()
    {
        Locations::get();
        return view('livewire.locations-table', [
            'locations' => Locations::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
