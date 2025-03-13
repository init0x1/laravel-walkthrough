<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
</head>
<body>
    <x-nav-link>
        <a href="/test">Test</a>
    </x-nav-link>

    // this is the layout file every other file will extend this file and will be rendered in the body section
    {{ $slot }}
</body>
</html>