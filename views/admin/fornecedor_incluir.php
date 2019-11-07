
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>my PHP | Cadastrar incluir</title>
  <?php require_once("dist/css/css.php"); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php require_once("layout/navbar.php") ?>

  <?php require_once("layout/mainSideBar.php") ?>


  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cadastrar Fornecedor </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="fornecedor.php">Fornecedor</a></li>
              <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
          <div class="card">
             <div class="card-header">
                 <h5>Teste</h5>
             </div> 
             <div class="card-body">
             <form>
               
             </form>
              </div>
             <div class="card-footer">
                 Este é o footer
             </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php require_once("layout/controlSideBar.php") ?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php require_once("layout/footer.php") ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php require_once("dist/js/javascript.php")?>
</body>
</html>
