<?php

namespace App\Http\Livewire;

use App\Models\SeatBooking;
use Livewire\Component;
use Livewire\WithPagination;

class SeatsBookingTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public function render()
    {
        SeatBooking::get();
        return view('livewire.seats-booking-table', [
            'seats' => SeatBooking::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
