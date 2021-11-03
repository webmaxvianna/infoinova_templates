<?php
  include ('../includes/header.php');
  include ('../includes/navbar.php');
  include ('../includes/sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sobre o  Sistema</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Início</a></li>
              <li class="breadcrumb-item active">Sobre</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12 mb-5">
                  <h4>
                    <i class="fas fa-laptop-code"></i> InfoInova
                    <small class="float-right">Última Atualização: 03/11/2021</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Sobre:</p>

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu iaculis magna. Proin condimentum eros et dapibus blandit.
                  </p>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Phasellus ac dictum velit. Nulla euismod iaculis ante ut laoreet. Maecenas gravida feugiat leo, sed placerat mi imperdiet quis.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Versão</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>InfoInova:</th>
                        <td>1.0</td>
                      </tr>
                      <tr>
                        <th>PHP:</th>
                        <td>7.3</td>
                      </tr>
                      <tr>
                        <th>AdminLTE:</th>
                        <td>3.1</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include ('../includes/footer.php');
?>