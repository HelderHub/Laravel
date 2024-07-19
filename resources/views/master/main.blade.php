<!doctype html>
<html lang="{{app()->getlocale()}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, use-scale=no"/>
    <meta name="csrf-token" content ="{{csrf_token()}}">
    <title>Project </title>

    {{--STYLE SECTION--}}
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    @yield('styles')
    {{--STYLE SECTION--}}
</head>
<body>
{{--Header--}}
@component('master.header')
@endcomponent


{{--Content--}}
<main>
    @yield('content')
</main>
{{--Content--}}

@component('master.footer')
@endcomponent

<script src="{!! asset ('js/app.js') !!}" type="text/javascript"></script>
@yield('scripts')

{{--SCRIPTS SECTION--}}
</body>
</html>
