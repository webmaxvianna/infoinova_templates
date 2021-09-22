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
            <h1>Cadastrar Sala</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item "><a href="salas.php">Salas</a></li>
              <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Flash message -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="alert alert-danger alert-dismissible">
            <div class="lead">
              <i class="fas fa-times"></i>&nbsp;
              Não foi possível cadastrar nova sala. Tente novamente.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Fazer o preenchimento automático dos campos via PHP2 -->
    <section class="content">
      <form method="post">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-secondary">
                <div class="card-header">
                  <p class="card-title">Dados Gerais</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 form-group">
                      <label>Nome do Espaço</label>
                      <input type="text" name="nome" id="nome" required class="form-control" autocomplete="off" value=""/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label>Localização</label>
                      <select required name="localizacao" id="localizacao" class="form-control" >
                        <option value="">Escolha uma localização...</option>
                        <option value="BLOCO A">BLOCO A</option>
                        <option value="BLOCO B">BLOCO B</option>
                        <option value="BLOCO C">BLOCO C</option>
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Capacidade</label>
                      <input type="number" min="0" name="capacidade" required id="capacidade" class="form-control" autocomplete="off" value="0"/>
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Valor por periodo (R$)</label>
                      <input type="text" name="valPeriodo" id="valPeriodo" pattern="[0-9.,]+" class="form-control" autocomplete="off" value="0"/>
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Valor por hora (R$)</label>
                      <input type="text" name="valHora"  id="valHora" pattern="[0-9.,]+" class="form-control" autocomplete="off" value="0"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" checked class="checkbox custom-control-input" id="disponivel" name="disponivel"/>
                        <label class="custom-control-label" for="disponivel">Disponivel <small>(apta para utilização)</small></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-secondary">
                <div class="card-header">
                    <p class="card-title">Detalhes</p>
                </div>                          
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-4 form-group">
                          <label>Caixas de som</label>
                          <input type="number" min="0" name="caixaSom" id="caixaSom" value="0" class="form-control" max="30" autocomplete="off"/>
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Computadores</label>
                          <input type="number" min="0" name="computadores" id="computadores" value="0" class="form-control" autocomplete="off"/>
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Iluminação</label>
                          <select name="iluminacao" id="iluminacao" value="" class="form-control" autocomplete="off">
                            <option value="fria">Fria</option>
                            <option value="quente">Quente</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label>Mesas</label>
                          <input type="number" min="0" name="mesas" id="mesas" value="0" class="form-control"  autocomplete="off"/>
                        </div>
                        <div class="col-md-6 form-group">
                          <label>Cadeiras</label>
                          <input type="number" min="0" name="cadeiras" id="cadeiras" value="0" class="form-control"  autocomplete="off"/>
                        </div>
                      </div>
                      
                      
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="form-group">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="checkbox custom-control-input" id="climatizado" name="climatizado">
                            <label class="custom-control-label" for="climatizado">Ambiente Climatizado</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="checkbox custom-control-input" id="frigobar" name="frigobar">
                            <label class="custom-control-label" for="frigobar">Frigobar</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="checkbox custom-control-input" id="projetor" name="projetor">
                            <label class="custom-control-label" for="projetor">Projetor</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="checkbox custom-control-input" id="cadeiraApoio" name="cadeiraApoio">
                            <label class="custom-control-label" for="cadeiraApoio"> Cadeira com apoio </label> 
                          </div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-12 form-group">
                      <label>Observações</label>
                      <textarea rows="5" id="observacoes" name="observacoes" placeholder="Coloque informações adicionais aqui" class="form-control" maxlength="200"></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer"> 
                  <div class="row">
                    <button class='col-md-6 offset-md-3 btn btn-primary' name='confirmar'><i class="fab fa-houzz"></i>&nbsp;&nbsp;Cadastrar nova sala</button>                
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


    

  