<?php
include('../includes/header.php');
include('../includes/navbar.php');
include('../includes/sidebar.php');
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
    <div class="row">
      <div class="col-md-5">
        <div class="col-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Colaboradores</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 140px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 350px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Nome</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class=" text-nowrap">
                      <img src="../images/usuarios/avatar2.png" id="user-img" class="avatar-lista avatar-borda-ocorrencia img-fluid img-circle mr-1" alt="User Image">
                      Ana Souza
                    </td>
                  </tr>
                  <tr>
                    <td class=" text-nowrap">
                      <img src="../images/usuarios/avatar1.png" id="user-img" class="avatar-lista img-fluid img-circle mr-1" alt="User Image">
                      Jose Silva
                    </td>
                  </tr>
                  <tr>
                    <td class=" text-nowrap">
                      <img src="../images/usuarios/avatar4.png" id="user-img" class="avatar-lista avatar-borda-ocorrencia img-fluid img-circle mr-1" alt="User Image">
                      <a href="visualizar_usuario.php">Alexander Pierce</a>
                    </td>
                  </tr>
                  <tr>
                    <td class=" text-nowrap">
                      <img src="../images/usuarios/avatar3.png" id="user-img" class="avatar-lista img-fluid img-circle mr-1" alt="User Image">
                      Ana Carolina Silva
                    </td>
                  </tr>
                  <tr>
                    <td class=" text-nowrap">
                      <img src="../images/usuarios/avatar5.png" id="user-img" class="avatar-lista img-fluid img-circle mr-1" alt="User Image">
                      Luis Henrique Souza
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="col-md-7">
        <div class="card card-secondary">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Próximos Eventos</h3>
              <a href="javascript:void(0);">Ver Agenda</a>
            </div>
          </div>
          <div class="card-body table-responsive p-0" style="height: 350px;">
            <table class="table table-striped table-bordered table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th class="">Data</th>
                  <th class="w-75">Evento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>19/07/2021</td>
                  <td>
                      <a href="visualizar_evento.php">Evento Lorem ipsum dolor sit amet consectetur adipiscing elit</a><br />
                  </td>
                </tr>
                <tr>
                  <td>19/07/2021</td>
                  <td>
                      <a href="visualizar_evento.php">Evento 1</a><br />
                  </td>
                </tr>
                <tr>
                  <td>19/07/2021</td>
                  <td>
                    <a href="visualizar_evento.php">Evento 2</a><br />
                  </td>
                </tr>
                <tr>
                  <td>19/07/2021</td>
                  <td>
                      <a href="visualizar_evento.php">Evento 3</a><br />
                  </td>
                </tr>
                <tr>
                  <td>19/07/2021</td>
                  <td>
                      <a href="visualizar_evento.php">Evento 4</a><br />
                  </td>
                </tr>
                <tr>
                  <td>19/07/2021</td>
                  <td>
                      <a href="visualizar_evento.php">Evento 5</a><br />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->

</div>
<?php
include('../includes/footer.php');
?>