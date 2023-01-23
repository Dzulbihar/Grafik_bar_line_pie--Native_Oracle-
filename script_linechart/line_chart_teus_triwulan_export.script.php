<?php 
  include 'linechart/database_chart.php';
 ?>


<script>
  $(function () {

    var areaChartCanvas = $('#teus_triwulan_export').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'],
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
            $teus_triwulan_export_2021 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Januari','Februari','Maret')
              ) as triwulan1, 
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('April','Mei','Juni')
              ) as triwulan2,
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Juli','Agustus','September')
              ) as triwulan3,
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Oktober','November','Desember')
              ) as triwulan4 from dual
              "
            );
            oci_execute($teus_triwulan_export_2021);
            while(($arus = oci_fetch_array($teus_triwulan_export_2021, OCI_BOTH)) != false)
            {
              echo '"' . $arus['TRIWULAN1'] . '",';
              echo '"' . $arus['TRIWULAN2'] . '",';
              echo '"' . $arus['TRIWULAN3'] . '",';
              echo '"' . $arus['TRIWULAN4'] . '",';
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
            $teus_triwulan_export_2020 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Januari','Februari','Maret')
              ) as triwulan1, 
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('April','Mei','Juni')
              ) as triwulan2,
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Juli','Agustus','September')
              ) as triwulan3,
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Oktober','November','Desember')
              ) as triwulan4 from dual
              "
            );
            oci_execute($teus_triwulan_export_2020);
            while(($arus = oci_fetch_array($teus_triwulan_export_2020, OCI_BOTH)) != false)
            {
              echo '"' . $arus['TRIWULAN1'] . '",';
              echo '"' . $arus['TRIWULAN2'] . '",';
              echo '"' . $arus['TRIWULAN3'] . '",';
              echo '"' . $arus['TRIWULAN4'] . '",';
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
    var lineChartCanvas = $('#lineChart_teus_triwulan_export').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart_teus_triwulan_export = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })







  })
</script>