<x-layout>

    <h1 class="text-3xl font-bold dark:text-white text-black mb-6">Dashboard</h1>
    <div class="grid gap-4 mb-10 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">

        <div
            class="flex justify-between gap-3 p-4 bg-white border rounded-lg shadow-xs border-zinc-200 dark:bg-zinc-900 dark:border-zinc-800">
            <div class="flex flex-col gap-2">
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Total Tasks</p>
                <h3 class="text-xl font-bold text-zinc-800 dark:text-zinc-200">200</h3>
            </div>
            <div class="flex items-center justify-center w-16 h-16 rounded-sm bg-zinc-500/10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                </svg>
            </div>
        </div>

        <div
            class="flex justify-between gap-3 p-4 bg-white border rounded-lg shadow-xs border-zinc-200 dark:bg-zinc-900 dark:border-zinc-800">
            <div class="flex flex-col gap-2">
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Completed</p>
                <h3 class="text-xl font-bold text-zinc-800 dark:text-zinc-200">100</h3>
            </div>
            <div class="flex items-center justify-center w-16 h-16 rounded-sm bg-green-500/10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </div>
        </div>

        <div
            class="flex justify-between gap-3 p-4 bg-white border rounded-lg shadow-xs border-zinc-200 dark:bg-zinc-900 dark:border-zinc-800">
            <div class="flex flex-col gap-2">
                <p class="text-sm text-zinc-500 dark:text-zinc-400">In Progress</p>
                <h3 class="text-xl font-bold text-zinc-800 dark:text-zinc-200">20</h3>
            </div>
            <div class="flex items-center justify-center w-16 h-16 rounded-sm bg-yellow-500/10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                </svg>
            </div>
        </div>

        <div
            class="flex justify-between gap-3 p-4 bg-white border rounded-lg shadow-xs border-zinc-200 dark:bg-zinc-900 dark:border-zinc-800">
            <div class="flex flex-col gap-2">
                <p class="text-sm text-zinc-500 dark:text-zinc-400">To Do</p>
                <h3 class="text-xl font-bold text-zinc-800 dark:text-zinc-200">80</h3>
            </div>
            <div class="flex items-center justify-center w-16 h-16 rounded-sm bg-blue-500/10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
        </div>

    </div>

</x-layout>