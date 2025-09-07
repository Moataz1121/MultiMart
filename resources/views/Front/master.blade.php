<!DOCTYPE html>
<html lang="en">
  @include('Front.Layouts.head')
  <body>

    @include('Front.Layouts.svg')

    {{-- Cart --}}
    @include('Front.Layouts.cart')

    @include('Front.Layouts.search')

    @include('Front.Layouts.header')

    @yield('content')
    @include('Front.Layouts.footer')

    @include('Front.Layouts.scripts')
  </body>
</html>
