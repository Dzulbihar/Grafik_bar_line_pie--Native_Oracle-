<?php 
  include 'linechart/database_chart.php';
 ?>


<script>
  $(function () {

    var areaChartCanvas = $('#teus_semester_import').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Semester 1', 'Semester 2'],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : 
            [
            <?php 

            include 'koneksi.php';
            $teus_semester_import_2021 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Januari','Februari','Maret','April','Mei','Juni')
              ) as semester1, 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Juli','Agustus','September','Oktober','November','Desember')
              ) as semester2 from dual
              "
            );
            oci_execute($teus_semester_import_2021);
            while(($arus = oci_fetch_array($teus_semester_import_2021, OCI_BOTH)) != false)
            {
              echo '"' . $arus['SEMESTER1'] . '",';
              echo '"' . $arus['SEMESTER2'] . '",';
            }

            ?>
            ]
        },
        {
          label               : '2020',
          backgroundColor     : 'rgba(255, 147, 1, 0.8)',
          borderColor         : 'rgba(255, 147, 1, 0.8)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :
            [
            <?php 

            include 'koneksi.php';
            $teus_semester_import_2020 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Januari','Februari','Maret','April','Mei','Juni')
              ) as semester1, 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Juli','Agustus','September','Oktober','November','Desember')
              ) as semester2 from dual
              "
            );
            oci_execute($teus_semester_import_2020);
            while(($arus = oci_fetch_array($teus_semester_import_2020, OCI_BOTH)) != false)
            {
              echo '"' . $arus['SEMESTER1'] . '",';
              echo '"' . $arus['SEMESTER2'] . '",';
            }

            ?>
            ]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart_teus_semester_import').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart_teus_semester_import = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })







  })
</script>