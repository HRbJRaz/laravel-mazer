<?php

namespace App\Http\Livewire;

use App\Models\InsuranceRules;
use Livewire\Component;
use Livewire\WithPagination;

class InsuranceRuleTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        InsuranceRules::get();
        return view('livewire.insurance-rule-table', [
            'insuranceRules' => InsuranceRules::orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
