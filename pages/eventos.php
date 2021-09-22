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
          <h1>Eventos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
            <li class="breadcrumb-item active">Eventos</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- /.flash message -->

  <!-- Main content -->
  <section class="content">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <p class="card-title">Lista de Eventos</p>
          <div class="card-tools">
            <div class="input-group input-group-sm">
              <a href="cadastrar_evento.php" class="btn btn-sm btn-success mr-2">
                <i class="fas fa-calendar-alt"></i>&nbsp;
                Cadastrar
              </a>
              <input type="text" id="pesquisar" class="form-control" placeholder="Pesquisar">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table id="tabela-empresas" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Evento</th>
                <th>Categoria</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                 <a href="./visualizar_evento.php">Treinamento ENERGISA</a></td>
                <td></td>
                <td>
                  <a href="alterar_evento.php" class="btn btn-warning btn-sm center">
                    <i class="far fa-edit"></i>&nbsp;
                    Alterar
                  </a>
                  <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                    <i class="far fa-trash-alt"></i>&nbsp;
                    Excluir
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="./visualizar_evento.php">Workshop Prudente Online</a>
                </td>
                <td></td>
                <td>
                  <a href="alterar_evento.php" class="btn btn-warning btn-sm center">
                    <i class="far fa-edit"></i>&nbsp;
                    Alterar
                  </a>
                  <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                    <i class="far fa-trash-alt"></i>&nbsp;
                    Excluir
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="./visualizar_evento.php">Plantão de Vendas MRV</a>
                </td>
                <td></td>
                <td>
                  <a href="alterar_evento.php" class="btn btn-warning btn-sm center">
                    <i class="far fa-edit"></i>&nbsp;
                    Alterar
                  </a>
                  <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir essa empresa?');">
                    <i class="far fa-trash-alt"></i>&nbsp;
                    Excluir
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div><!-- /.content-wrapper -->
<script>
  $('#tabela-empresas').DataTable({
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    "language": {
      "search": "Pesquisar",
      "paginate": {
        "first": "First",
        "last": "Last",
        "next": "Próximo",
        "previous": "Anterior"
      },
      "zeroRecords": "Nenhum dado encontrado."
    },

    "order": []
  });
  oTable = $('#tabela-empresas').DataTable(); //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
  $('#pesquisar').keyup(function() {
    oTable.search($(this).val()).draw();
  })
</script>
<!-- The Modal -->
<div class="modal" id="companiesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header modal-primary">
        <h4 class="modal-title">Pesquisar empresa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="../admin/PesquisaEmpresa.php" name="" method="post">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label for="inputEstimatedBudget">Digite o CNPJ da empresa</label>
            <input type="text" id="cnpj" name="cnpj" class="form-control">
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
include('../includes/modal_usuarios.php');
include('../includes/footer.php');
?>