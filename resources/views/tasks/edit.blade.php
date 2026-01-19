<x-layout>

    <h1 class="mb-6 text-3xl font-bold text-black dark:text-white">Edit task: {{ $task->id }}</h1>

    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="pb-12 border-b border-black/10 dark:border-white/10">
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="titleInput"
                            class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Title</label>
                        <div class="mt-2">
                            <input id="titleInput" type="text" name="title" value="{{ $task->title }}"
                                class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6"
                                required />
                            @error('title')
                            <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span class="font-medium">
                                    {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="descriptionInput"
                            class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="descriptionInput" rows="3"
                                class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6"
                                required>{{ $task->description }}</textarea>
                            @error('description')
                            <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span class="font-medium">
                                    {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="statusSelect"
                            class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Status</label>
                        <div class="grid grid-cols-1 mt-2">
                            <select id="statusSelect" name="status"
                                class="col-start-1 row-start-1 w-full shadow-xs appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-zinc-900 outline-1 -outline-offset-1 outline-zinc-200 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6 dark:bg-zinc-800 dark:outline-zinc-800 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="">Select task status</option>
                                <option value="todo" {{ ($task->status == "todo") ? 'selected' : null }}>Todo</option>
                                <option value="in progress" {{ ($task->status == "in progress") ? 'selected' : null
                                    }}>In progress</option>
                                <option value="completed" {{ ($task->status == "completed") ? 'selected' : null
                                    }}>Completed</option>
                            </select>
                            <svg class="self-center col-start-1 row-start-1 mr-2 text-gray-500 pointer-events-none size-5 justify-self-end sm:size-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        @error('status')
                        <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span class="font-medium">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="prioritySelect"
                            class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Priority</label>
                        <div class="grid grid-cols-1 mt-2">
                            <select id="prioritySelect" name="priority"
                                class="col-start-1 row-start-1 w-full shadow-xs appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-zinc-900 outline-1 -outline-offset-1 outline-zinc-200 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6 dark:bg-zinc-800 dark:outline-zinc-800 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="">Select task priority</option>
                                @foreach ($priorities as $priority)
                                <option value="{{ $priority['value'] }}" {{ ($task->priority == $priority['value']) ? 'selected' : null }}>{{ $priority['name'] }}
                                </option>
                                @endforeach
                            </select>
                            <svg class="self-center col-start-1 row-start-1 mr-2 text-gray-500 pointer-events-none size-5 justify-self-end sm:size-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenmediumodd" />
                            </svg>
                        </div>
                        @error('priority')
                        <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span class="font-medium">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="dueDateInput" class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Due
                            date</label>
                        <div class="mt-2">
                            <input id="dueDateInput" type="date" name="due_date" value="{{ $task->due_date }}"
                                class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6"
                                required />
                            @error('due_date')
                            <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span class="font-medium">
                                    {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            <div>
                <button type="submit" form="deleteForm"
                    class="inline-flex items-center gap-1 px-3 py-2 text-sm font-semibold text-white transition-colors duration-200 bg-red-600 rounded-md cursor-pointer focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 hover:bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4 me-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>

                    Delete task
                </button>

            </div>
            <div class="flex items-center justify-end gap-x-6">
                <a href="/tasks/{{ $task->id }}"
                    class="px-3 py-2 text-sm font-semibold transition-colors duration-200 rounded-md cursor-pointer hover:bg-zinc-200 dark:hover:bg-zinc-800 text-zinc-900 dark:text-white">Cancel</a>
                <button type="submit"
                    class="inline-flex items-center gap-1 px-3 py-2 text-sm font-semibold text-white transition-colors duration-200 bg-blue-600 rounded-md cursor-pointer focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 hover:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-1" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-save-icon lucide-save">
                        <path
                            d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                        <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                        <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                    </svg>
                    Save changes</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/tasks/{{ $task->id }}" id="deleteForm" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>