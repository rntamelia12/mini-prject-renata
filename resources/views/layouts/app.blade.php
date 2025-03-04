<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>UTS Framework</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/style.css')
</head>

<body>
    <div>
        <div>
            @include('layouts.nav')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
