<!DOCTYPE html>
<html lang="in">

  <head>
      <title>Kongsi OLE777 Affiliate Bola</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Kongsi OLE777 adalah program OLE777 Affiliate bola yang memberikan member dan non-member penghasilan dengan platform OLE777.">
      <meta name="keywords" content="Kongsi OLE777 Indo, OLE777 Affiliate Bola, Affiliate Marketing OLE777 Indo, Marketing Affiliate">
      <link rel="icon" type="image/x-icon" href="favicon.ico">

      @yield('css')

      <link rel="stylesheet" href="{!! url('assets/css/styles.css?v=2') !!}" />
  </head>

  <body class="mobile-footer-retained">
    
    @include('components.header')

    @include('components.nav')

    @yield('content')

    @include('components.contacts')

    @include('components.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Mobile Navigation Toggle Script -->

    @yield('custom_js')

    <script>
        function menuToggle() {
            var md = document.getElementById("mobile-dropdown");
            var mi = document.getElementById("menu-icon");
            if (md.style.display === "block") {
                md.style.display = "none";
                mi.src = "images/hamburger.svg";
            } else {
                md.style.display = "block";
                mi.src = "images/icon-close.svg";
            }
        }
    </script>
      
  </body>
</html>
