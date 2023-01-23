<?php 

  include 'linechart/database_chart.php';

 ?>


<script>
  $(function () {

    var areaChartCanvas = $('#teus_perbulan_export').get(0).getContext('2d')

    var areaChartData = {
      labels  : [
          <?php 
            include 'koneksi.php';
            $teus_Bulan_perbulan_import = oci_parse($koneksi,     
              " 
              SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($teus_Bulan_perbulan_import);

            while (($arus = oci_fetch_array($teus_Bulan_perbulan_import, OCI_BOTH)) != false)
              { echo '"' . $arus['BULAN'] . '",';}
          ?>
      ],
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
            $teus_perbulan_export_2021 = oci_parse($koneksi,     
              " 
              SELECT ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($teus_perbulan_export_2021);
            while(($arus = oci_fetch_array($teus_perbulan_export_2021, OCI_BOTH)) != false)
            {
              echo '"' . $arus['TEUS'] . '",';
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
            $teus_perbulan_export_2020 = oci_parse($koneksi,     
              " 
              SELECT ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($teus_perbulan_export_2020);
            while(($arus = oci_fetch_array($teus_perbulan_export_2020, OCI_BOTH)) != false)
            {
              echo '"' . $arus['TEUS'] . '",';
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
    var lineChartCanvas = $('#lineChart_teus_perbulan_export').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart_teus_perbulan_export = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })







  })
</script>