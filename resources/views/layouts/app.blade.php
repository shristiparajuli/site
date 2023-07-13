<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">
<!-- Mirrored from htmldemo.net/mitech/index-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 05:05:51 GMT -->
<head>
    @include('partials._head')
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
    @include('partials._nav')
        @yield('content')
         @include('partials._footer')
</body>
<script>
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');
        }
      });
    </script>
@include('partials._script')

</html>