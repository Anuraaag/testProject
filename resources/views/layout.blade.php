<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Learning Laravel 5.8')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
    
    <div class="container">
        @include('nav', ['user'=>'Anurag'])

        @if(session()->has('message'))
            <div class="alert alert-success mt-3" role="alert">
                <strong>Success!</strong> {{ session()->get('message') }}
            </div>
        @endif

        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
