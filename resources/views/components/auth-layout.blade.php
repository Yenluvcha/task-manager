<!DOCTYPE html>
<html lang="en" class="h-full bg-zinc-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        } 
    </script>
</head>

<body class="h-full font-inter dark:bg-zinc-950">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        {{ $slot }}

    </div>

    <script src="{{ Vite::asset('resources/js/layout.js') }}"></script>

</body>

</html>