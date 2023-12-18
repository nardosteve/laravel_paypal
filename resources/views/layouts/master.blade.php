<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayPal Integration</title>
    
    {{-- CSS File --}}
    @include('partials.css')
</head>
<body>

    <div class="content-wrapper">
        @include('partials.header')
        @yield('content')

    </div>
    @include('partials.footer')
    @include('partials.js') 
</body>
</html>