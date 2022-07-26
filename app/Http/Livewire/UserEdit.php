<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class UserEdit extends Component
{
    public $name;
    public $email;
    public $role;
    public $city;
    public $location;
    public $user;

    protected $listeners = ['edit'];

    public function edit(User $user)
    {
        $this->dispatchBrowserEvent('openUserEditModal');
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->location = $user->location;
        $this->city = $user->city()->first()->id . '-' . $user->city()->first()->name;
        $this->user = $user;
    }

    public function update(User $user)
    {
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->city = explode('-', $this->city)[0];
        $user->location = $this->location;
        if ($user->update()) {
            toastr()->success($user->name . '\'s data updated successfully');
        } else {
            toastr()->error($user->name . '\'s data update failed');
        }

        $this->emitTo('user-all', 'render');
        // $this->dispatchBrowserEvent(
        //     'alert',
        //     ['type' => 'success',  'message' => $user->name . '\'s Data Updated Successfully.']
        // );
    }

    public function render()
    {
        $users = User::selectRaw('distinct(location)')->where('role', '!=', 'admin')->get();
        // dd($users);
        $locations = $users->pluck('location');
        $cities = City::all();
        return view('livewire.user-edit', ['cities' => $cities, 'locations' => $locations]);
    }
}
