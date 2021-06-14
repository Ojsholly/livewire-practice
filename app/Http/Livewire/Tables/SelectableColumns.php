<?php

namespace App\Http\Livewire\Tables;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SelectableColumns extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];
    public $truncate = false;

    public function deleteUsers()
    {
        User::destroy($this->selected);

        if ($this->truncate) {
            # code...
            User::truncate();
        }
    }

    public function render()
    {
        return view('livewire.tables.selectable-columns', [
            'users' => User::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}