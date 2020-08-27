<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- insert the css links & libraries -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">
    <link rel="stylesheet" href="{{ url('css/nav-sidebar.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="{{ url('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ url('css/theme.css') }}" rel="stylesheet">
    <!--Table desgin-->
    <link href="{{ url('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ url('css/Tables-desgin.css') }}" rel="stylesheet">
    <link href="{{ url('css/tables-add-desgin.css') }}" rel="stylesheet">

</head>

<body class="font-sans bg-gray-800 text-white">


    @include('Admin-Side.includes.header')
    @include('Admin-Side.includes.left-sidebar')
    @include('Admin-Side.includes.gairside')
    <div id="hold-js">
        <div class="right-admin-panel width-full-left-bar ">
            @yield('content')
        </div>
    </div>
    {{-- @include('footer')
    --}}


    <!-- include the scripts-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ url('js/gairbar.js') }}"></script>
    <!-- Tables js-->
    <script src="{{ url('js/datatables.min.js') }}"></script>
    <script src="https://www.jsdelivr.com/package/npm/bulma"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

    </script>
</body>

</html>
