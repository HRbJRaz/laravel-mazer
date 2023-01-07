<?php

namespace App\Http\Livewire;

use App\Models\insurance;
use Livewire\Component;
use Livewire\WithPagination;

class InsuranceTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        Insurance::get();
        return view('livewire.insurance-table', [
            'insurances' => Insurance::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
