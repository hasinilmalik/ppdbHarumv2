<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ Str::ucfirst(Request::segment(1)) }}</title>

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/color.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

</head>

@yield('body')

</html>
