@props(['active' => false])

<a class="{{ $active ? 'bg-zinc-100 font-bold dark:bg-zinc-900 text-black dark:text-white' : 'text-zinc-800 font-medium dark:text-zinc-300 hover:bg-zinc-200 hover:text-black dark:hover:bg-zinc-800 dark:hover:text-white' }} block rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}>
    {{ $slot }}
</a>