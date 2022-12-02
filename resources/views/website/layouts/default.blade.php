<!DOCTYPE html>
<html lang="en">
    <head>
       @include('website.includes.head')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('website.includes.navbar')

        @yield('content')
        <!-- Footer-->
        @include('website.includes.footer')
        @include('website.includes.script')
    </body>
</html>
