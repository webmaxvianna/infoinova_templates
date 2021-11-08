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
          <h1>Dashboard</h1>
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
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Entrada ou Saída de um usuário</h3>
            </div>
            <!-- /.card-header -->
            <form action="dashboard_coworking.php" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="inputEstimatedBudget">Digite o CPF do usuário</label>
                      <input type="text" id="inputEstimatedBudget" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                      <div class="card-header text-muted border-bottom-0">                    
                        <span class="badge badge-danger">&nbsp;Possui pendências&nbsp;</span>
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-8 mt-3">
                            <h2 class="lead"><b><i class="fas fa-crown"></i> Alexander Pierce</b></h2>
                            <p class="text-muted text-sm"><b>CPF: </b> 369.258.147-99 </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Empresa: INOVA PRUDENTE</li>
                            </ul>
                          </div>
                          <div class="col-4 text-center">                            
                            <img src="../images/usuarios/avatar4.png" alt="user-avatar" class="profile-user-img img-circle img-fluid border-success" style="width: 150px;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;Fazer Check-in / Check-out</button>
                <!-- <button type="submit" class="btn btn-warning"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;Refazer Check-in / Check-out</button> -->
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title mb-0">Agenda</h3>
                <a class="alink" href="javascript:void(0);">Ver calendário</a>
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

      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Total de Acessos</h3>
                <a class="alink" href="javascript:void(0);">Ver relatório</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">4.230 acessos</span>
                  <span>Total de acessos (Últimos 10 dias)</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="chart1" height="200"></canvas>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Tempo Total de Acessos</h3>
                <a class="alink" href="javascript:void(0);">Ver relatório</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">3123 horas</span>
                  <span>Total de horas (Últimos 10 dias)</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="chart2" height="200"></canvas>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
      </div><!-- /.row -->
        
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Inscritos / Participantes</h3>
                <a class="alink" href="javascript:void(0);">Ver relatório</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">4.230 inscritos / 3.158 participantes</span>
                  <span>Total (Últimos 10 dias)</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="chart3" height="200"></canvas>
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