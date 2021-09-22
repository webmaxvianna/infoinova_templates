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
          <h1>Reservar Sala</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./dashboard_coworking.php">Início</a></li>
            <li class="breadcrumb-item "><a href="./salas.php">Salas</a></li>
            <li class="breadcrumb-item active">Reservar Sala</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-secondary">
            <div class="card-header">
              <div class="card-title">Dados da Sala</div>
            </div>
            <div class="card-body">
              <div class="p-1">
                <div class="row invoice-info mb-2">
                  <div class="col-md-4 invoice-col">
                    <b>Nome do espaço:</b> &nbsp;
                    <a href="visualizar_sala.php">
                      Anfiteatro<br />
                    </a>
                    <b>Capacidade:</b> &nbsp;80<br />
                    <b>Valor por perído:</b> &nbsp;R$200,00<br />
                    <b>Localização:</b> &nbsp;BLOCO A<br />
                  </div>
                  <div class="col-md-4 invoice-col">
                    <b>Ambiente climatizado:</b> &nbsp;sim<br />
                    <b>Projetor:</b> &nbsp;sim<br />
                    <b>Caixas de som:</b> &nbsp;0<br />
                    <b>Cadeiras com apoio:</b> &nbsp;não<br />
                    <b>Iluminação:</b> &nbsp;Fria<br />
                  </div>
                  <div class="col-md-4 invoice-col">
                    <b>Disponibilidade:</b> &nbsp;Disponível<br />
                    <b>Frigobar:</b> &nbsp;não<br />
                    <b>Computadores:</b> &nbsp;0<br />
                    <b>Mesas:</b> &nbsp;2<br />
                    <b>Cadeiras:</b> &nbsp;80<br />
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
              <p class="card-title">Dados do Interessado</p>
            </div>
            <div class="card-body">
              <div class="row d-flex justify-content-start ml-1">
                <div class="form-group col-lg-2">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="checkbox custom-control-input" id="PF" name="PF">
                    <label class="custom-control-label" for="PF">Pessoa Física</label>
                  </div>
                </div>
                <div class="form-group col-lg-2">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="checkbox custom-control-input" id="PJ" name="PJ">
                    <label class="custom-control-label" for="PJ">Pessoa Jurídica</label>
                  </div>
                </div>
              </div>
              <div class="row d-flex justify-content-start ml-1">
                <form method="post" id="form-busca">
                  <div class="col-md-12 form-group " id="view-cpf">
                    <label>CPF:</label>
                    <input type="text" name="cpf" id="cpf" required class="form-control" placeholder="CPF" />
                  </div>
                  <div class="col-md-12 form-group" id="view-cnpj" style="display: none">
                    <label>CNPJ:</label>
                    <input type="text" name="cnpj" id="cnpj" required class="form-control" placeholder="CNPJ" />
                  </div>
                </form>
              </div>
              <div class="col alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="fas fa-exclamation-triangle"></i>&nbsp;Usuário não cadastrado!</h5>
                <p><a class="text-secondary stretched-link" style="cursor:pointer" href="cadastrar_usuario.php">Clique aqui</a> para realizar o cadastro.</p>
              </div>
              <div class="invoice p-2 mb-2" id="data-user" style="display: flex;">
                <script>
                  document.getElementById('alert-pf').style.display = 'none';
                </script>
                <script>
                  document.getElementById('alert-pj').style.display = 'none';
                </script>
                <div class="row col-md-12 invoice-info mb-1">
                  <div class="col-md-6 invoice-col">
                    <b id="dado1">Nome:</b>&nbsp;Maxmiliano Vianna Bentes<br>
                    <b>Email:</b>&nbsp;maxvianna@presidenteprudente.sp.gov.br<br>
                    <b>RG:</b>&nbsp;30.956.492-X<br>
                    <b>CPF:</b>&nbsp;285.163.288-48<br>
                    <b>Telefone:</b>&nbsp;(12)98158-3387<br>
                  </div>
                  <div class="col-md-6 invoice-col">
                    <b>CEP:</b>&nbsp;19063-841<br>
                    <b>Endereço:</b>&nbsp;Avenida Paulo Ribeiro<br>
                    <b>Bairro:</b>&nbsp;Residencial Vista do Vale<br>
                    <b>Munícipio:</b>&nbsp;Presidente Prudente<br>
                  </div>
                  <script>
                    document.getElementById("data-user").style.display = "flex";
                    document.getElementById("idUsuario").value = '61';
                    document.getElementById("idEmpresa").value = '';
                  </script>
                </div>
              </div>
              <div class="invoice p-2 mb-2" id="data-user" style="display: none">
                <!-- mostra dados do usuario -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form method="post" enctype="multipart/form-data">
      <!-- id de usuario e empresa -->
      <input type="hidden" name="idUsuario" id="idUsuario" value='' />
      <input type="hidden" name="idEmpresa" id="idEmpresa" value='' />
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <p class="card-title">Dados Gerais</p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col form-group">
                        <label>Período</label>
                        <div class="row">
                          <div class="col form-group">
                            <div class="icheck-primary d-inline mr-2">
                              <input type="checkbox" name="tipoHorario" id="manha" value="manha" />
                              <label for="manha">Manhã</label>
                            </div>
                            <div class="icheck-primary d-inline mr-2">
                              <input type="checkbox" name="tipoHorario" id="tarde" value="tarde" />
                              <label for="tarde">Tarde</label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" name="tipoHorario" id="noite" value="noite" />
                              <label for="noite">Noite</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label>Data(s) do Evento</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" class="form-control float-right" name="data" id="data">
                        </div>
                      </div>
                      <div class="col-sm-6 form-group">
                        <label>Horário Início</label>
                        <input type="time" name="horaInicio" id="horaInicio" required class="form-control" autocomplete="off" />
                      </div>
                      <div class="col-sm-6 form-group">
                        <label>Horário Fim</label>
                        <input type="time" name="horaFim" required id="horaFim" class="form-control" autocomplete="off" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 offset-sm-1">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="checkbox custom-control-input" name="checkboxCedido" id="checkboxCedido">
                          <label class="custom-control-label" for="checkboxCedido">Cedido <small><br />(pagamento isento)</small></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label>Status do Pagamento</label>
                        <select name="pagamento" id="pagamento" class="form-control" autocomplete="off">
                          <option value="pendente">Pendente</option>
                          <option selected value="pago">Pago</option>
                          <option value="isento">Isento</option>
                        </select>
                      </div>
                      <div class="col-md-12 form-group">
                        <label>Valor Total (R$)</label>
                        <input type="text" name="valTotal" id="valTotal" pattern="[0-9\.,]+" required class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Observações</label>
                      <textarea rows="4" id="observacoes" name="observacoes" placeholder="Coloque informações adicionais aqui" class="form-control" maxlength="200"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="checkbox custom-control-input ml-4" id="evento" name="evento">
                        <label class="custom-control-label" for="evento">Novo evento</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <select class="form-control" name="eventoSelect" id="eventoSelect">
                        <option disabled selected value="">Escolha um evento</option>
                        <option value="">Nenhum evento associado</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid" id="view-evento">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <p class="card-title">Evento</p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label>Nome do evento</label>
                    <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" max="30" autocomplete="off" />
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Ministrante</label>
                    <input type="text" name="ministrante" id="ministrante" class="form-control" autocomplete="off" />
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Tipo do evento</label>
                    <select name="tipoEvento" id="tipoEvento" class="form-control" autocomplete="off">
                      <option selected disabled value="">Escolha um tipo</option>
                      <option value='1'>Palestra</option>
                      <option value='2'>Seminário</option>
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
                    <label>Quantidade de inscritos</label>
                    <input type="number" min="0" name="qtdInscritos" id="qtdInscritos" value="0" class="form-control" autocomplete="off" />
                  </div>
                  <div class="col-md-3 form-group">
                    <label>Pagamento</label>
                    <select name="pagamentoEvento" id="pagamentoEvento" class="form-control" autocomplete="off">
                      <option selected disabled value="">Escolha um tipo</option>
                      <option value="pago - externo">Pago - Externo</option>
                      <option value="beneficente">Beneficente</option>
                      <option value="gratuito">Gratuito</option>
                    </select>
                  </div>
                  <div class="col-md-3 form-group">
                    <label>Valor de entrada (R$)</label>
                    <input type="text" name="valEntrada" id="valEntrada" value="0" class="form-control" autocomplete="off" />
                  </div>
                  <div class="col-md-6">
                    <!-- Periodo do evento -->
                    <div class="form-group">
                      <label>Periodo do evento:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" name="periodoEvento" id="periodoEvento">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <button class='col-md-6 offset-md-3 btn btn-primary mb-4' name='confirmar'>
          <i class="fab fa-houzz"></i>&nbsp;&nbsp;Reservar sala
        </button>
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