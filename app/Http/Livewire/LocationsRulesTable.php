<?php

namespace App\Http\Livewire;

use App\Models\LocationRules;
use Livewire\Component;
use Livewire\WithPagination;

class LocationsRulesTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public function render()
    {
        LocationRules::get();
        return view('livewire.location-rules-table', [
            'locationRules' => LocationRules::orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
