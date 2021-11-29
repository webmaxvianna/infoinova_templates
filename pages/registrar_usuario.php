<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style>
    #g-recaptcha {
      width: 302px;
      margin: auto;
    }
  </style>

</head>

<body class="hold-transition login-page">
  <div class="login-box mt-5">
    <div class="login-logo">
      <img src="../images/logo_infoinova_login.png" alt=""></br>
    </div>

    <!-- <div>
    <div class="alert alert-danger alert-dismissible">
      <h5><i class="icon fas fa-ban"></i> Erro!</h5>
      email ou senha incorretos.
    </div>
  </div> -->

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg lead">Registrar novo usuário</p>
        <form action="./login.php" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Nome de usuário (username)">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="E-mail">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Senha (password)">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Confirmar senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-unlock"></span>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="text-center" id="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Lc7qKgZAAAAAIUdkr838gUXVNTSCvMCWn7ywBQE"></div>
          </div>

          <div class="row">
            <div class="col-12 mb-3">
              <button type="submit" class="btn btn-primary btn-block" disabled><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Cadastrar</button>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <p>
                <a href="./login.php">&raquo; Voltar à tela de login</a>
              </p>
            </div>
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

  <!-- Google Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
  <script>
    var onloadCallback = function () {
      grecaptcha.render('g-recaptcha', {
        'sitekey': '6Lc7qKgZAAAAAIUdkr838gUXVNTSCvMCWn7ywBQE',
        'theme': 'light'
      })
    }

    function recaptchaCallback() {
      jQuery('.btn').prop('disabled', false);
    }
  </script>
</body>

</html>