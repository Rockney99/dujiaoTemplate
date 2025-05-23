<!DOCTYPE html>
<html lang="{{ str_replace('_','-',strtolower(app()->getLocale())) }}">

<head>
    @include('riniba_03.layouts._header')
    @include('riniba_03.layouts._css')
</head>

<body>
    @include('riniba_03.layouts._nav')
    @yield('content')
    @include('riniba_03.layouts._footer')
</body>
@include('riniba_03.layouts._script')
@section('js')
@show

</html>