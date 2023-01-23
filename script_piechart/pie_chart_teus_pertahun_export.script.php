<!-- Page specific script -->
<script>
  $(function () {

    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#teus_pertahun_export').get(0).getContext('2d')
    var donutData        = {
      labels: 
      [
          '2020',
          '2021',
      ],
      datasets: [
        {
          data: 
          [

            <?php 

              include 'koneksi.php';
              $query = oci_parse($koneksi,     
                " 
                SELECT 
                (
                Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
                and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                ) as pertahun2020,
                (
                Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
                and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                ) as pertahun2021 from dual
                "
              );
              oci_execute($query);
              while(($arus = oci_fetch_array($query, OCI_BOTH)) != false)
              {
                echo '"' . $arus['PERTAHUN2021'] . '",';
                echo '"' . $arus['PERTAHUN2020'] . '",';
              }

            ?>

          ],

          backgroundColor : ['rgba(255, 147, 1, 0.8)', 'rgba(60,141,188,0.9)'],
        }
      ]
    }

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart_teus_pertahun_export').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

  })
</script>