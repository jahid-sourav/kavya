<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.includes.meta')
    @include('front-end.includes.favicon')
    @include('front-end.includes.fonts')
    @include('front-end.includes.style')
    <title>Kavya - @yield('title')</title>
</head>
<body>
    @include('front-end.includes.preloader')
    @include('front-end.includes.header')
    @yield('body')
    @include('front-end.includes.footer')
    @include('front-end.includes.scroll')
    @include('front-end.includes.script')
    @if (Session::has('message'))
        <script>
            $(document).ready(function(){
                toastr.success('{{ Session::get('message') }}');
            });
        </script>
    @endif
</body>
</html>
