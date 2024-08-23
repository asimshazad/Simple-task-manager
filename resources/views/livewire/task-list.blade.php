<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('My Tasks') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                
                <div class="space-y-2">
                    @forelse($tasks as  $task)
                        <livewire:task-item :task="$task" :wire:key="$task->id" @task-deleted="$refresh" >
                    @empty
                        <p>No results found</p>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</div>

