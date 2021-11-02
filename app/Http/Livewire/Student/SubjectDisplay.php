<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Subjects;

class SubjectDisplay extends Component
{
    
    public $subject;

    public function mount()
    {
        $subject = Subjects::orderBy('subject_name')->get();

        $this->subject = $subject;
    }

    public function render()
    {
        return view('livewire.student.subject-display');
    }
}
