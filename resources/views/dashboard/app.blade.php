<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | JODreams</title>
    <link rel="stylesheet" href="{{ mix('assets/dashboard/css/app.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
<div id="app">
    <App></App>
</div>
<script>
    @auth
        window.Permissions = {!! json_encode(\Illuminate\Support\Facades\Auth::user()->getAllPermissions, true) !!};
    @else
        window.Permissions = [];
    @endauth
    console.log(window.Permissions);
</script>
<script src="{{ mix('assets/dashboard/js/app.js') }}"></script>
</body>
</html>
