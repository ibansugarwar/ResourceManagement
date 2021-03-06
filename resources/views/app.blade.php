<!DOCTYPE html>
<html lang="ja">

@include('includes.header')

<body>

  <div class="d-flex" id="wrapper">

    @include('includes.sidebar')
    @include('includes.nav')
    @yield('content')


  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
