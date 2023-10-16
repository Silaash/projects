<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--css Link here--}}
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title')</title>

</head>
<body>
    @yield('page-name')
    @yield('contact-page')
    @yield('banner')
    @yield('main')
    <hr>
   @section('default-section')
   <h2>This is a defaukt page for both home and contact page</h2>
   @show
   <script src="js/app.js"></script>
</body>
</html>