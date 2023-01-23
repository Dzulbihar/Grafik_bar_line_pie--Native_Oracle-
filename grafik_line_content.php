<?php 

include 'koneksi.php';
// include 'linechart/database_chart.php';

 ?>


<!-- Content Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-10">
        <h1> <b>Laporan Grafik Line</b> <br> (Arus Bongkar Muat Petikemas <b>Internasional 2020 & 2021</b>) </h1>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"> Grafik </li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


<!-- Main Grafik -->
<section class="content">
  <div class="container-fluid">

<!-- _________________ PERBULAN BOX _____________________________ -->
    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_perbulan_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_perbulan_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_perbulan_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->
<!-- ___________________________________________________________________ -->

<!-- _________________ PERBULAN TEUS _____________________________ -->
    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_perbulan_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_perbulan_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_perbulan_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->
<!-- ___________________________________________________________________ -->

<!-- _________________ TRIWULAN BOX _____________________________ -->
    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_triwulan_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_triwulan_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_triwulan_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->
<!-- ___________________________________________________________________ -->
<!-- _________________ TRIWULAN TEUS _____________________________ -->
    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_triwulan_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_triwulan_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_triwulan_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->
<!-- ___________________________________________________________________ -->

<!-- _________________ SEMESTER BOX _____________________________ -->
    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_semester_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_semester_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_semester_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->
<!-- ___________________________________________________________________ -->
<!-- _________________ SEMESTER TEUS _____________________________ -->
    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_semester_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_semester_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'linechart/line_chart_teus_semester_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->
<!-- ___________________________________________________________________ -->






  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->