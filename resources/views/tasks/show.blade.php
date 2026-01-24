<x-layout>

    <div class="flex items-center justify-between mb-6">
        <a href="/tasks"
            class="inline-flex items-center gap-1 px-3 py-2 text-sm font-semibold transition-colors duration-200 rounded-md cursor-pointer hover:bg-zinc-200 dark:hover:bg-zinc-800 text-zinc-900 dark:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-4.5 me-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>

            Back
        </a>
        <div class="flex items-center justify-end gap-3">

            @can('edit-task', $task)

            <a href="/tasks/{{ $task->id }}/edit"
                class="inline-flex items-center gap-1 px-3 py-2 text-sm font-semibold text-white transition-colors duration-200 bg-blue-600 rounded-md shadow-sm cursor-pointer hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-4.5 me-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>

                Edit task
            </a>

            @endcan

        </div>
    </div>

    <div class="space-y-6">

        <!-- Header -->
        <div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-lg p-5">
            <div class="flex flex-col md:flex-row gap-y-5 md:gap-y-0 items-start justify-between">
                <div>
                    <h1 class="text-xl font-semibold text-zinc-900 dark:text-white mb-5">
                        {{ $task->title }}
                    </h1>

                    <div class="flex flex-col gap-y-2">
                        <div class="inline-flex gap-2 items-center">
                            <p class="text-sm">Status:</p>
                            <x-status-badge status="{{ $task->status }}" />
                        </div>
                        <div class="inline-flex gap-2 items-center">
                            <p class="text-sm">Priority:</p>
                            <x-priority-badge priority="{{ $task->priority }}" />
                        </div>
                        <div class="inline-flex gap-2 items-center">
                            <p class="text-sm">Due Date:</p>
                            <span
                                class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-400 rounded-md bg-red-400/10 inset-ring inset-ring-red-400/30">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 me-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>

                                {{ $task->due_date }}
                            </span>
                        </div>
                        <div class="inline-flex gap-2 items-center">
                            <p class="text-sm">Created at: <span class="font-light">{{ $task->created_at }} ({{
                                    $task->created_at->diffForHumans() }})</span></p>
                        </div>
                        <div class="inline-flex gap-2 items-center">
                            <p class="text-sm">Last updated: <span class="font-light">{{ $task->updated_at }} ({{
                                    $task->updated_at->diffForHumans() }})</span></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap md:justify-end gap-2">

                    @foreach ($task->tags as $tag)
                    <span
                        class="p-1 px-2.5 text-xs border text-zinc-800 dark:text-zinc-200 border-zinc-300 dark:border-zinc-700 rounded-full">
                        {{ $tag->name }}
                    </span>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-lg p-5">
            <h2 class="font-medium text-zinc-900 dark:text-white mb-3">Description</h2>
            <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed">
                {{ $task->description }}
            </p>
        </div>

        <!-- Activity Log -->
        <div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-lg p-5">
            <h2 class="font-medium text-zinc-900 dark:text-white mb-3">Activity Log</h2>
            <div class="mx-2">
                <ol class="relative border-l border-zinc-200 dark:border-zinc-700">

                    @forelse ($task->activities as $activity)
                    <li class="mb-5 ml-6">
                        <span class="absolute -left-2 flex h-4 w-4 items-center justify-center rounded-full
                         {{ $activity->action === 'created' ? 'bg-green-600' :
                            ($activity->action === 'updated' ? 'bg-blue-600' :
                            ($activity->action === 'deleted' ? 'bg-red-600' : 'bg-zinc-400')) }}">
                        </span>

                        <p class="text-sm text-zinc-400">
                            <span class="font-medium text-zinc-700 dark:text-zinc-200">
                                {{ $activity->description }}
                            </span>
                        </p>

                        <time class="mb-1 text-xs text-zinc-500">
                            {{ $activity->created_at->diffForHumans() }}
                        </time>
                    </li>
                    @empty
                    <li class="ml-6 text-sm text-zinc-500">No activity yet.</li>
                    @endforelse

                </ol>


            </div>

            <p></p>

        </div>

    </div>


</x-layout>