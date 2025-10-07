<x-auth-layout>

    <div
        class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm shadow-sm rounded-xl p-6 border border-zinc-100 bg-white dark:bg-zinc-900 dark:border-zinc-800">

        <div class="mb-6 text-center">
            <img class="mx-auto h-14 w-14 mb-6 rounded-lg shadow-sm"
                src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Your Company">
            <h5 class="font-semibold text-zinc-900 dark:text-white">Sign in to your account</h5>
        </div>

        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="email" class="block text-sm/6 font-medium text-zinc-900 dark:text-white">Email
                    address</label>
                <div class="mt-2">
                    <input id="email" type="email" name="email" required autocomplete="email"
                        class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password"
                        class="block text-sm/6 font-medium text-zinc-900 dark:text-white">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="block w-full rounded-md bg-white dark:bg-zinc-800 px-3 py-1.5 text-base text-zinc-900 dark:text-white outline-1 -outline-offset-1 outline-zinc-200 dark:outline-zinc-800 shadow-xs placeholder:text-zinc-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold cursor-pointer text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Sign
                    in</button>
            </div>
        </form>

        <p class="mt-8 text-center text-sm/6 text-zinc-500 dark:text-zinc-400">
            Don't have an account?
            <a href="/register" class="font-medium text-blue-600 hover:text-blue-500">Create account</a>
        </p>
    </div>

</x-auth-layout>