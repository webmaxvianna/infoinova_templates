<?php
include('../includes/header.php');
include('../includes/navbar.php');
include('../includes/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Cadastrar Evento</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
            <li class="breadcrumb-item "><a href="eventos.php">Eventos</a></li>
            <li class="breadcrumb-item active">Cadastrar</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <form action="" method="post">
      <div class="container-fluid" id="view-evento">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <p class="card-title">Informações do Evento</p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label>Nome do Evento</label>
                    <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" max="30" autocomplete="off" value="Treinamento ENERGISA" />
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Ministrante</label>
                    <input type="text" name="ministrante" id="ministrante" class="form-control" autocomplete="off" value="Energisa" />
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Tipo do Evento</label>
                    <select required name="tipoEvento" id="tipoEvento" class="form-control" autocomplete="off">
                      <option value="">Escolha uma opção</option>
                      <option value='1'>Palestra</option>
                      <option value='2' selected>Seminário</option>
                      <option value='3'>Workshop</option>
                      <option value='4'>Curso Pago</option>
                      <option value='5'>Curso Gratuito</option>
                      <option value='6'>Evento Externo</option>
                      <option value='7'>Evento</option>
                      <option value='8'>Sediado</option>
                      <option value='9'>Inova Kids</option>
                    </select>
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Quantidade de Inscritos</label>
                    <input type="number" min="0" name="qtdInscritos" id="qtdInscritos" value="0" class="form-control" autocomplete="off" value="120" />
                  </div>
                  <div class="col-md-3 form-group">
                    <label>Forma de Pagamento</label>
                    <select required name="pagamento" id="pagamento" class="form-control" autocomplete="off">
                      <option value="">Escolha uma opção</option>
                      <option value="pago - externo">Pago - Externo</option>
                      <option value="beneficente">Beneficente</option>
                      <option value="gratuito" selected>Gratuito</option>
                    </select>
                  </div>
                  <div class="col-md-3 form-group">
                    <label>Valor da Entrada (R$)</label>
                    <input type="text" name="valEntrada" id="valEntrada" class="form-control" autocomplete="off" value="0,00" />
                  </div>
                  <div class="col-md-6">
                    <!-- Periodo do evento -->
                    <div class="form-group">
                      <label>Periodo do Evento:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" name="periodoEvento" id="periodoEvento" value="09/09/2021 12:00 AM - 19/09/2021 11:00 PM">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <button class='col-md-6 offset-md-3 btn btn-primary' name='confirmar'>
                    <i class="fab fa-houzz"></i>&nbsp;&nbsp;Alterar Evento
                  </button>
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
<!-- /.content-wrapper -->
<?php
include('../includes/modal_usuarios.php');
include('../includes/footer.php');
?>