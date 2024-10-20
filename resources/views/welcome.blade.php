<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ricette Romanove</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 p-10">
            
            <div class="relative min-h-screen flex flex-col justify-start selection:bg-[#FF2D20] selection:text-white">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 w-full flex-wrap">
                @foreach ($recipes as $recipe)
                    <div class="bg-slate-800 rounded-lg w-full">
                        <p class="font-bold text-slate-50 p-4">{{ $recipe->name }}</p>
                        <div>
                            @if($recipe->photo_url)
                                <img src="/storage/{{ $recipe->photo_url }}" alt="{{ $recipe->name }}"
                                    class="w-full rounded-lg object-cover rounded-t-none">
                            @endif
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
