@extends('layouts.layout')

@section('content')
<script src = " https://code.highcharts.com/highcharts.js " > </script>
<h1></h1>



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Estadistica Semanal </h3>
                <h5>{{$m}} - {{$f}}</h5>
            </div>

        </div>

    </div>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                        <div id="container3" style="width:100%; height:400px;"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">

                        <div class="divider">

                        </div>
                        <div id="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div id="container2" style="width:100%; height:400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>




<script type="text/javascript">
// PRIMER GRAFICO
var sl = <?php echo json_encode($sl)?>;
var sm = <?php echo json_encode($sm)?>;
var sw = <?php echo json_encode($sw)?>;
var st = <?php echo json_encode($st)?>;
var sf = <?php echo json_encode($sf)?>;

var al = <?php echo json_encode($al)?>;
var am = <?php echo json_encode($am)?>;
var aw = <?php echo json_encode($aw)?>;
var at = <?php echo json_encode($at)?>;
var af = <?php echo json_encode($af)?>;
// SEGUNDO GRAFICO
var sel = <?php echo json_encode($sel)?>;
var snl = <?php echo json_encode($snl)?>;
var sgl = <?php echo json_encode($sgl)?>;
var scl = <?php echo json_encode($scl)?>;

var sem = <?php echo json_encode($sem)?>;
var snm = <?php echo json_encode($snm)?>;
var sgm = <?php echo json_encode($sgm)?>;
var scm = <?php echo json_encode($scm)?>;

var sew = <?php echo json_encode($sew)?>;
var snw = <?php echo json_encode($snw)?>;
var sgw = <?php echo json_encode($sgw)?>;
var scw = <?php echo json_encode($scw)?>;

var set = <?php echo json_encode($set)?>;
var snt = <?php echo json_encode($snt)?>;
var sgt = <?php echo json_encode($sgt)?>;
var sct = <?php echo json_encode($sct)?>;

var sef = <?php echo json_encode($sef)?>;
var snf = <?php echo json_encode($snf)?>;
var sgf = <?php echo json_encode($sgf)?>;
var scf = <?php echo json_encode($scf)?>;


    document.addEventListener('DOMContentLoaded', function () {




        Highcharts.chart('container3', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Solicitud Y Asignacion Semanal'
    },
    xAxis: {
        categories: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,

        labels: {
            overflow: 'justify'
        }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Solicitud',
        data: [sl, sm, sw, st, sf]
    }, {
        name: 'Asignacion',
        data: [al, am,aw , at, af]
    }]
});
        const chart1 = Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Especialidad Garantias o Circuito Semanal'
    },

    xAxis: {
        categories: ['Lunes', 'Martes','Miercoles','Jueves','Viernes'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,

        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' solicitudes'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Solicitudes de Emergencia',
        data: [sel, sem, sew, set, sef ]
    }, {
        name: 'Solicitudes Normales',
        data: [snl, snm, snw, snt , snf]
    }, {
        name: 'Solicitudes Circuito',
        data: [scl, scm, scw, sct , scf]
    }, {
        name: 'Solicitudes Garantias',
        data: [sgl, sgm, sgw, sgt, sgf]
    }]


});

Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Porcentaje Solicitud Despachos Semanal'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Solicitudes',
        colorByPoint: true,
        data: [{
            name: 'Juzgado penal circuito 56',
            y: 28.41,
            sliced: true,
            selected: true
        }, {
            name: 'Juzgado 56 tutelas',
            y: 15.84
        }, {
            name: 'Juzgado 02 garatias',
            y: 20.85
        }, {
            name: 'Juzgado penal circuito 22',
            y: 18.67
        }, {
            name: 'Juzgado garantias 30',
            y: 17.18
        }]
    }]
});
    });




</script>
@endsection
