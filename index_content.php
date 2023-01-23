<?php 

include 'koneksi.php';

?>


<!-- Laporan Data Tables -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-10">
        <h1> <b>Laporan Data Tables</b> <br> (Arus Bongkar Muat Petikemas <b>Internasional 2020 & 2021</b>) </h1>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"> Data Tables </li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->





<!-- Kapal dan GT -->
<section class="content">
  <div class="container-fluid">
    <!-- =========================================================== -->



    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info" border-style: solid>

          <div class="info-box-icon">
            <h1 class="icon">
              <i class="fa fa-ship bg-info" aria-hidden="true"></i>
            </h1>
          </div>

          <div class="info-box-content">
            <h3 class="info-box-number">
              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(shipcall) as kapal FROM ARUS_BONGKAR_MUAT WHERE Tahun='2020' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  echo $arus['KAPAL'];
                  echo ' Unit';
                }
              ?>
            </h3>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <h3 class="progress-description">
              <?php 
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(shipcall) as kapal FROM ARUS_BONGKAR_MUAT WHERE Tahun='2020' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                $persen = $arus['KAPAL']/600*100;
                echo ceil ($persen);
                echo '%';
                echo ' Arus Kapal';
                echo "<br>";
                echo "<br>";
                }
               ?>
            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2020 </a>
          </div>
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-info" border-style: solid>

          <div class="info-box-icon">
            <h1 class="icon">
              <i class="fa fa-ship bg-info" aria-hidden="true"></i>
            </h1>
          </div>

          <div class="info-box-content">
            <h3 class="info-box-number">
              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(shipcall) as kapal FROM ARUS_BONGKAR_MUAT WHERE Tahun='2021' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  echo $arus['KAPAL'];
                  echo ' Unit';
                }
              ?>
            </h3>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <h3 class="progress-description">
              <?php 
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(shipcall) as kapal FROM ARUS_BONGKAR_MUAT WHERE Tahun='2021' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  $persen = $arus['KAPAL']/600*100;
                  echo ceil ($persen);
                  echo '%';
                  echo ' Arus Kapal';
                  echo "<br>";
                  echo "<br>";
                }
               ?>
            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2021 </a>
          </div>
        </div>
        <!-- /.info-box -->
      </div>

      <div class="col-md-6 col-sm-6 col-12">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>

              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(shipcall) as kapal FROM ARUS_BONGKAR_MUAT order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  echo $arus['KAPAL'];
                  echo ' Unit';
                  echo "<br>";
                  echo "<br>";
                }
              ?>

            </h3>    
          </div>
          <div class="icon">
            <!-- <i class="ion ion-ship"></i> -->
            <i class="fa fa-ship bg-info" aria-hidden="true"></i>
          </div>
          <a href="#" class="small-box-footer"> Tahun 2020 - 2021 </a>
        </div>
      </div>
      <!-- ./col -->

    </div>
    <!-- /.row -->


    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
          <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
          <div class="info-box-content text-white">
            <h3 class="info-box-number">

              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(gt) as gt FROM ARUS_BONGKAR_MUAT WHERE Tahun='2020' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  $angka_format = number_format($arus['GT'],0,",",".");
                  echo $angka_format;
                  echo ' GT';
                }
              ?>

            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(gt) as gt FROM ARUS_BONGKAR_MUAT WHERE Tahun='2020' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  $angka_format = $arus['GT']/14000000*100;
                  echo ceil($angka_format);
                  echo '%';
                  echo ' Arus Kapal';
                  echo "<br>";
                }
               ?>
            </span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2020 </a>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box bg-warning">
          <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
          <div class="info-box-content text-white">
            <h3 class="info-box-number">

              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(gt) as gt FROM ARUS_BONGKAR_MUAT WHERE Tahun='2021' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  $angka_format = number_format($arus['GT'],0,",",".");
                  echo $angka_format;
                  echo ' GT';
                }
              ?>

            </h3>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(gt) as gt FROM ARUS_BONGKAR_MUAT WHERE Tahun='2021' order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  $angka_format = $arus['GT']/14000000*100;
                  echo ceil($angka_format);
                  echo '%';
                  echo ' Arus Kapal';
                  echo "<br>";
                }
               ?>
            </span>
            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <a href="#" class="text-right text-white"> th 2021 </a>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-6 col-sm-6 col-12">
        <div class="small-box bg-warning">
          <div class="inner text-white">
            <h3>
              <?php
                include 'koneksi.php';
                $query = oci_parse($koneksi, "SELECT SUM(gt) as gt FROM ARUS_BONGKAR_MUAT order by ID asc");
                oci_execute($query);

                while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  $angka_format = number_format($arus['GT'],0,",",".");
                  echo $angka_format;
                  echo ' GT';
                  echo "<br>";
                  echo "<br>";
                }
               ?> 

            </h3>    
          </div>
          <div class="icon">
            <!-- <i class="ion ion-ship"></i> -->
            <i class="fa fa-ship bg-warning" aria-hidden="true"></i>
          </div>
          <a href="#" class="small-box-footer "> Tahun 2020 - 2021 </a>
        </div>
      </div>
      <!-- ./col -->

    </div>
    <!-- /.row -->


  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->




<!-- Main row -->
<section class="content">
  <div class="container-fluid">

<!-- ______________________________________________________________-->
    <!-- Bulanan Box -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Bulanan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Bulanan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#perbulan-import-box-bar" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-export-box-bar" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-import-export-box-bar" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="perbulan-import-box-bar"
              style="position: relative; height: 300px;">
              <canvas id="barChart_perbulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="perbulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-export-box-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_perbulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="perbulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-import-export-box-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_perbulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="perbulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Line Chart Bulanan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Bulanan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#perbulan-import-box-line" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-export-box-line" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-import-export-box-line" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="perbulan-import-box-line"
              style="position: relative; height: 300px;">
              <canvas id="lineChart_perbulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="perbulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-export-box-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_perbulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="perbulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-import-export-box-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_perbulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="perbulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>

    <!-- Bulanan Teus -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Bulanan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan TEUS Bulanan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#perbulan-import-teus-bar" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-export-teus-bar" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-import-export-teus-bar" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="perbulan-import-teus-bar"
              style="position: relative; height: 300px;">
              <canvas id="barChart_teus_perbulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_perbulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-export-teus-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_perbulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_perbulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-import-export-teus-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_perbulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_perbulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Line Chart Bulanan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Bulanan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#perbulan-import-teus-line" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-export-teus-line" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perbulan-import-export-teus-line" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="perbulan-import-teus-line"
              style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_perbulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_perbulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-export-teus-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_perbulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_perbulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="perbulan-import-export-teus-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_perbulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_perbulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>
<!-- ______________________________________________________________-->

<!-- ______________________________________________________________-->
    <!-- Triwulan Box -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Triwulan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Triwulan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#triwulan-import-box-bar" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-export-box-bar" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-import-export-box-bar" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="triwulan-import-box-bar"
              style="position: relative; height: 300px;">
              <canvas id="barChart_triwulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="triwulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-export-box-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_triwulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="triwulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-import-export-box-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_triwulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="triwulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Line Chart Triwulan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Triwulan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#triwulan-import-box-line" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-export-box-line" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-import-export-box-line" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="triwulan-import-box-line"
              style="position: relative; height: 300px;">
              <canvas id="lineChart_triwulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="triwulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-export-box-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_triwulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="triwulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-import-export-box-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_triwulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="triwulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>

    <!-- Triwulan Teus -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Triwulan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Triwulan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#triwulan-import-teus-bar" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-export-teus-bar" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-import-export-teus-bar" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="triwulan-import-teus-bar"
              style="position: relative; height: 300px;">
              <canvas id="barChart_teus_triwulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_triwulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-export-teus-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_triwulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_triwulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-import-export-teus-bar" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_triwulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_triwulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Line Chart Triwulan-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Triwulan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#triwulan-import-teus-line" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-export-teus-line" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#triwulan-import-export-teus-line" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="triwulan-import-teus-line"
              style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_triwulan_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_triwulan_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-export-teus-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_triwulan_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_triwulan_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="triwulan-import-export-teus-line" style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_triwulan_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_triwulan_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>
<!-- ______________________________________________________________-->

<!-- ______________________________________________________________-->
    <!-- Semester Box -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Semester-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Semester
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#semester-import-box" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-export-box" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-import-export-box" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="semester-import-box"
              style="position: relative; height: 300px;">
              <canvas id="barChart_semester_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="semester_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-export-box" style="position: relative; height: 300px;">
              <canvas id="barChart_semester_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="semester_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-import-export-box" style="position: relative; height: 300px;">
              <canvas id="barChart_semester_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="semester_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Line Chart Semester-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Semester
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#semester-import-box" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-export-box" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-import-export-box" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="semester-import-box"
              style="position: relative; height: 300px;">
              <canvas id="lineChart_semester_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="semester_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-export-box" style="position: relative; height: 300px;">
              <canvas id="lineChart_semester_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="semester_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-import-export-box" style="position: relative; height: 300px;">
              <canvas id="lineChart_semester_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="semester_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>

    <!-- Semester Teus -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Semester-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Semester
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#semester-import-teus" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-export-teus" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-import-export-teus" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="semester-import-teus"
              style="position: relative; height: 300px;">
              <canvas id="barChart_teus_semester_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_semester_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-export-teus" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_semester_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_semester_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-import-export-teus" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_semester_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_semester_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Line Chart Semester-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Semester
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#semester-import-teus" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-export-teus" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#semester-import-export-teus" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="semester-import-teus"
              style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_semester_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_semester_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-export-teus" style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_semester_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_semester_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="semester-import-export-teus" style="position: relative; height: 300px;">
              <canvas id="lineChart_teus_semester_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_semester_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>
<!-- ______________________________________________________________-->

<!-- ______________________________________________________________-->
    <!-- Bar Tahunan Box & Teus -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Tahunan Box-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Tahunan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pertahun-import-box" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-export-box" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-import-export-box" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="pertahun-import-box"
              style="position: relative; height: 300px;">
              <canvas id="barChart_pertahun_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="pertahun_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-export-box" style="position: relative; height: 300px;">
              <canvas id="barChart_pertahun_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="pertahun_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-import-export-box" style="position: relative; height: 300px;">
              <canvas id="barChart_pertahun_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="pertahun_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Bar Chart Tahunan Teus-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Tahunan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pertahun-import-teus" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-export-teus" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-import-export-teus" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="pertahun-import-teus"
              style="position: relative; height: 300px;">
              <canvas id="barChart_teus_pertahun_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_pertahun_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-export-teus" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_pertahun_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_pertahun_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-import-export-teus" style="position: relative; height: 300px;">
              <canvas id="barChart_teus_pertahun_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_pertahun_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>
<!-- ______________________________________________________________-->


<!-- ______________________________________________________________-->
    <!-- Pie Tahunan Box & Teus -->
    <div class="row">
      <section class="col-lg-6 connectedSortable">
        <!-- Pie Chart Tahunan Box-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan BOX Tahunan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pertahun-import-box-pie" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-export-box-pie" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-import-export-box-pie" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="pertahun-import-box-pie"
              style="position: relative; height: 300px;">
              <canvas id="pieChart_pertahun_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="pertahun_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-export-box-pie" style="position: relative; height: 300px;">
              <canvas id="pieChart_pertahun_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="pertahun_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-import-export-box-pie" style="position: relative; height: 300px;">
              <canvas id="pieChart_pertahun_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="pertahun_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>

      <section class="col-lg-6 connectedSortable">
        <!-- Pie Chart Tahunan Teus-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Laporan Teus Tahunan
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pertahun-import-teus-pie" data-toggle="tab">Import</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-export-teus-pie" data-toggle="tab">Export</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pertahun-import-export-teus-pie" data-toggle="tab">Import & Export</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="pertahun-import-teus-pie"
              style="position: relative; height: 300px;">
              <canvas id="pieChart_teus_pertahun_import" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_pertahun_import" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-export-teus-pie" style="position: relative; height: 300px;">
              <canvas id="pieChart_teus_pertahun_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_pertahun_export" ></canvas></canvas>
            </div>
            <div class="chart tab-pane" id="pertahun-import-export-teus-pie" style="position: relative; height: 300px;">
              <canvas id="pieChart_teus_pertahun_import_export" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"><canvas id="teus_pertahun_import_export" ></canvas></canvas>
            </div>
          </div>
        </div><!-- /.card-body -->
      </section>
    </div>
<!-- ______________________________________________________________-->


  </div>
</section>
<!-- /.content -->












