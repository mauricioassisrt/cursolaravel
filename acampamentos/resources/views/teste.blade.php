<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- JAVASCRITP APP -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- JAVASCRITP MASCARA  -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#telefone').mask('(99) 9 9999-9999');
        });
    </script>
    <!-- FIM JAVASCRITP MASCARA  -->
    <!-- CSS BOOSTRAP -->
    <link rel="stylesheet" href="/css/app.css"/>
    <title>CRISTÃO DIGITAL </title>

  </head>

  <body>
    
  </body>
</html>
