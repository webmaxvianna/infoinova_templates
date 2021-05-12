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
            <h1>Cadastrar Ocorrência</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item"><a href="usuarios.php">Usuários</a></li>              
              <li class="breadcrumb-item"><a href="ocorrencias.php">Ocorrências</a></li>   
              <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Flash message -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="alert alert-danger alert-dismissible">
            <div class="lead">
              <i class="fas fa-times"></i>&nbsp;
              Nova ocorrência não foi cadastrada. Tente novamente.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Cadastrar nova ocorrência</h3>
            </div>
            <!-- /.card-header --> 
            <form action="ocorrencias.php">
              <div class="card-body">              
                <div class="lead">
                  Nome: <strong>Maxmiliano Vianna Bentes</strong>
                  <br/>
                  <small>CPF: 123.456.789-99</small>
                </div>
                <div class="row mt-4">
                  <div class="form-group col-md-6">
                    <label for="inputEstimatedBudget">Data</label>
                    <input type="text" id="" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEstimatedBudget">Horário</label>
                    <input type="text" id="" class="form-control">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEstimatedBudget">Descrição</label>
                    <textarea id="" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->            
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-portrait"></i>&nbsp;&nbsp;Registrar Ocorrência</button>
              </div>
              <!-- /.card-footer --> 
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include ('../includes/footer.php');
?>