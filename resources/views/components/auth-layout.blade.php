<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full font-inter">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        {{ $slot }}
        
    </div>

</body>

</html>