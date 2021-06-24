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
            <h1>Relatório - Coworking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item active">Relatório - Coworking</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Pesquisar um intervalo de dias</h3>
            </div>
            <!-- /.card-header --> 
            <form action="checkin_checkout.php" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="inputEstimatedBudget">Data inicial</label>
                    <input type="text" id="inputEstimatedBudget" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEstimatedBudget">Data final</label>
                    <input type="text" id="inputEstimatedBudget" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                  <div class="form-group">
                    <label>Ordenar por</label>
                      <select class="form-control">
                        <option>Total de Horas</option>
                        <option>Quantidade de Check-ins</option>
                        <option>Quantidade de Ocorrências</option>
                      </select>
                    </div>
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->            
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp;&nbsp;Pesquisar</button>
              </div>
              <!-- /.card-footer --> 
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>

      <hr/>

      <div class="callout callout-info">
        <p class="col-md-12 lead">        
          Período: <strong>03/01/2021</strong> a <strong>10/05/2021</strong>
        </p>
        <p>
          Tempo médio entre todos usuários: <strong>03h 09m 01s</strong>.
        </p>
        <p>
          Quantidade de check-ins: <strong>17</strong>
        </p>
      </div>
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="float-right">
              <a href="cadastrar_usuario.php" class="btn btn-sm btn-danger">
                <i class="far fa-file-pdf"></i>&nbsp;
                Exportar em PDF
              </a>
            </div>               
            <p class="card-title">Lista de usuários</p>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-striped table-hover">
              <thead>                  
                <tr>
                  <th>Usuário</th>
                  <th>Horas (Total)</th>
                  <th>Nº de Check-ins</th>
                  <th>Nº de Ocorrências</th>
                  <th>Área de Atuação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class=" text-nowrap">Ana Souza</td>
                  <td class=" text-nowrap">00:01:37</td>
                  <td class=" text-nowrap">1</td>
                  <td class=" text-nowrap">0</td>
                  <td class=" text-nowrap">Desenvolvimento</td>
                </tr>
                <tr>
                  <td class=" text-nowrap">Jose Silva</td>
                  <td class=" text-nowrap">53:31:24</td>
                  <td class=" text-nowrap">4</td>
                  <td class=" text-nowrap">0</td>
                  <td class=" text-nowrap">Desenvolvimento</td>
                </tr>
                <tr>
                  <td class=" text-nowrap">
                    <a href="visualizar_usuario.php">Alexander Pierce</a>                    
                  </td>
                  <td class=" text-nowrap">00:00:18</td>
                  <td class=" text-nowrap">2</td>
                  <td class=" text-nowrap">
                    <a href="ocorrencias.php">3</a> 
                  </td>
                  <td class=" text-nowrap">Desenvolvimento</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include ('../includes/footer.php');
?>