@include('front.layouts.head')
@yield('bg')

<body>


<x-header-component :contacts="$contacts" />


    @yield('content');

    <x-footer-component />
</body>

</html>
