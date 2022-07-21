<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserAll extends Component
{
    public $search = '';
    public $all = false;

    // protected $listeners = ['refresh' => 'render'];

    public function toggleAll()
    {
        $this->all = !$this->all;
        // $this->emit('refresh');
        // dd('working');
    }

    public function render()
    {
        $users = User::search($this->search, $this->all)->get();

        return view('livewire.user-all', ['users' => $users]);
    }
}
