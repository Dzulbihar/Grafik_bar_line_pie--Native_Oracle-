
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Grafik - Home </title>
  <?php 
    include 'master/header.php';
   ?>
</head>

<!-- <body class="hold-transition sidebar-mini"> -->
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<!-- <body class="hold-transition sidebar-mini sidebar-collapse"> -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <?php 
    include 'master/navbar.php';
   ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php 
    include 'master/sidebar.php';
   ?>
  </aside>
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php 
    include 'index_content.php';
   ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
  <?php 
    include 'master/footer.php';
   ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <?php 
    include 'master/script.php';
   ?>

</body>
</html>
