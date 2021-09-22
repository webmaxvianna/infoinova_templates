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
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-4">
            <div class="callout callout-info">
              <p>
                <span class="lead">Olá, <\nome do usuario>!</span>
                <br/>
                Esse é o ambiente de trabalho para < \Coworking > no InfoInova.
              </p>
            </div><!-- /.card -->
          </div><!-- /.col -->
        </div><!-- /.row -->
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
          <div class="col-md-4">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Entrada ou Saída de um usuário</h3>
              </div>
              <!-- /.card-header --> 
              <form action="dashboard_coworking.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEstimatedBudget">Digite o CPF do usuário</label>
                    <input type="text" id="inputEstimatedBudget" class="form-control">
                    <!-- <input type="text" id="inputEstimatedBudget" class="form-control" disabled> -->
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
          <div class="col-md-8">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
            <!-- title row -->
              <div class="row">
                <div class="col-12 mb-2">
                  <img src="../images/usuarios/avatar-df.png" class="profile-user-img img-fluid img-circle border-2 border-success" alt="User profile picture"/>
                  <!-- <img src="../images/usuarios/avatar-df.png" class="profile-user-img img-fluid img-circle border-2 border-default" alt="User profile picture"/> -->
                  <h2>Alexander Pierce</h2>
                </div>
                <!-- /.col -->
              </div>
            <!-- info row -->
              <div class="row invoice-info mb-4">
                <div class="col-sm-6 invoice-col">
                  <b>Nome de Usuário:</b> maxvianna<br>
                  <b>Email:</b> max@email.com<br>
                  <b>Data de nascimento:</b> 22/05/1978<br>
                  <b>RG:</b> 30.956.492-x<br>
                  <b>CPF:</b> 285.163.288-48<br>
                  <b>Telefone:</b> 12991738338<br>                  
                  <b>Nome do Responsável:</b> <br>
                  <b>Telefonedo Responsável:</b> <br>
                </div><!-- /.col -->
                <div class="col-sm-6 invoice-col">
                  <b>Área de Atuação:</b> Tecnologgia<br>
                  <b>Área de Interesse:</b> Informatica<br>
                  <b>Empresa:</b> Inova Prudente<br>
                  <b>Socio:</b> Não<br>                  
                  <b>Perfil de Usuário:</b> Administrador<br>
                </div><!-- /.col -->
              </div><!-- /.row -->
            <!-- error row -->
              <!-- <div class="row invoice-info mb-2">
                <div class="col-12 mb-2">
                  <h3>
                    CPF do Usuário não encontrado!
                  </h3>
                  <p>
                    Verifique se o usuário possui cadastro no sistema.
                    <br/>
                    <a href="usuarios.php">Ir para lista de usuários cadastrados.</a> 
                  </p>
                </div>
              </div> -->
            </div><!-- /.invoice -->
          </div><!-- /.col -->
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
                  <h3 class="card-title">Próximos Eventos</h3>
                  <a class="alink" href="javascript:void(0);">Ver Agenda</a>
                </div>
              </div>
              <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-striped table-bordered table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="">Data</th>                      
                      <th class="">Hora</th>
                      <th class="w-75">Evento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>19/07/2021</td>
                      <td>10h00<br/>12h00</td>
                      <td>
                        <h5>
                          <strong>Evento Lorem ipsum dolor sit amet consectetur adipiscing elit</strong><br/>
                          <small>Local: Auditório</small>
                        </h5>                        
                      </td>
                    </tr>
                    <tr>
                      <td>19/07/2021</td>
                      <td>10h00<br/>12h00</td>
                      <td>
                        <h5>
                          <strong>Evento 1</strong><br/>
                          <small>Local: Sala 1</small>
                        </h5> 
                      </td>
                    </tr>
                    <tr>
                      <td>19/07/2021</td>
                      <td>10h00<br/>12h00</td>
                      <td>
                        <h5>
                          <strong>Evento 2</strong><br/>
                          <small>Local: Sala 2</small>
                        </h5> 
                      </td>
                    </tr>
                    <tr>
                      <td>19/07/2021</td>
                      <td>10h00<br/>12h00</td>
                      <td>
                        <h5>
                          <strong>Evento 3</strong><br/>
                          <small>Local: Sala 3</small>
                        </h5> 
                      </td>
                    </tr>
                    <tr>
                      <td>19/07/2021</td>
                      <td>10h00<br/>12h00</td>
                      <td>
                        <h5>
                          <strong>Evento 4</strong><br/>
                          <small>Local: Sala 4</small>
                        </h5> 
                      </td>
                    </tr>
                    <tr>
                      <td>19/07/2021</td>
                      <td>10h00<br/>12h00</td>
                      <td>
                        <h5>
                          <strong>Evento 5</strong><br/>
                          <small>Local: Sala 5</small>
                        </h5> 
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
                  <div style="height:350px">
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
  include ('../includes/footer.php');
?>