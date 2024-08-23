<?php

namespace App\Livewire;


use App\Models\Task;
use Livewire\Component;

class TaskForm extends Component
{
    public $title;
    public $description;
    public $priority = 'Medium';

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'priority' => 'required|in:Low,Medium,High',
    ];

    public function submit()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
        session()->flash('message', 'Task created successfully!');
        
    }


    public function render()
    {
        return view('livewire.task-form');
    }
}
