<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
    <link rel="stylesheet" href="{{asept('css/app.css')}}">
</head>
<body>
    <nav>@yield('navbar')</nav>
    <section>
        <center>
            <h1>@yield('title')</h1>
            @yield('content')
        </center>
    </section>
</body>
</html>