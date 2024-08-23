<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskItem extends Component
{
    public $task;

    public function toggleComplete()
    {
        $this->task->update(['is_completed' => !$this->task->is_completed]);
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        $this->dispatch('task-deleted');
        session()->flash('message', 'Task Deleted Successfully.');
    }
    
    public function render()
    {
        \Log::info('Chidl rendered' .now());

        return view('livewire.task-item');
    }
}
