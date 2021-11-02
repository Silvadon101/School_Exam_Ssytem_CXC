<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Students;

class StudentsDisplay extends Component
{
    
    public $student;

    public function mount()
    {
        // ------Displaying students in alphabetical order via last name------
        $student = Students::orderBy('last_name')->get();

        $this->student = $student;
    }

    public function del($studentID)
    {
        // -----searching student----
        $student = Students::find($studentID);

        // ------deleting from DB------
        $student->delete();

        // --------deleting from collection------
        $this->student = $this->student->except($studentID);

    }

    public function render()
    {
        return view('livewire.student.students-display');
    }
}
