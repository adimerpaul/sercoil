@extends('layouts.master')
@section('grafico')
active
@endsection
@section('title')
GRÁFICOS ESTADISTICOS
@endsection
@section('content')

   <div id="grafico_1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
   <div id="grafico_2" style="min-width: 310px; height: 900px; margin: 0 auto"></div>
   <div id="grafico_3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<!-- <div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">GRÁFICOS</h3>
  </div>
  <div class="box-body">
    
  </div>
</div> -->

@endsection
@section('js')
<script src="highcharts/code/highcharts.js"></script>
<script src="highcharts/code/highcharts-3d.js"></script>
<script src="highcharts/code/modules/exporting.js"></script>
<?php 
$actual=\Carbon\Carbon::now()->format('Y');
 ?>
<script type="text/javascript">

Highcharts.chart('grafico_1', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Ventas por mes en la gestion: {{$actual}}'
    },
    subtitle: {
        text: 'Fuente: SERCOIL'
    },
    xAxis: {
        categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    },
    yAxis: {
        title: {
            text: 'Numero de ventas'
        },
        labels: {
            formatter: function () {
                return this.value + '';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 7,
                lineColor: '#666666',
                lineWidth: 3
            }
        }
    },
    series: [
    <?php 
      $ene=\App\Venta::whereMonth('FEC_VEN',1)->whereYear('FEC_VEN',$actual)->count();
      $feb=\App\Venta::whereMonth('FEC_VEN',2)->whereYear('FEC_VEN',$actual)->count();
      $mar=\App\Venta::whereMonth('FEC_VEN',3)->whereYear('FEC_VEN',$actual)->count();
      $abr=\App\Venta::whereMonth('FEC_VEN',4)->whereYear('FEC_VEN',$actual)->count();
      $may=\App\Venta::whereMonth('FEC_VEN',5)->whereYear('FEC_VEN',$actual)->count();
      $jun=\App\Venta::whereMonth('FEC_VEN',6)->whereYear('FEC_VEN',$actual)->count();
      $jul=\App\Venta::whereMonth('FEC_VEN',7)->whereYear('FEC_VEN',$actual)->count();
      $ago=\App\Venta::whereMonth('FEC_VEN',8)->whereYear('FEC_VEN',$actual)->count();
      $sep=\App\Venta::whereMonth('FEC_VEN',9)->whereYear('FEC_VEN',$actual)->count();
      $oct=\App\Venta::whereMonth('FEC_VEN',10)->whereYear('FEC_VEN',$actual)->count();
      $nov=\App\Venta::whereMonth('FEC_VEN',11)->whereYear('FEC_VEN',$actual)->count();
      $dic=\App\Venta::whereMonth('FEC_VEN',12)->whereYear('FEC_VEN',$actual)->count();
     ?>

    {
        name: 'Ventas realizadas',
        marker: {
            symbol: 'square'
        },
        data: [{{$ene}}, {{$feb}}, {{$mar}}, {{$abr}}, {{$may}}, {{$jun}}, {{$jul}}, {{$ago}}, {{$sep}}, {{$oct}}, {{$nov}}, {{$dic}}]

    }


    ]
});
    </script>
<script type="text/javascript">

Highcharts.chart('grafico_2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Venta de PRODUCTOS por unidades'
    },
    subtitle: {
        text: 'Fuente: SERCOIL'
    },
    xAxis: {
        categories: [
        <?php $productos=\App\Producto::orderBy('ID_PRO','ASC')->get(); ?>
        @foreach($productos as $producto)
        '{{$producto->NOM_PRO}}', 
        @endforeach

        ],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Venta (unidades)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' unidades vendidas'
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
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
     series: [
     {
        name: ' ',
        data: [
        <?php 
        $productos=\App\Producto::orderBy('ID_PRO','ASC')->get(); 
        ?>
        @foreach($productos as $producto)
        @if(\App\VentaCotizacion::where('ID_PRO',$producto->ID_PRO)->exists())
        <?php 
        $n_ventas=0; 
        $n_dato1=\App\VentaCotizacion::where('ID_PRO',$producto->ID_PRO)->sum('CANT_VC'); 
        $n_dato2=\App\VentaDetalle::where('ID_PRO',$producto->ID_PRO)->sum('CANT_PRO');
        $n_ventas=$n_dato1+$n_dato2; 
        ?>
        {{$n_ventas}},
        @else
        <?php  
        $n_ventas=\App\VentaDetalle::where('ID_PRO',$producto->ID_PRO)->sum('CANT_PRO');
        ?>
        {{$n_ventas}},
        @endif
        @endforeach


        ]
    }
    ]
});
    </script>
    <script type="text/javascript">


$(document).ready(function () {

    // Build the chart
    Highcharts.chart('grafico_3', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Cotizaciones mas solicitadas'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Porcentaje',
            colorByPoint: true,
            data: [
                <?php $cotizaciones=\App\Cotizacion::groupBy('TIP_COT')->get(); ?>
                @foreach($cotizaciones as $cot)
                <?php $numero=\App\Cotizacion::where('TIP_COT',$cot->TIP_COT)->count(); ?>
            {
              <?php 
              switch ($cot->TIP_COT) {
                case 'PARED':
                  $nombre='PARED DRYWALL';
                  break;
                case 'CIELO':
                  $nombre='CIELO ACUSTICO';
                  break;  
                case 'PISO':
                  $nombre='PISO FLOTANTE';
                  break;
                 case 'PERSONAL':
                  $nombre='PERSONALIZADA';
                  break; 
              }
               ?>
                name: '{{$nombre}}',
                y: {{$numero}}
            }, 
                @endforeach
            
            ]
        }]
    });
});
    </script>
@endsection