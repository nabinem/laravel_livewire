<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
 
class SearchUsers extends Component
{
    #[Url]
    public $search = '';
 
    public function render()
    {
        return view('livewire.search-users', [
            'users' => User::where('email', 'like', '%'.$this->search.'%')
                ->orWhere('name', 'like', '%'.$this->search.'%')
                ->limit(10)
                ->get(),
        ]);
    }
}