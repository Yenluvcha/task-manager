<x-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-black dark:text-white">{{ $task->title }}</h1>
        <div class="flex items-center justify-end gap-3">

            <p class="text-sm truncate text-zinc-500">Last updated: {{ $task->updated_at }}</p>

            @can('edit-task', $task)

            <a href="/tasks/{{ $task->id }}/edit"
                class="inline-flex items-center gap-1 px-3 py-2 text-sm font-semibold text-white bg-blue-600 rounded-md shadow-sm cursor-pointer hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-5 me-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>

                Edit task
            </a>

            @endcan

        </div>
    </div>

</x-layout>