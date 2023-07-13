<html>
@include('partials_admin._head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('partials_admin._sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('partials_admin._navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          @include('partials_admin._footer')
        </div>
    </div>
</div>
</html>