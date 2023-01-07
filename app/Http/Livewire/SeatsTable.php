<?php

namespace App\Http\Livewire;

use App\Models\Seat;
use Livewire\Component;
use Livewire\WithPagination;

class SeatsTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        Seat::get();
        return view('livewire.seats-table', [
            'seats' => Seat::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
