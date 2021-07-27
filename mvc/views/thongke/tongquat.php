<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
        <div class="info-box-content">
            <span class="info-box-text"><h4>Đã học</h4></span>
            <span class="info-box-number"><?= $data['list']['dahoc']['tinchi'];?><small> tín chỉ</small></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-circle-o"></i></span>
        <div class="info-box-content">
            <span class="info-box-text"><h4>Chưa học</h4></span>
            <span class="info-box-number"><?= $data['list']['chuahoc']['tinchi'];?><small> tín chỉ</small></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-times"></i></span>
        <div class="info-box-content">
            <span class="info-box-text"><h4>Chưa đạt</h4></span>
            <span class="info-box-number"><?= $data['list']['chuadat']['tinchi'];?><small> tín chỉ</small></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <!-- LINE CHART -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Biểu đồ điểm</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
            <canvas id="lineChart" style="height:250px"></canvas>
            </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <div class="col-md-4">
        <!-- LINE CHART -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Biểu đồ học phần</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
            <canvas id="pieChart" style="height:250px"></canvas>
            </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script>
    $(function () {
        var lineChartData = {
        labels  : [<?php $a = '';foreach($data['list']['diem'] as $diem)  $a.="'".$diem['hocphan']."',"; echo rtrim($a,','); ?>],
        datasets: [
            {
                label               : 'Tín chỉ',
                fillColor           : 'rgba(210, 214, 222, 0)',
                strokeColor         : 'rgba(210, 214, 222, 0)',
                pointColor          : 'rgba(210, 214, 222, 0)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data                : [<?php $a = '';foreach($data['list']['diem'] as $diem)  $a.="'".$diem['tinchi']."',"; echo rtrim($a,','); ?>]
            },
            {
                label               : 'Điểm',
                fillColor           : 'rgba(60,141,188,0.9)',
                strokeColor         : 'rgba(60,141,188,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : [<?php $a = '';foreach($data['list']['diem'] as $diem)  $a.="'".$diem['diem']."',"; echo rtrim($a,','); ?>]
            }
        ]
    }
    var lineChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = lineChartOptions
    // lineChartOptions.datasetFill = false
    lineChart.Line(lineChartData, lineChartOptions)




    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?= $data['list']['dahoc']['mon'];?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Môm đã học'
      },
      {
        value    : <?= $data['list']['chuahoc']['mon'];?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Môn chưa học'
      },
      {
        value    : <?= $data['list']['chuadat']['mon'];?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Môn chưa đạt'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

})
</script>