<x-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-black dark:text-white">Tasks</h1>
        <a href="tasks/create"
            class="inline-flex items-center gap-1 px-3 py-2 text-sm font-semibold text-white bg-green-600 rounded-md shadow-sm cursor-pointer hover:bg-green-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>

            New task
        </a>
    </div>

    <ul role="list" class="flex flex-col mb-4 gap-y-4">

        @foreach ($tasks as $task)

        <x-task-card :task="$task"/>

        @endforeach

    </ul>

    <div>
        {{ $tasks->links() }}
    </div>

</x-layout>