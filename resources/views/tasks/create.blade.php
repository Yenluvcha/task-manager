<x-layout>

    <h1 class="mb-6 text-3xl font-bold text-black dark:text-white">Create a task</h1>

    <form method="POST" action="/tasks">
        @csrf
        <div class="space-y-12">
            <div class="pb-12 border-b border-black/10 dark:border-white/10">
                <div class="grid mt-10 grid-cols gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="titleInput"
                            class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Title</label>
                        <div class="mt-2">
                            <input id="titleInput" type="text" name="title"
                                class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" required/>
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
                                class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" required></textarea>
                            @error('description')
                            <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span class="font-medium">
                                    {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="prioritySelect"
                            class="block font-medium text-sm/6 text-zinc-900 dark:text-white">Priority</label>
                        <div class="grid grid-cols-1 mt-2">
                            <select id="prioritySelect" name="priority"
                                class="col-start-1 row-start-1 w-full shadow-xs appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-zinc-900 outline-1 -outline-offset-1 outline-zinc-200 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6 dark:bg-zinc-800 dark:outline-zinc-800 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">Select task priority</option>
                                @foreach ($priorities as $priority)
                                    <option value="{{ $priority['value'] }}">{{ $priority['name'] }}</option>
                                @endforeach
                            </select>
                            <svg class="self-center col-start-1 row-start-1 mr-2 text-gray-500 pointer-events-none size-5 justify-self-end sm:size-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
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
                            <input id="dueDateInput" type="date" name="due_date"
                                class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" required/>
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
        <div class="flex items-center justify-end mt-6 gap-x-6">
            <a href="/tasks"
                class="px-3 py-2 text-sm font-semibold rounded-md cursor-pointer hover:bg-zinc-200 dark:hover:bg-zinc-800 text-zinc-900 dark:text-white">Cancel</a>
            <button type="submit"
                class="px-3 py-2 text-sm font-semibold text-white bg-blue-600 rounded-md cursor-pointer focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 hover:bg-blue-500">Create</button>
        </div>
    </form>

</x-layout>