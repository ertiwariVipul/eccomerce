<html>
    @include('includs.admin.head')

    <body data-sidebar="dark" data-layout-mode="light">
        
        @include('includs.admin.header')
        @include('includs.admin.sidebar')
       
        @yield('content')
    
@include('includs.admin.scripts')
    </body>
</html>