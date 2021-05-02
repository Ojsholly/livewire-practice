<?php

namespace App\Http\Livewire\Tables;

use App\Models\User;
use Livewire\Component;

class InfiniteScroll extends Component
{
    public $total;
    public $amount = 10;

    public function more()
    {
        $this->amount += 10;
    }

    public function mount()
    {
        $this->total = User::count();
    }

    public function render()
    {
        return view('livewire.tables.infinite-scroll')->with('users', User::limit($this->amount)->get());
    }
}