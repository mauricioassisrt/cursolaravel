<html><head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- JAVASCRITP APP -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- JAVASCRITP MASCARA  -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function($){
            $('#telefone').mask('(99) 9 9999-9999');
        });
    </script>
    <!-- FIM JAVASCRITP MASCARA  -->
    <!-- CSS BOOSTRAP -->
    <link rel="stylesheet" href="/css/app.css"/>
    <title>ACAMPAMENTOS </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../vendor/adminlte/vendor/Ionicons/css/ionicons.min.css">

            <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/AdminLTE.min.css">

            <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    
        <link rel="stylesheet" href="../../vendor/adminlte/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="../../vendor/adminlte/css/auth.css">
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body class="hold-transition login-page"  >

    <section class="content">
      <div class="row">
        <!-- left column -->
       
        <!--/.col (left) -->
        <!-- right column -->
        <div class="box box-default" >
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border" style="text-align: center">
              <h1 class="box-title" >Efetuar Cadastro </h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('cadastroFormulario')}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nome Completo </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomeSobrenome" placeholder="Nome">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telefone</label>

                  <div class="col-sm-10">
                    <input id="telefone" type="text" name="telefone" placeholder="(DD)9 9999-99999" required="true"  class="form-control" maskedinput="(999)999999999" maxlength="11">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                   
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Realizar Inscrição </button>
                </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    <div>
    </section>
<script src="../../vendor/adminlte/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js"></script>
<script src="../../vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>

    <script src="../../vendor/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    


</body></html>