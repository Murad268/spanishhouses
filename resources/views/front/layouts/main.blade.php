@include('front.layouts.head')
@yield('bg')

<body>


<x-header-component :logo="$logo" :contacts="$contacts" />


    @yield('content');

    <x-footer-component />
</body>

</html>
