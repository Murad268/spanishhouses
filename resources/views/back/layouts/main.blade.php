


@include('back.layouts.head')

   <body>
      <div class="wrapper d-flex align-items-stretch">
         <x-admin-header-component/>

        @yield('content')
      </div>

   </body>
   @include('back.layouts.foot')
   </html>
</body>

</html>
