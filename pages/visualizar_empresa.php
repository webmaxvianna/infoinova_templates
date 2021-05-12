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
</div>
<?php
  include ('../includes/footer.php');
?>