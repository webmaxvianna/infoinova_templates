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
            <h1>Cadastrar Modalidade</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item "><a href="modalidades.php">Modalidades</a></li>
              <li class="breadcrumb-item active" >Cadastrar</li>
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
              Nova modalidade não foi cadastrada. Tente novamente.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Fazer o preenchimento automático dos campos via PHP2 -->
    <section class="content">
      <!-- form start -->
      <form action="modalidades.php" method="post">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-secondary">

                <div class="card-header">
                  <p class="card-title">Dados Cadastrais</p>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">

                      <div class="row">
                        <div class="form-group col-sm-2">
                          <label>Código</label>
                          <input type="text" id="codigo" name="codigo" class="form-control">
                        </div>
                        <div class="form-group col-sm-10 ">
                            <label>Nome</label>
                          <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                          <label>Edital</label>
                          <input type="text" id="edital" name="edital" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                          <label>Valor Mensal (R$)</label>
                          <input type="text" id="valor_mensal" name="valor_mensal" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                          <label>Valor Anual (R$)</label>
                          <input type="text" id="valor_anual" name="valor_anual" class="form-control">
                        </div>                         
                        <div class="form-group col-sm-12">
                          <label>Descrição</label>
                          <input type="text" id="descricao" name="descricao" class="form-control">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="card-footer"> 
                  <div class="row">
                    <button class='col-md-6 offset-md-3 btn btn-primary' name='confirmar'><i class="nav-icon fas fa-briefcase"></i>&nbsp;&nbsp;Salvar Modalidade</button>                
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