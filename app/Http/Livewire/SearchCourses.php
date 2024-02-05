<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchCourses extends Component
{
    protected $queryString = [
        'term' => ['except' => ''],
        'status'
    ];

    public $showDropdown = false;
   
    public $term = '';

    public $status = [];
    
    public function render()
    {
        $courseQuery = Course::limit(10);
        $this->term && $courseQuery->where('title', 'like', $this->term.'%');
        $this->status && $courseQuery->whereIn('status', $this->status);

        return view('livewire.search-courses', [
            'courses' => $courseQuery->get(),

        ]);
    }

    public function archive()
    {
        $this->showDropdown = false;
    }
 
    public function delete()
    {
        //$this->showDropdown = false;
    }

    public function updatedShowDropdown($value)
    {
        logger()->info('showDropdown value updated to: '.$value);
    }
    
}
