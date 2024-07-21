<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body class="flex items-center justify-center min-h-screen min-w-screen">
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">404</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Page you are looking not found</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="{{ url()->previous() }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Back
            </a>  
        </div>
    </div>
</section>

</body>
</html>