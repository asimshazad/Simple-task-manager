    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>



    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <strong class="font-bold">Success:</strong>
                    <span class="block sm:inline"> {{ session('message') }}</span>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="space-y-2">
                        <form wire:submit.prevent="submit" class="space-y-4">
                            <input type="text" wire:model="title" placeholder="Task Title"
                                class="w-full border border-gray-300 p-2 rounded" />
                            @error('title')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                            <textarea wire:model="description" placeholder="Task Description" class="w-full border border-gray-300 p-2 rounded"></textarea>

                            <select wire:model="priority" class="w-full border border-gray-300 p-2 rounded">
                                <option value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>

                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Task</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
