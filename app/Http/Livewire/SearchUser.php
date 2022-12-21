<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{
    public $keyword = '';
    public $users;

    public function mount()
    {
        $this->users = collect();
    }

    public function search()
    {
        if(! $this->keyword) {
            $this->users = collect();
            return;
        }

        $this->users = User::where('name', 'like', '%'.$this->keyword.'%')->get();
    }

    public function render()
    {
        return view('livewire.search-user');
    }
}
