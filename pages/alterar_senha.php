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
            <h1>Alterar Senha</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item active" >Alterar senha</li>
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
              Senha não foi alterada. Tente novamente.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Fazer o preenchimento automático dos campos via PHP2 -->
    <section class="content">
      <!-- form start -->
      <form action="empresas.php" method="post">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="card card-secondary">

                <div class="card-header">
                  <p class="card-title">Alterar senha</p>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10 offset-md-1">

                      <div class="row">
                        <div class="form-group col-md-12">
                          <label>Nova Senha</label>
                          <input required enabled type="text" id="razao_social" name="razao_social" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Confirme Nova Senha</label>
                          <input required enabled type="text" id="nome_fantasia" name="nome_fantasia" class="form-control">
                        </div> 
                      </div>

                    </div>
                  </div>
                </div>

                <div class="card-footer"> 
                  <div class="row">
                    <button class='col-md-6 offset-md-3 btn btn-primary' name='confirmar'><i class="nav-icon fas fa-edit"></i>&nbsp;&nbsp;Salvar Alterações</button>                
                  </div> 
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </form>
    </section>
    <!-- /.content -->
  </div>
<?php
  include ('../includes/footer.php');
?>