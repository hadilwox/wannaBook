@include('layout.header')
<link rel="stylesheet" @yield('css', '') />
<title>@yield('title', 'WannaBook')</title>
</head>

<body class="bg-zinc-900">

    @include('layout.searchModal')

    @include('layout.menu')

    @include('layout.darkOverlay')


    @yield('content')


    @include('layout.footer')

    @include('layout.footerScript')


    @yield('js', '')




</body>

</html>
