<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Subjects;

class SubjectCreateDisplay extends Component
{
    public $subjectID;
    public $subjectName;
    public $cost;

    public function mount()
    {
        //
    }

    // public function addSubject()
    // {
    //     $createdSubject = new Subjects;
    //     $createdSubject->subject_id = $this->subjectID;
    //     $createdSubject->subject_name = $this->subjectName;
    //     $createdSubject->cost_amount = $this->cost;
    //     $createdSubject->save();
            
    // }

    
    public function render()
    {
        return view('livewire.student.subject-create-display');
    }
}
