<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Students;

class StudentsDisplay extends Component
{
    
    public $student;

    public function mount()
    {
        $student = Students::orderBy('last_name')->get();

        $this->student = $student;
        // return view('pages.student.index',['student'=>$student]);
    }

    public function render()
    {
        return view('livewire.students-display');
    }
}
