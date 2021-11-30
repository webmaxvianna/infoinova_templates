<?php
include('../includes/header.php');
include('../includes/navbar.php');
include('../includes/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quadro de Eventos</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- <div class="row">
        <div class="col-12 mb-4">
          <div class="callout callout-info">
            <p>
              <span class="lead">Olá, <\nome do usuario>!</span>
              <br />
              Esse é o ambiente de trabalho para < \Coworking> no InfoInova.
            </p>
          </div>
        </div>
      </div> -->
    </div>

    <!-- Flash message -->
    <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="alert alert-success alert-dismissible">
              <div class="lead">
                <i class="far fa-check-square"></i>&nbsp;
                Check-in de <strong>< nome ></strong> realizado com sucesso.
              </div>
            </div>               
          </div>
        </div>
      </div>     -->
    <!-- /.flash message -->
    <!-- Flash message -->
    <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="alert alert-secondary alert-dismissible">
              <div class="lead">
                <i class="far fa-square"></i>&nbsp;
                Check-out de <strong>< nome ></strong> realizado com sucesso.
              </div>
            </div>               
          </div>
        </div>
      </div>     -->
    <!-- /.flash message -->
    <!-- Flash message -->
    <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="alert alert-danger alert-dismissible">
              <div class="lead">
                <i class="fas fa-times"></i>&nbsp;
                Não foi possível realizar o Check-in/Check-out no sistema. Tente novamente.
              </div>
            </div>               
          </div>
        </div>
      </div>     -->
    <!-- /.flash message -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card card-secondary">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title mb-0">Agenda</h3>
              </div>
            </div>
            <div class="card-body p-0">
              <div>
                <div style="height:400px">
                  <div id="demo-loading-inline-data"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
      </div><!-- /.row -->


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include('../includes/footer.php');
?>