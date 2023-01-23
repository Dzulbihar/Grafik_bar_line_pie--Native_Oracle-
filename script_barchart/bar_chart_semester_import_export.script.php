
<script>
  $(function () {

    var areaChartCanvas = $('#semester_import_export').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Semester 1', 'Semester 2'],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          data                : 
            [
            <?php 

            include 'koneksi.php';
            $semester_import_export_2021 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Januari','Februari','Maret','April','Mei','Juni')
              ) as semester1, 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Juli','Agustus','September','Oktober','November','Desember')
              ) as semester2 from dual
              "
            );
            oci_execute($semester_import_export_2021);
            while(($arus = oci_fetch_array($semester_import_export_2021, OCI_BOTH)) != false)
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
          data                : 
            [
            <?php 

            include 'koneksi.php';
            $semester_import_export_2020 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Januari','Februari','Maret','April','Mei','Juni')
              ) as semester1, 
              (
              Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Juli','Agustus','September','Oktober','November','Desember')
              ) as semester2 from dual
              "
            );
            oci_execute($semester_import_export_2020);
            while(($arus = oci_fetch_array($semester_import_export_2020, OCI_BOTH)) != false)
            {
              echo '"' . $arus['SEMESTER1'] . '",';
              echo '"' . $arus['SEMESTER2'] . '",';
            }

            ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart_semester_import_export').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

  })
</script>

