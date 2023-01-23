
<script>
  $(function () {

    var areaChartCanvas = $('#pertahun_export').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['pertahun'],
      datasets: [
        {
          label               : '2021',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          data                : 
            [
            <?php 

            include 'koneksi.php';
            $pertahun_export_2021 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
              and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
              ) as pertahun from dual
              "
            );
            oci_execute($pertahun_export_2021);
            while(($arus = oci_fetch_array($pertahun_export_2021, OCI_BOTH)) != false)
            {
              echo '"' . $arus['PERTAHUN'] . '",';
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
            $pertahun_export_2020 = oci_parse($koneksi,     
              " 
              SELECT 
              (
              Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
              and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
              ) as pertahun from dual
              "
            );
            oci_execute($pertahun_export_2020);
            while(($arus = oci_fetch_array($pertahun_export_2020, OCI_BOTH)) != false)
            {
              echo '"' . $arus['PERTAHUN'] . '",';
            }

            ?>
            ]
        },
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart_pertahun_export').get(0).getContext('2d')
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

