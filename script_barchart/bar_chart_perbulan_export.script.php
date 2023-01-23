<script>
  $(function () {

    var areaChartCanvas = $('#perbulan_export').get(0).getContext('2d')
    var areaChartData_perbulan_export = {
      labels  : [
          <?php 
            include 'koneksi.php';
            $Bulan_perbulan_import = oci_parse($koneksi,     
              " 
              SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($Bulan_perbulan_import);

            while (($arus = oci_fetch_array($Bulan_perbulan_import, OCI_BOTH)) != false)
              { echo '"' . $arus['BULAN'] . '",';}
          ?>
      ],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',

          data                : 
            [
            <?php 

            include 'koneksi.php';
            $perbulan_export_2021 = oci_parse($koneksi,     
              " 
              SELECT (ef20+ef40+ef45+ee20+ee40+ee45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($perbulan_export_2021);
            while(($arus = oci_fetch_array($perbulan_export_2021, OCI_BOTH)) != false)
            {
              echo '"' . $arus['TEUS'] . '",';
            }

            ?>
            ]
        },
        {
          label               : '2020',
          backgroundColor     : 'rgba(255, 147, 1, 0.8)',

          data                :
            [
            <?php 

            include 'koneksi.php';
            $perbulan_export_2020 = oci_parse($koneksi,     
              " 
              SELECT (ef20+ef40+ef45+ee20+ee40+ee45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($perbulan_export_2020);
            while(($arus = oci_fetch_array($perbulan_export_2020, OCI_BOTH)) != false)
            {
              echo '"' . $arus['TEUS'] . '",';
            }

            ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -  - CHART Ships Call -
    //-------------
    var barChart_Canvas_perbulan_export = $('#barChart_perbulan_export').get(0).getContext('2d')
    var barChart_Data_perbulan_export = $.extend(true, {}, areaChartData_perbulan_export)
    var temp0 = areaChartData_perbulan_export.datasets[0]
    var temp1 = areaChartData_perbulan_export.datasets[1]
    barChart_Data_perbulan_export.datasets[0] = temp1
    barChart_Data_perbulan_export.datasets[1] = temp0

    var barChart_Options_perbulan_export = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart_perbulan_export = new Chart(barChart_Canvas_perbulan_export, {
      type: 'bar',
      data: barChart_Data_perbulan_export,
      options: barChart_Options_perbulan_export
    })

  })
</script>