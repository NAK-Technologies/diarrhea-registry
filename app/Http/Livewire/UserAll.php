<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserAll extends Component
{
    public $search = '';
    public $all = false;

    protected $listeners = ['render'];

    public function toggleAll()
    {
        $this->all = !$this->all;
        // $this->emit('refresh');
        // dd('working');
    }

    public function edit(User $user)
    {
        $this->emitTo('user-edit', 'edit', $user);
    }

    public function render()
    {
        $users = User::search($this->search, $this->all)->with('city')->get();

        return view('livewire.user-all', ['users' => $users]);
    }
}
