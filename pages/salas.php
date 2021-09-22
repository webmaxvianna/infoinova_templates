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
            <h1>Salas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item active">Salas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Flash message -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="alert alert-success alert-dismissible">
            <div class="lead">
              <i class="fas fa-check-circle"></i>&nbsp;
              Nova sala cadastrada no sistema.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->
    <!-- Flash message -->
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="alert alert-danger alert-dismissible">
            <div class="lead">
              <i class="fas fa-times"></i>&nbsp;
              Usuário não foi encontrado no sistema.
            </div>
          </div>               
        </div>
      </div>
    </div>     -->
    <!-- /.flash message -->

    <!-- Main content -->
    <section class="content">     
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">             
            <p class="card-title">Lista de Salas</p>
            <div class="card-tools">
              <div class="input-group input-group-sm">
                <a href="cadastrar_sala.php" class="btn btn-sm btn-success mr-2">
                  <i class="fab fa-houzz"></i>&nbsp;
                  Cadastrar
                </a>
                <input type="text" class="form-control" placeholder="Pesquisar">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
              </div>              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-striped table-hover">
              <thead>                  
                <tr>
                  <th>Nome</th>
                  <th>Capacidade</th>                  
                  <th>Valor/Período</th>               
                  <th>Valor/Hora</th>               
                  <th>Localização</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class=" text-nowrap">
                        <a href="visualizar_sala.php">Anfiteatro</a>  
                    </td>
                  <td class=" text-nowrap">80</td>
                  <td class=" text-nowrap">200,00</td>
                  <td class=" text-nowrap"></td>
                  <td class=" text-nowrap">BLOCO A</td>
                  <td class=" text-nowrap">
                    <a href="reservar_sala.php" class="btn btn-info btn-sm center">
                    <i class="far fa-calendar-check"></i>&nbsp;
                      Reservar Sala
                    </a>
                    <a href="alterar_sala.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir esse usuário?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">
                        <a href="visualizar_sala.php">Coworking</a>  
                    </td>
                  <td class=" text-nowrap">120</td>
                  <td class=" text-nowrap">250,00</td>
                  <td class=" text-nowrap"></td>
                  <td class=" text-nowrap">BLOCO C</td>
                  <td class=" text-nowrap">
                    <a href="reservar_sala.php" class="btn btn-info btn-sm center">
                    <i class="far fa-calendar-check"></i>&nbsp;
                      Reservar Sala
                    </a>
                    <a href="alterar_sala.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir esse usuário?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">
                        <a href="visualizar_sala.php">Sala de Treinamento</a>  
                    </td>
                  <td class=" text-nowrap">10</td>
                  <td class=" text-nowrap"></td>
                  <td class=" text-nowrap">15,00</td>
                  <td class=" text-nowrap">BLOCO C</td>
                  <td class=" text-nowrap">
                    <a href="reservar_sala.php" class="btn btn-info btn-sm center">
                    <i class="far fa-calendar-check"></i>&nbsp;
                      Reservar Sala
                    </a>
                    <a href="alterar_sala.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir esse usuário?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
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
  include ('../includes/modal_usuarios.php');
  include ('../includes/footer.php');
?>