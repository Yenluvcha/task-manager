@props(['task'])

<li
    class="flex flex-col justify-between p-4 bg-white border rounded-lg shadow-xs sm:flex-row gap-x-6 border-zinc-200 dark:bg-zinc-900 dark:border-zinc-800">
    <div class="flex flex-col flex-grow min-w-0">
        <p class="font-bold truncate text-md/6 text-zinc-800 dark:text-zinc-200">{{ $task->title }}</p>
        <p class="truncate text-zinc-400 text-xs/5">Last updated: {{ $task->updated_at }}</p>
    </div>

    <div class="flex items-center justify-between mt-3 sm:mt-0 gap-y-2 gap-x-2">
        <div class="flex items-center gap-x-2">
            <x-status-badge status="{{ $task->status }}" />
            <x-priority-badge priority="{{ $task->priority }}" />
            <span
                class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-400 rounded-md bg-red-400/10 inset-ring inset-ring-red-400/30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4 me-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                </svg>

                {{ $task->due_date }}
            </span>
        </div>

        <a href="tasks/{{ $task->id }}"
            class="inline-flex cursor-pointer items-center gap-1 rounded-md bg-blue-600 px-2 py-1.5 text-xs font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
            Details
            <svg stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"
                class="size-4 stroke-[2]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0-6.75-6.75M19.5 12l-6.75 6.75">
                </path>
            </svg>
        </a>
    </div>
</li>