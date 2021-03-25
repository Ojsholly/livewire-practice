<?php

namespace App\Http\Livewire\Tables;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $perPage = 10;

    public function render()
    {
        return view('livewire.tables.datatable', ['users' => User::paginate($this->perPage)]);
    }
}