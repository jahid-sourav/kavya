<!doctype html>
<html lang="en">
<head>
    @include('back-end.includes.meta')
    <title>Dashboard | @yield('title')</title>
    @include('back-end.includes.favicon')
    @include('back-end.includes.style')
</head>
    <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
        <div id="layout-wrapper">
            @include('back-end.includes.header')
            <div class="main-content">
                <div class="page-content">
                    @include('back-end.includes.breadcrumb')
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            @include('back-end.includes.card-title')
                            @yield('body')
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->
                @include('back-end.includes.footer')
            </div>
        </div>
        @include('back-end.includes.script')
        @if (Session::has('message'))
            <script>
                $(document).ready(function(){
                    toastr.success('{{ Session::get('message') }}');
                });
            </script>
        @endif
    </body>
</html>
