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
            <h1>Ocorrências</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_page.php">Início</a></li>
              <li class="breadcrumb-item"><a href="usuarios.php">Usuários</a></li>
              <li class="breadcrumb-item active">Ocorrências</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Flash message -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="alert alert-success alert-dismissible">
            <div class="lead">
              <i class="fas fa-check-circle"></i>&nbsp;
              Nova ocorrência cadastrada no sistema.
            </div>
          </div>               
        </div>
      </div>
    </div>    
    <!-- /.flash message -->

    <!-- Main content -->
    <section class="content">  
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="float-right">
                <a href="cadastrar_ocorrencia.php" class="btn btn-sm btn-success">
                  <i class="fas fa-portrait"></i>&nbsp;
                  Nova Ocorrência
                </a>
              </div>             
              <p class="card-title">Lista de ocorrências</p>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="lead">
                Nome: <strong>Maxmiliano Vianna Bentes</strong>
                <br/>
                <small>CPF: 123.456.789-99</small>
              </div>
              <blockquote  class="quote-info">
                Data: <strong>28/04/2021</strong> - Horário: <strong>8h25</strong>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p> 
                <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir esse usuário?');">
                  <i class="far fa-trash-alt"></i>&nbsp;
                  Excluir
                </a>
              </blockquote>
              <blockquote  class="quote-info">
                Data: <strong>21/04/2021</strong> - Horário: <strong>16h40</strong>
                <p>
                Quisque tristique in tellus vitae luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Cras ac lacus fringilla massa ultrices pretium sagittis a massa. Donec mauris nulla, viverra consequat rhoncus posuere, congue ut lacus. 
                Pellentesque bibendum placerat laoreet. Nulla interdum, lectus quis finibus iaculis, elit arcu tincidunt odio, sed gravida tellus ante vel tellus. 
                Donec sed mi in orci vehicula pulvinar a at mauris. Nam facilisis vestibulum velit, vitae pellentesque massa blandit sit amet. 
                Vestibulum dictum ullamcorper convallis. Duis tellus mi, sollicitudin at sollicitudin at, iaculis id sem. Ut sollicitudin sit amet urna non pulvinar. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar rutrum elit et gravida.
                </p> 
                <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir esse usuário?');">
                  <i class="far fa-trash-alt"></i>&nbsp;
                  Excluir
                </a>
              </blockquote>
              <blockquote  class="quote-info">
                Data: <strong>09/04/2021</strong> - Horário: <strong>13h50</strong>
                <p>
                Ut maximus sodales quam non vehicula. Curabitur malesuada lacinia leo, sed blandit lorem consequat eu. Nam at ante et sapien semper efficitur ac non ex. 
                Aenean non dui eu augue lacinia interdum vel in sapien. Aenean a finibus sapien. Quisque ut varius ipsum. Mauris vestibulum  finibus. 
                Phasellus sollicitudin neque vel ante ultricies viverra eu sit amet diam. Duis a risus a dui condimentum commodo id non lacus. 
                </p>  
                <a href="#" class="btn btn-danger btn-sm center" onclick="return confirm('Você realmente quer excluir esse usuário?');">
                  <i class="far fa-trash-alt"></i>&nbsp;
                  Excluir
                </a>
              </blockquote>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- ./col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include ('../includes/modal_usuarios.php');
  include ('../includes/footer.php');
?>