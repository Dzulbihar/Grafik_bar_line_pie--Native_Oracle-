<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- _______________________________________________________________________ -->

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- Page specific script -->

<!-- _______________________________________________________________________ -->
<!-- _______________________________________________________________________ -->
<!-- _________________________ BAR CHART BOX ________________________________ -->
<?php 
    include 'script_barchart/bar_chart_pertahun_import.script.php';
    include 'script_barchart/bar_chart_pertahun_export.script.php';
    include 'script_barchart/bar_chart_pertahun_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_semester_import.script.php';
    include 'script_barchart/bar_chart_semester_export.script.php';
    include 'script_barchart/bar_chart_semester_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_triwulan_import.script.php';
    include 'script_barchart/bar_chart_triwulan_export.script.php';
    include 'script_barchart/bar_chart_triwulan_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_perbulan_import.script.php';
    include 'script_barchart/bar_chart_perbulan_export.script.php';
    include 'script_barchart/bar_chart_perbulan_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_ships_call.script.php';
    include 'script_barchart/bar_chart_gt.script.php';
/////////////////////////////////////////////////////////////////////////////
?>

<!-- _______________________________________________________________________ -->
<!-- _______________________________________________________________________ -->
<!-- _________________________ LINE CHART BOX ________________________________ -->
<?php 
    include 'script_linechart/line_chart_semester_import.script.php';
    include 'script_linechart/line_chart_semester_export.script.php';
    include 'script_linechart/line_chart_semester_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_linechart/line_chart_triwulan_import.script.php';
    include 'script_linechart/line_chart_triwulan_export.script.php';
    include 'script_linechart/line_chart_triwulan_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_linechart/line_chart_perbulan_import.script.php';
    include 'script_linechart/line_chart_perbulan_export.script.php';
    include 'script_linechart/line_chart_perbulan_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_linechart/line_chart_ships_call.script.php';
    include 'script_linechart/line_chart_gt.script.php';
/////////////////////////////////////////////////////////////////////////////
 ?>

<!-- _______________________________________________________________________ -->
<!-- _______________________________________________________________________ -->
<!-- _________________________ BAR CHART TEUS ________________________________ -->
<?php 
    include 'script_barchart/bar_chart_teus_pertahun_import.script.php';
    include 'script_barchart/bar_chart_teus_pertahun_export.script.php';
    include 'script_barchart/bar_chart_teus_pertahun_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_teus_semester_import.script.php';
    include 'script_barchart/bar_chart_teus_semester_export.script.php';
    include 'script_barchart/bar_chart_teus_semester_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_teus_triwulan_import.script.php';
    include 'script_barchart/bar_chart_teus_triwulan_export.script.php';
    include 'script_barchart/bar_chart_teus_triwulan_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_barchart/bar_chart_teus_perbulan_import.script.php';
    include 'script_barchart/bar_chart_teus_perbulan_export.script.php';
    include 'script_barchart/bar_chart_teus_perbulan_import_export.script.php';
?>

<!-- _______________________________________________________________________ -->
<!-- _______________________________________________________________________ -->
<!-- _________________________ LINE CHART BOX ________________________________ -->
<?php 
    include 'script_linechart/line_chart_teus_semester_import.script.php';
    include 'script_linechart/line_chart_teus_semester_export.script.php';
    include 'script_linechart/line_chart_teus_semester_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_linechart/line_chart_teus_triwulan_import.script.php';
    include 'script_linechart/line_chart_teus_triwulan_export.script.php';
    include 'script_linechart/line_chart_teus_triwulan_import_export.script.php';
/////////////////////////////////////////////////////////////////////////////
    include 'script_linechart/line_chart_teus_perbulan_import.script.php';
    include 'script_linechart/line_chart_teus_perbulan_export.script.php';
    include 'script_linechart/line_chart_teus_perbulan_import_export.script.php';
?>

<!-- ___________________________________________________________________- -->

<!-- FLOT CHARTS -->
<script src="plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN  -->
<script src="plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="plugins/flot/plugins/jquery.flot.pie.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
        cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef',
        lines : {
          fill: true //Converts the line chart to area chart
        },
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Series2',
        data : 30,
        color: '#3c8dbc'
      },
      {
        label: 'Series3',
        data : 20,
        color: '#0073b7'
      },
      {
        label: 'Series4',
        data : 50,
        color: '#00c0ef'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>



<!-- ______________________________________________________________________- -->

<!-- jQuery Knob -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script>




<!-- ________________________________________________________________ -->



<!-- uPlot -->
<script src="plugins/uplot/uPlot.iife.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    /* uPlot
     * -------
     * Here we will create a few charts using uPlot
     */

    function getSize(elementId) {
      return {
        width: document.getElementById(elementId).offsetWidth,
        height: document.getElementById(elementId).offsetHeight,
      }
    }

    let data = [
      [0, 1, 2, 3, 4, 5, 6],
      [28, 48, 40, 19, 86, 27, 90],
      [65, 59, 80, 81, 56, 55, 40]
    ];

    //--------------
    //- AREA CHART -
    //--------------

    const optsAreaChart = {
      ... getSize('areaChart'),
      scales: {
        x: {
          time: false,
        },
        y: {
          range: [0, 100],
        },
      },
      series: [
        {},
        {
          fill: 'rgba(60,141,188,0.7)',
          stroke: 'rgba(60,141,188,1)',
        },
        {
          stroke: '#c1c7d1',
          fill: 'rgba(210, 214, 222, .7)',
        },
      ],
    };

    let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

    const optsLineChart = {
      ... getSize('lineChart'),
      scales: {
        x: {
          time: false,
        },
        y: {
          range: [0, 100],
        },
      },
      series: [
        {},
        {
          fill: 'transparent',
          width: 5,
          stroke: 'rgba(60,141,188,1)',
        },
        {
          stroke: '#c1c7d1',
          width: 5,
          fill: 'transparent',
        },
      ],
    };

    let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

    window.addEventListener("resize", e => {
      areaChart.setSize(getSize('areaChart'));
      lineChart.setSize(getSize('lineChart'));
    });
  })
</script>

<!-- __________________________________________________________________ -->

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- __________________________________________________________________ -->

<!-- jsGrid -->
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married" }
        ]
    });
  });
</script>

<!-- __________________________________________________________________ -->


<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<!-- __________________________________________________________________ -->


<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>




<!-- __________________________________________________________- -->
<!-- __________________________________________________________- -->
<!-- __________________________________________________________- -->
<!-- _______________ PIE CHART __________________________- -->

<?php 

    include 'script_piechart/pie_chart_box_pertahun_import.script.php';
    include 'script_piechart/pie_chart_box_pertahun_export.script.php';
    include 'script_piechart/pie_chart_box_pertahun_import_export.script.php';

    include 'script_piechart/pie_chart_teus_pertahun_import.script.php';
    include 'script_piechart/pie_chart_teus_pertahun_export.script.php';
    include 'script_piechart/pie_chart_teus_pertahun_import_export.script.php';

 ?>



