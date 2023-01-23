
<script>
  $(function () {

    var areaChartCanvas = $('#teus_perbulan_import').get(0).getContext('2d')
    var areaChartData_teus_perbulan_import = {
      labels  : [
          <?php 
            include 'koneksi.php';
            $teus_Bulan_perbulan_export = oci_parse($koneksi,     
              " 
              SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($teus_Bulan_perbulan_export);

            while (($arus = oci_fetch_array($teus_Bulan_perbulan_export, OCI_BOTH)) != false)
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
            $teus_perbulan_import_2021 = oci_parse($koneksi,     
              " 
              SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($teus_perbulan_import_2021);
            while(($arus = oci_fetch_array($teus_perbulan_import_2021, OCI_BOTH)) != false)
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
            $teus_perbulan_import_2020 = oci_parse($koneksi,     
              " 
              SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc
              "
            );
            oci_execute($teus_perbulan_import_2020);
            while(($arus = oci_fetch_array($teus_perbulan_import_2020, OCI_BOTH)) != false)
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
    var barChart_Canvas_teus_perbulan_import = $('#barChart_teus_perbulan_import').get(0).getContext('2d')
    var barChart_Data_teus_perbulan_import = $.extend(true, {}, areaChartData_teus_perbulan_import)
    var temp0 = areaChartData_teus_perbulan_import.datasets[0]
    var temp1 = areaChartData_teus_perbulan_import.datasets[1]
    barChart_Data_teus_perbulan_import.datasets[0] = temp1
    barChart_Data_teus_perbulan_import.datasets[1] = temp0

    var barChart_Options_teus_perbulan_import = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart_teus_perbulan_import = new Chart(barChart_Canvas_teus_perbulan_import, {
      type: 'bar',
      data: barChart_Data_teus_perbulan_import,
      options: barChart_Options_teus_perbulan_import
    })

  })
</script>