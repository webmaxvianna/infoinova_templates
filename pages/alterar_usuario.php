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
            <h1>Alterar Usuário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item "><a href="usuarios.php">Usuários</a></li>
              <li class="breadcrumb-item active" >Alterar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Fazer o preenchimento automático dos campos via PHP2 -->
    <section class="content">
      <!-- form start -->
      <form action="usuarios.php" method="post">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-secondary">

                <div class="card-header">
                  <p class="card-title">Dados Pessoais</p>
                </div>
                
                <div class="card-body">
                  <div class="row">                  
                    <div class="col-md-3">
                      <img src="../images/usuarios/avatar-df.png" class="img-fluid img-thumbnail" id="imgUsuario" alt="User Image">                        <input type="hidden" id="img64" name="img64"/>
                      <input type="button" enabled onclick="abrirModal()" value="Tirar Foto"></input>
                      <section class="modal-camera" id="modal-camera">
                        <div class="modal-content">
                          <video id="video" autoplay></video>
                          <button type="button" onclick="tirarFoto()">
                            <i class="fas fa-camera-retro"></i>
                          </button>
                          <script>
                              const modalCamera = document.getElementById("modal-camera");
                              function abrirModal(){
                                modalCamera.style.display = "block";
                                startVideoFromCamera();
                              }
                              window.onclick = (e) => {
                                  if (e.target === modalCamera)
                                    modalCamera.style.display = 'none';
                              }
                              function startVideoFromCamera() {
                                  navigator.mediaDevices.getUserMedia({video:{width:320, height:320}}).then(stream=>{
                                      const videoElement = document.querySelector("#video")
                                      videoElement.srcObject = stream
                                  })
                              }
                              function tirarFoto(){
                                const video = document.getElementById("video");
                                const canvas = document.createElement("canvas");
                                // scale the canvas accordingly
                                canvas.width = video.videoWidth;
                                canvas.height = video.videoHeight;
                                // draw the video at that frame
                                canvas.getContext('2d')
                                  .drawImage(video, 0, 0, canvas.width, canvas.height);
                                document.getElementById("imgUsuario").src = canvas.toDataURL();
                                document.getElementById("img64").value = canvas.toDataURL();
                                modalCamera.style.display = 'none';
                              }
                              //window.addEventListener("DOMContentLoaded", startVideoFromCamera())
                          </script>
                        </div>
                      </section>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="form-group col-md-12">
                          <label >Nome</label>
                          <input required enabled type="text" name="nome" class="form-control" value='Jessica Galindo'>                        
                        </div>
                        <div class="form-group col-md-8">
                          <label>Email</label>
                          <input required enabled type="email" name="email" class="form-control" value='jessica@email.com'>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Data de Nascimento</label>
                          <input required enabled type="date" id="dataNascimento" onchange="verificaIdade(this)" name="dataNascimento" class="form-control" value='2000-10-10'>
                          <input type="hidden" id="idade" name="idade" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label>CPF</label>
                            <input required enabled pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" minlength="14" maxlength="14" id="cpf" type="text" name="cpf" class="form-control" value='123.123.123-45'>
                        </div>
                        <div class="form-group col-md-4">
                            <label>RG</label>
                            <input required enabled type="text" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9a-zA-Z]{1}" minlength="12" maxlength="12" id="rg" name="rg" class="form-control" value='99.999.999-x'>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Telefone(com DDD)</label>
                          <input required enabled type="phone" id="telefone" name="telefone" pattern="\([1-9]{2}\)(?:[2-8]|9[1-9])[0-9]{3}-[0-9]{4}" minlength="13" maxlength="14" class="form-control" value='1923456789'>
                        </div>
                      </div>          
                      <!-- <div class="row" id="responsavel" style="display: none;"> -->
                      <div class="row" id="responsavel">          
                        <div class="form-group col-md-6">
                            <label>Nome do Responsável</label>
                            <input enabled type="text"  id="nomeResponsavel" name="responsavel" class="form-control" value=''>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telefone do Responsável</label>
                            <input enabled type="phone" id="telResponsavel" pattern="\([1-9]{2}\)(?:[2-8]|9[1-9])[0-9]{3}-[0-9]{4}" minlength="13" maxlength="14" name="telResponsavel" class="form-control" value=''>
                        </div>
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
                  <p class="card-title">Endereço</p>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label>CEP</label>
                          <input required enabled pattern="[0-9]{5}-[0-9]{3}" minlength="9" maxlength="9" onpaste="consultaCEP(this.value)" onchange="consultaCEP(this.value)" type="text" id="cep" name="cep" class="form-control" value='19060-000'>
                        </div>
                        <div class="form-group col-md-7">
                          <label>Endereço</label>
                          <input required enabled type="text" id="endereco" name="endereco" class="form-control" value='Avenida Manoel Goulart'>
                        </div>
                        <div class="form-group col-md-3">
                          <label>Complemento</label>
                          <input required enabled type="text" id="complemento" name="complemento" class="form-control" value='Apto 32'>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Bairro</label>
                          <input required enabled type="text" id="bairro" name="bairro" class="form-control" value='Vila Santa Helena'>
                        </div>
                        <div class="form-group col-md-5">
                          <label>Município</label>
                          <input required enabled type="text" id="municipio" name="municipio" class="form-control" value='Presidente Prudente'>
                        </div>                      
                        <div class="form-group col-md-3">
                          <label>Estado</label>
                          <select name="perfil" class="form-control">  
                            <option value='MT'>Mato Grosso</option> 
                            <option value='MS'>Mato Grosso do Sul</option> 
                            <option value='MG'>Minas Gerais</option> 
                            <option value='PR'>Paraná</option> 
                            <option value='RJ'>Rio de Janeiro</option> 
                            <option value='SP' selected>São Paulo</option>                   
                          </select>
                        </div>
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
                  <p class="card-title">Outras informações</p>
                </div>
                
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Área de Atuação</label>
                      <input required enabled type="text" name="areaAtuacao" class="form-control" value='Tecnologgia'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Área de Interesse</label>
                      <input required enabled type="text" name="areaInteresse" class="form-control" value='Informatica'>
                    </div>
                    <div class="form-group col-md-7">
                      <label>Empresa:</label>
                      <select class="form-control" name="empresa" enabled><br>
                          <option>...</option>
                          <option value='6'>FUNDACAO DE EDUCACAO, PESQUISA E INOVACAO DE PRESIDENTE PRUDENTE - VICENTE FURLANETTO - FUNDEPI</option><option value='7'>IBATI - TECNOLOGIA E SOLUCOES EM REPARACAO AUTOMOTIVA LTDA</option>                      
                      </select>
                    </div>
                    <div class="form-group col-md-2 my-auto mx-auto mt-0">
                      <div class="custom-control custom-checkbox">
                        <input enabled class="custom-control-input required" type="checkbox" name="socio" id="socio" enabled >
                        <label class="custom-control-label mt-3" for="socio">Socio</label><br>               
                      </div>
                    </div>
                    <div class="form-group col-md-3 mt-2">
                      <label>Perfil de Usuário</label>
                      <select enabled name="perfil" class="form-control">
                        <option selected value=1>Administrador </option>
                        <option value='2'>Coworking</option>
                        <option value='3'>Visitante</option>
                        <option value='4'>Financeiro</option>
                        <option value='5'>Evento</option>
                        <option value='6'>Empresa</option>                      
                      </select>
                    </div>
                  </div>
                </div>

                <div class="card-footer"> 
                  <div class="row">
                    <button class='col-md-6 offset-md-3 btn btn-primary' name='confirmar'><i class="fas fa-edit"></i>&nbsp;&nbsp;Salvar Alterações</button>                
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