<?php

namespace App\Http\Livewire;

use App\Models\SettingContact;
use Livewire\Component;
use Livewire\WithPagination;

class SettingContactTable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public function render()
    {
        SettingContact::get();
        return view('livewire.setting-contact-table', [
            'settingcontacts' => SettingContact::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
