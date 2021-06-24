<?php
  include ('../includes/header.php');
  include ('../includes/navbar.php');
  include ('../includes/sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Visualizar Usuário</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item"><a href="usuarios.php">Usuários</a></li>
              <li class="breadcrumb-item">Visualizar</li>
            </ol>
            <!-- /.Breadcrumbs -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Flash message -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">

        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
            <!-- title row -->
              <div class="row">
                <div class="col-12 mb-4">
                  <img src="../images/usuarios/avatar-df.png" class="profile-user-img img-fluid img-circle border-2 border-default" alt="User profile picture"/>
                  <h2>Alexander Pierce</h2>
                  <a href="alterar_usuario.php" class="btn btn-warning btn-sm center">
                    <i class="fas fa-edit"></i>&nbsp;
                    Alterar Usuário
                  </a>
                  <a href="ocorrencias.php" class="btn btn-info btn-sm center ml-1">
                    3 ocorrências
                  </a>
                </div>
                <!-- /.col -->
              </div>
            <!-- info row -->
              <div class="row invoice-info mb-4">
                <div class="col-md-4 invoice-col">
                  <b>Email:</b> max@email.com<br>
                  <b>Data de nascimento:</b> 22/05/1978<br>
                  <b>RG:</b> 30.956.492-x<br>
                  <b>CPF:</b> 285.163.288-48<br>
                  <b>Telefone:</b> 12991738338<br>                  
                  <b>Nome do Responsável:</b> <br>
                  <b>Telefonedo Responsável:</b> <br>
                </div>
                <!-- /.col -->
                <div class="col-md-4 invoice-col">
                  <b>Área de Atuação:</b> Tecnologgia<br>
                  <b>Área de Interesse:</b> Informatica<br>
                  <b>Empresa:</b> Inova Prudente<br>
                  <b>Socio:</b> Não<br>                  
                  <b>Perfil de Usuário:</b> Administrador<br>
                </div>
                <!-- /.col -->
                <div class="col-md-4 invoice-col">
                  <address>
                    <b>CEP:</b> 12237-000<br>
                    <b>Endereço:</b> Rua Icatu<br>
                    <b>Número:</b> 140<br>
                    <b>Complemento:</b> apto 31<br>
                    <b>Bairro:</b> Parque Independencia<br>                
                    <b>Cidade:</b> Presidente Prudente<br>
                    <b>Estado:</b> SP<br>
                  </address>
                </div>
              </div><!-- /.row -->
            </div><!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->  
        <div class="row">
          <div class="col-lg-7">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <p class="card-title">Tempo Total de Acessos</p>
                  <a href="relatorio_coworking.php">Ver relatório</a>
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
          <!-- /.col-md-8 -->
          <div class="col-lg-5">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <p class="card-title">Entrada e Saída</p>
                  <a href="relatorio_coworking.php">Ver relatório</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 335px;">
                <table class="table table-bordered table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Entrada</th>
                      <th>Saída</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10/05/2021</td>
                      <td>08:10</td>
                      <td>17:45</td>
                    </tr>
                    <tr>
                      <td>09/05/2021</td>
                      <td>13:03</td>
                      <td>18:10</td>
                    </tr>
                    <tr>
                      <td>09/05/2021</td>
                      <td>08:03</td>
                      <td>12:10</td>
                    </tr>
                    <tr>
                      <td>08/05/2021</td>
                      <td>08:20</td>
                      <td>17:10</td>
                    </tr>
                    <tr>
                      <td>07/05/2021</td>
                      <td>13:15</td>
                      <td>18:10</td>
                    </tr>
                    <tr>
                      <td>07/05/2021</td>
                      <td>08:15</td>
                      <td>11:50</td>
                    </tr>
                    <tr>
                      <td>05/05/2021</td>
                      <td>08:40</td>
                      <td>18:00</td>
                    </tr>
                    <tr>
                      <td>04/05/2021</td>
                      <td>09:05</td>
                      <td>17:30</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
</div>
<?php
  include ('../includes/footer.php');
?>