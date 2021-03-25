<?php

namespace App\Http\Livewire\Tables;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';

    public function render()
    {
        return view('livewire.tables.datatable', [
            'users' => User::search($this->search)
                ->paginate($this->perPage)
        ]);
    }
}