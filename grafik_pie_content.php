<?php 
  include 'koneksi.php';
 ?>


<!-- Content Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-10">
        <h1> <b>Laporan Grafik Pie</b> <br> (Arus Bongkar Muat Petikemas <b>Internasional 2020 & 2021</b>) </h1>
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

<!-- __________________Box Pertahun_____________________________ --> 

    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'piechart/pie_chart_pertahun_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'piechart/pie_chart_pertahun_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'piechart/pie_chart_pertahun_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row -->


<!-- ___________________Teus Pertahun____________________________________ --> 

    <div class="row">
      <div class="col-md-4">
        <?php 
        include 'piechart/pie_chart_teus_pertahun_import.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'piechart/pie_chart_teus_pertahun_export.php';
        ?>
      </div>
      <div class="col-md-4">
        <?php 
        include 'piechart/pie_chart_teus_pertahun_import_export.php';
        ?>
      </div>
    </div>
    <!-- /.row --> 
    
<!-- ________________________________________________________________ --> 




  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->




