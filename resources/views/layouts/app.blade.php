<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
              @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");
        #tt {
        word-wrap: break-word !important;
        width: 95%!important;
        letter-spacing: normal !important;
        font-size: 32px;
        font-weight: 400;
        line-height: 36px;
        min-height: 30px !important;
        padding: 5px !important;
        }

        #tt[contenteditable]:empty:before {
            content: attr(placeholder) !important;
            color: #888 !important; /* Placeholder text color */
        }
        
</style>
</head>


<body class="font-sans antialiased dark:bg-zinc-900 ">
    <button id="switchark">change</button>
    <div class="min-h-screen bg-white dark:bg-zinc-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-zinc-900 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>


</body>

</html>
