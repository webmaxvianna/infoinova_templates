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
            <h1>Alterar Empresa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item "><a href="empresas.php">Empresas</a></li>
              <li class="breadcrumb-item active" >Alterar</li>
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
              Dados da empresa não foram alterados. Tente novamente.
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
            <div class="col-md-12">
              <div class="card card-secondary">

                <div class="card-header">
                  <p class="card-title">Dados Cadastrais</p>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">

                      <div class="row">
                        <div class="form-group col-md-6">
                          <label>CNPJ</label>
                          <input required enabled type="text" id="cnpj" name="cnpj" class="form-control" value="04.729.502/0001-09">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telefone</label>
                          <input required enabled type="text" id="telefone" name="telefone" class="form-control" value="(18) 3909-9110">
                        </div>

                        <div class="form-group col-md-12">
                          <label>Razão Social</label>
                          <input required enabled type="text" id="razao_social" name="razao_social" class="form-control" value="FUNDACAO DE EDUCACAO, PESQUISA E INOVACAO DE PRESIDENTE PRUDENTE - VICENTE FURLANETTO - FUNDEPI">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Nome Fantasia</label>
                          <input required enabled type="text" id="nome_fantasia" name="nome_fantasia" class="form-control" value="Fundação Inova Prudente">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Atividade Principal</label>
                          <input required enabled type="text" id="atividade_principal" name="atividade_principal" class="form-control" value="Educação profissional de nível técnico">
                        </div> 
                      </div>

                    </div>
                  </div>
                </div>

                <div class="card-footer"> 
                  <div class="row">
                    <button class='col-md-6 offset-md-3 btn btn-primary' name='confirmar'><i class="nav-icon fas fa-briefcase"></i>&nbsp;&nbsp;Salvar Alterações</button>                
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