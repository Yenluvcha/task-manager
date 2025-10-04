<x-auth-layout>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm shadow-sm rounded-xl p-6 border border-gray-100">

        <div class="mb-6 text-center">
            <img class="mx-auto h-14 w-14 mb-6 rounded-lg shadow-sm" src="{{ Vite::asset('resources/images/logo.svg') }}"
                alt="Your Company">
            <h5 class="font-semibold">Register an account</h5>
        </div>

        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" type="email" name="email" required autocomplete="email"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-200 shadow-xs placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-200 shadow-xs placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-200 shadow-xs placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md mb-3 bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold cursor-pointer text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Register</button>
                <a href="/login"
                    class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm/6 font-semibold hover:bg-gray-100 text-gray-900">
                    Cancel
                </a>
            </div>
        </form>

        <p class="mt-8 text-center text-sm/6 text-gray-500">
            Already have an account?
            <a href="/login" class="font-medium text-blue-600 hover:text-blue-500">Sign in</a>
        </p>
    </div>

</x-auth-layout>