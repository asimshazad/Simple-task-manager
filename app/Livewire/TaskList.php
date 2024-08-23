<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskList extends Component
{

    public $tasks;

    public function mount()
    {
        $this->tasks = Task::where('user_id', auth()->id())->orderBy('priority', 'desc')->get();
    }

    public function render()
    {
        \Log::info('Rendered at ' . now());

        $tasks = Task::where('user_id', auth()->id())->orderBy('priority', 'desc')->get();
        return view('livewire.task-list',[
            'tasks' => $tasks
        ]);
    }

}
