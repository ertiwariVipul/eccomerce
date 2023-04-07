<head>
        
    <meta charset="utf-8" />
    <title>Blog List | W O S</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('storage/app/public/adminOneAssets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('storage/app/public/adminOneAssets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('storage/app/public/adminOneAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('storage/app/public/adminOneAssets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('storage/app/public/adminOneAssets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('storage/app/public/adminOneAssets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />  
    @yield('css')
</head>