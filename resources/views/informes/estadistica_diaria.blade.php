@extends('layouts.layout')

@section('content')
<script src = " https://code.highcharts.com/highcharts.js " > </script>
<h1></h1>



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Estadistica diaria </h3>
                <h5>{{$inicioFormateado}}</h5>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">

                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">

                    </ol>
                </nav>
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
                        <div id="container1" style="width:100%; height:400px;"></div>

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

</div><script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>





<script type="text/javascript">
var itemsds = <?php echo json_encode($itemsds)?>;

var itemsda = <?php echo json_encode($itemsda)?>;

var sgec = <?php echo json_encode($sgec)?>;
var sgnc = <?php echo json_encode($sgnc)?>;

var scec = <?php echo json_encode($scec)?>;
var scnc = <?php echo json_encode($scnc)?>;

var inicioFormateado = <?php echo json_encode($inicioFormateado)?>;
    document.addEventListener('DOMContentLoaded', function () {





         const chart = Highcharts.chart('container1', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Solicitues y Asignaciones Diaria'
            },
    subtitle: {
        text: inicioFormateado
    },
            xAxis: {
                categories: ['Solicitudes','Asignaciones']
            },
            yAxis: {
                title: {
                    text: 'Numero Diario'
                }
            },
            series: [{
                name: 'Solicitudes',
                data: itemsds
            }, {
                name: 'Asignaciones',
                data: itemsda
            }]
        });
        const chart1 = Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Especialidad Garantias o Circuito Diaria'
    },
    subtitle: {
        text: inicioFormateado
    },

    xAxis: {
        categories: ['Circuito', 'Garantias'],
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
        data: [scec,sgec]
    }, {
        name: 'Solicitudes Normales',
        data: [scnc, sgnc ]
    }]


});

// Highcharts.chart('container2', {
//     chart: {
//         plotBackgroundColor: null,
//         plotBorderWidth: null,
//         plotShadow: false,
//         type: 'pie'
//     },
//     title: {
//         text: 'Porcentaje Solicitud Despachos Diaria'
//     },
//     subtitle: {
//         text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
//     },
//     tooltip: {
//         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
//     },
//     accessibility: {
//         point: {
//             valueSuffix: '%'
//         }
//     },
//     plotOptions: {
//         pie: {
//             allowPointSelect: true,
//             cursor: 'pointer',
//             dataLabels: {
//                 enabled: true,
//                 format: '<b>{point.name}</b>: {point.percentage:.1f} %'
//             }
//         }
//     },
//     series: [{
//         name: 'Solicitudes',
//         colorByPoint: true,
//         data: [{
//             name: nd,
//             y: 28.41,
//             sliced: true,
//             selected: true
//         }, {
//             name: 'Juzgado 56 tutelas',
//             y: 15.84
//         }, {
//             name: 'Juzgado 02 garatias',
//             y: 20.85
//         }, {
//             name: 'Juzgado penal circuito 22',
//             y: 18.67
//         }, {
//             name: 'Juzgado garantias 30',
//             y: 17.18
//         }]
//     }]
// });
    });




</script>
@endsection
