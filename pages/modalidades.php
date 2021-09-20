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
            <h1>Modalidades</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item active">Modalidades</li>
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
              Nova modalidade cadastrada no sistema.
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
              Modalidade não foi encontrada no sistema.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Main content -->
    <section class="content">     
      <div class="col-md-12">
        <div class="card">
        <div class="card-header">             
            <p class="card-title">Lista de modalidades</p>
            <div class="card-tools">
              <div class="input-group input-group-sm">
                <a href="cadastrar_modalidade.php" class="btn btn-sm btn-success mr-2">
                  <i class="fas fa-user-plus"></i>&nbsp;
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
                  <th>Código</th>
                  <th>Modalidade</th>
                  <th>Edital</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class=" text-nowrap">3.1</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Escritório Virtual Individual</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.1a</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Escritório Virtual</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.2</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Empresa Residente Individual em Local de Uso</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.2a</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Residente Coworking</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.3</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Empresa Residente Individual em Local de Determinado</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.3a</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Residente Mezanino</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.4</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Empresas Residentes Coletivo para até 4 pessoas</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.4a</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Residente Privado</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.5</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Empresas Residentes Coletivo para até 8 pessoas</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.5a</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Residente Temporário</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                      <i class="far fa-trash-alt"></i>&nbsp;
                      Excluir
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class=" text-nowrap">3.6</td>
                  <td class=" text-nowrap"><a href="visualizar_modalidade.php">Ponto de Atendimento</a></td>
                  <td class=" text-nowrap">Edital</td>
                  <td class=" text-nowrap">
                    <a href="alterar_modalidade.php" class="btn btn-warning btn-sm center">
                      <i class="far fa-edit"></i>&nbsp;
                      Alterar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
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
  include ('../includes/modal_empresas.php');
  include ('../includes/footer.php');
?>