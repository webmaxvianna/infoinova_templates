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
            <h1>Visualizar Empresa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item"><a href="empresas.php">Empresas</a></li>
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
                  <h2>Fundação Inova Prudente</h2>
                  <a href="alterar_empresa.php" class="btn btn-warning btn-sm center">
                    <i class="fas fa-edit"></i>&nbsp;
                    Alterar Empresa
                  </a>
                </div>
                <!-- /.col -->
              </div>
            <!-- info row -->
              <div class="row invoice-info mb-2">
                <div class="col-md-10 offset-md-1 invoice-col">
                  <b>CNPJ:</b> 04.729.502/0001-09<br>
                  <b>Telefone:</b> (18) 3909-9110<br>
                  <b>Razão Social:</b> FUNDACAO DE EDUCACAO, PESQUISA E INOVACAO DE PRESIDENTE PRUDENTE - VICENTE FURLANETTO - FUNDEPI<br>
                  <b>Nome Fantasia:</b> Fundação Inova Prudente<br>
                  <b>Atividade Principal:</b> Educação profissional de nível técnico<br>  
                </div>
                <!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">     
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">            
            <p class="card-title">Lista de colaboradores</p>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-striped table-hover">
              <thead>                  
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>                  
                  <th>Empresa</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class=" text-nowrap">Ana Souza</td>
                  <td class=" text-nowrap">123.456.789-00</td>
                  <td class=" text-nowrap">FUNDAÇÃO INOVA PRUDENTE</td>
                  <td class=" text-nowrap">
                    <a href="ocorrencias.php" class="btn btn-info btn-sm center">
                      <i class="fas fa-portrait"></i>&nbsp;
                      Ocorrências
                    </a>
                    <a href="alterar_usuario.php" class="btn btn-warning btn-sm center">
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
                  <td class=" text-nowrap">Jose Silva</td>
                  <td class=" text-nowrap">987.654.321-22</td>
                  <td class=" text-nowrap">FUNDAÇÃO INOVA PRUDENTE</td>
                  <td class=" text-nowrap">
                    <a href="ocorrencias.php" class="btn btn-info btn-sm center">
                      <i class="fas fa-portrait"></i>&nbsp;
                      Ocorrências
                    </a>
                    <a href="alterar_usuario.php" class="btn btn-warning btn-sm center">
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
                  <td class=" text-nowrap"><a href="visualizar_usuario.php">Alexander Pierce</a></td>
                  <td class=" text-nowrap">369.258.147-99</td>
                  <td class=" text-nowrap"><a href="visualizar_empresa.php">FUNDAÇÃO INOVA PRUDENTE</a></td>
                  <td class=" text-nowrap">
                    <a href="ocorrencias.php" class="btn btn-info btn-sm center">
                      <i class="fas fa-portrait"></i>&nbsp;
                      Ocorrências
                    </a>
                    <a href="alterar_usuario.php" class="btn btn-warning btn-sm center">
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
                  <td class=" text-nowrap">Ana Carolina Silva</td>
                  <td class=" text-nowrap">369.258.147-99</td>
                  <td class=" text-nowrap">FUNDAÇÃO INOVA PRUDENTE</td>
                  <td class=" text-nowrap">
                    <a href="ocorrencias.php" class="btn btn-info btn-sm center">
                      <i class="fas fa-portrait"></i>&nbsp;
                      Ocorrências
                    </a>
                    <a href="alterar_usuario.php" class="btn btn-warning btn-sm center">
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
                  <td class=" text-nowrap">Luis Henrique Souza</td>
                  <td class=" text-nowrap">369.258.147-99</td>
                  <td class=" text-nowrap">FUNDAÇÃO INOVA PRUDENTE</td>
                  <td class=" text-nowrap">
                    <a href="ocorrencias.php" class="btn btn-info btn-sm center">
                      <i class="fas fa-portrait"></i>&nbsp;
                      Ocorrências
                    </a>
                    <a href="alterar_usuario.php" class="btn btn-warning btn-sm center">
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
<?php
  include ('../includes/footer.php');
?>