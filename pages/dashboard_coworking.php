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
          <div class="col-12">
            <div class="callout callout-info">
              <h3>Olá, <\nome do usuario>!</h3>
              <p class="lead">Seja bem-vindo(a) ao InfoInova.</p>
            </div><!-- /.card -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>

      <!-- Flash message -->
      <div class="container-fluid">
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
      </div>    
      <!-- /.flash message -->
      <!-- Flash message -->
      <div class="container-fluid">
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
      </div>    
      <!-- /.flash message -->
      <!-- Flash message -->
      <div class="container-fluid">
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
      </div>    
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
                    <input type="text" id="inputEstimatedBudget" class="form-control" disabled>
                  </div>
                </div>
                <!-- /.card-body -->            
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;Fazer Check-in / Check-out</button>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;Refazer Check-in / Check-out</button>
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
                  <img src="../images/usuarios/avatar-df.png" class="profile-user-img img-fluid img-circle border-2 border-default" alt="User profile picture"/>
                  <h2>Alexander Pierce</h2>
                </div>
                <!-- /.col -->
              </div>
            <!-- info row -->
              <div class="row invoice-info mb-2">
                <div class="col-md-6 invoice-col">
                  <b>Email:</b> max@email.com<br>
                  <b>Data de nascimento:</b> 22/05/1978<br>
                  <b>RG:</b> 30.956.492-x<br>
                  <b>CPF:</b> 285.163.288-48<br>
                  <b>Telefone:</b> 12991738338<br>                  
                  <b>Nome do Responsável:</b> <br>
                  <b>Telefonedo Responsável:</b> <br>
                </div><!-- /.col -->
                <div class="col-md-6 invoice-col">
                  <b>Área de Atuação:</b> Tecnologgia<br>
                  <b>Área de Interesse:</b> Informatica<br>
                  <b>Empresa:</b> Inova Prudente<br>
                  <b>Socio:</b> Não<br>                  
                  <b>Perfil de Usuário:</b> Administrador<br>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.invoice -->
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