<div class="flex items-center justify-between bg-white p-4 border rounded-lg">
    <div class="flex items-center">

        <input type="checkbox" wire:click="toggleComplete" @if ($task->is_completed) checked @endif
            class="mr-4" />
        <div>
            <h3 class="text-lg font-semibold @if ($task->is_completed) line-through @endif">{{ $task->title }}
            </h3>
            <p class="text-sm text-gray-500">{{ $task->description }}</p>
        </div>
    </div>

     <a wire:click="deleteTask({{ $task->id }})"
        onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
        href="#"
        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-red-600 rounded-md">
        Delete
    </a>

</div>
