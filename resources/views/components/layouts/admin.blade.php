<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Tailwind CSS CDN (for development) -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Vite Assets -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Livewire Styles -->
        @livewireStyles
    </head>
    <body x-data x-on:click="$dispatch('search:clear-results')">
        <!-- Navigation Bar -->
        <nav class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Left side - Logo/Navigation -->
                    <div class="flex items-center space-x-8">
                        <div class="flex-shrink-0">
                            <h1 class="text-xl font-bold text-gray-900">Admin Dashboard</h1>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/dashboard/articles" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Articles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <main>
            {{$slot}}
        </main>
    </body>
</html>
