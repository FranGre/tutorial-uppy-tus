<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Uppy Styles -->
    <link href="https://releases.transloadit.com/uppy/v4.1.0/uppy.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased 
bg-gray-50 text-black/50 
dark:bg-neutral-900 dark:text-white/50">

    <div id="uppy"></div>

    <script type="module">
        import { Uppy, Dashboard, Tus } from "https://releases.transloadit.com/uppy/v4.1.0/uppy.min.mjs"


        const uppy = new Uppy()

        uppy.use(Dashboard, { 
            target: '#uppy',
            inline: true ,
            theme: 'auto'
        })

        uppy.use(Tus, {
            endpoint: 'https://tusd.tusdemo.net/files'
        })
    </script>
</body>

</html>