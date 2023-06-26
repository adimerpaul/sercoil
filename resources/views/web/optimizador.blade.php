@extends('web.template.header')
@section('content')
<!-- End Featured Product -->
<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>OPTIMIZADOR</h2>
            <p>DE CORTES</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cantidad de piezas</th>
                                <th scope="col">Longitud mm</th>
                                <th scope="col">Ancho mm</th>
                                <th scope="col">Color</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Cantidad" id="cantidad1"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Longitud" id="longitud1"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Ancho" id="ancho1"/></td>
                                <td><span style="background: #E91E63;color:#E91E63">#E91E63</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Cantidad" id="cantidad2"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Longitud" id="longitud2"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Ancho" id="ancho2"/></td>
                                <td><span style="background: #2196F3;color:#2196F3">#2196F3</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Cantidad" id="cantidad3"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Longitud" id="longitud3"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Ancho" id="ancho3"/></td>
                                <td><span style="background: #4CAF50;color:#4CAF50">#4CAF50</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="d-grid">
                            <button class="btn btn-success" id="btn" type="button">Optimizar</button>
                        </div>
{{--                        <div class="d-grid">--}}
{{--                            <button class="btn btn-info" id="btnImprimir" id="btnImprimir">Imprimir</button>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="pt-2" id="divPrint">
                    <style>
                        *{
                            margin: 0;
                            padding: 0;
                        }
                        .containerOptimizado {
                            display: flex;
                            flex-direction: row;
                            flex-wrap: wrap;
                            justify-content: flex-start;
                            align-items: flex-start;
                            align-content: flex-start;
                            outline: 1px solid grey;
                            width: 244mm;
                            height: 215mm;
                        }
                        .containerOptimizadoSpan1{
                            display: flex;
                            flex-direction: row;
                            flex-wrap: wrap;
                            justify-content: flex-start;
                            align-items: flex-start;
                            align-content: flex-start;
                            /*outline: 1px solid green;*/
                        }
                        .containerOptimizadoSpan2{
                            display: flex;
                            flex-direction: row;
                            flex-wrap: wrap;
                            justify-content: flex-start;
                            align-items: flex-start;
                            align-content: flex-start;
                            /*outline: 1px solid green;*/
                        }
                        .containerOptimizadoSpan3{
                            display: flex;
                            flex-direction: row;
                            flex-wrap: wrap;
                            justify-content: flex-start;
                            align-items: flex-start;
                            align-content: flex-start;
                            /*outline: 1px solid green;*/
                        }
                        .childCss {
                            /*background-color: lightblue;*/
                            outline: 1px solid grey;
                        }
                        @media print{
                            div.saltopagina{
                                display:block;
                                page-break-before:always;
                            }
                        }
                    </style>
                    <h5>2440mm x 2150mm  </h5>
                    <div class="containerOptimizado" id="containerOpt1">
                        <span class="containerOptimizadoSpan1" id="span1">
                        </span>
                    </div>
                    <div class="saltopagina"></div>

                    <div class="containerOptimizado" id="containerOpt2">
                        <span class="containerOptimizadoSpan1" id="span2">
                        </span>
                    </div>
                    <div class="saltopagina"></div>

                    <div class="containerOptimizado" id="containerOpt3">
                        <span class="containerOptimizadoSpan1" id="span3">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
window.onload = function() {
    $('#cantidad1').val(10)
    $('#longitud1').val(250)
    $('#ancho1').val(250)
    $('#cantidad2').val(0)
    $('#longitud2').val(0)
    $('#ancho2').val(0)
    $('#cantidad3').val(0)
    $('#longitud3').val(0)
    $('#ancho3').val(0)
    $('#btnImprimir').click(function (){
        console.log('imprimir')
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("#divPrint").printArea( options );
    })

    function ocultarDiv() {
        $('#containerOpt1').hide()
        $('#containerOpt2').hide()
        $('#containerOpt3').hide()
    }

    ocultarDiv();
    $('#btn').click(function(){
        if ($('#cantidad1').val() == '' || $('#longitud1').val() == '' || $('#ancho1').val() == '') {
            alert('Llene los campos de la primera fila')
            return false
        }
        if ( $('#longitud1').val() < 150 || $('#ancho1').val() < 150 || $('#longitud1').val() > 2440 || $('#ancho1').val() > 2150) {
            alert('La longitud y el ancho no pueden ser menores a 150mm ni mayores a 2440mm y 2150mm respectivamente')
            return false
        }
        $('#span1').html('')
        $('#span2').html('')
        $('#span3').html('')
        ocultarDiv()
        colocar1()
    })
    colocar1()
    function colocar1() {
        let arrayPrincipal = []
        if($('#cantidad1').val() != '' && $('#longitud1').val() != '' && $('#ancho1').val() != ''){
            for (let i = 0; i < $('#cantidad1').val(); i++) {
                let lon1 = $('#longitud1').val()/10
                let anc1 = $('#ancho1').val()/10
                arrayPrincipal.push({lon:lon1,anc:anc1,color:'#E91E63'})
            }
        }
        if($('#cantidad2').val() != '' && $('#longitud2').val() != '' && $('#ancho2').val() != ''){
            for (let i = 0; i < $('#cantidad2').val(); i++) {
                let lon2 = $('#longitud2').val()/10
                let anc2 = $('#ancho2').val()/10
                arrayPrincipal.push({lon:lon2,anc:anc2,color:'#2196F3'})
            }
        }
        if($('#cantidad3').val() != '' && $('#longitud3').val() != '' && $('#ancho3').val() != ''){
            for (let i = 0; i < $('#cantidad3').val(); i++) {
                let lon3 = $('#longitud3').val()/10
                let anc3 = $('#ancho3').val()/10
                arrayPrincipal.push({lon:lon3,anc:anc3,color:'#4CAF50'})
            }
        }
        arrayPrincipal = ordenarArray(arrayPrincipal)
        for(let i = 0; i < arrayPrincipal.length; i++){
            let w = arrayPrincipal[i].lon+'mm'
            let h = arrayPrincipal[i].anc+'mm'
            spanAdd(w,h,arrayPrincipal[i].color)
        }
    }
    function ordenarArray(array){
        let arrayOrdenado = array.sort(function (a, b) {
            return (b.lon * b.anc) - (a.lon * a.anc);
        });
        return arrayOrdenado
    }
    function spanAdd(w,h,color) {
        let todo1 = $('#span1').html();
        spanAddId(w,h,color,'1')
        $('#containerOpt1').show()
        if ($('#span1').height() > 813) {
            $('#span1').html(todo1)
            let todo2 = $('#span2').html();
            spanAddId(w,h,color,'2')
            $('#containerOpt2').show()
            if ($('#span2').height() > 813) {
                $('#span2').html(todo2)
                let todo3 = $('#span3').html();
                spanAddId(w,h,color,'3')
                $('#containerOpt3').show()
                if ($('#span3').height() > 813) {
                    $('#span3').html(todo3)
                    alert('No se puede optimizar')
                }
            }
        }
    }
    function spanAddId(w,h,color,id) {
        let w10 = parseInt(w.replace('mm',''))*10
        let h10 = parseInt(h.replace('mm',''))*10
        $(`#span${id}`).append($('<div>')
            .addClass('childCss')
            .css('width',w)
            .css('height',h)
            .css('background-color',color)
            .css('font-size','10px')
            .css('font-weight','bold')
            .css('text-align','center')
            .css('display','flex')
            .css('justify-content','center')
            .css('align-items','center')
            .css('color','#fff')
            .html(`<span class="spanChildCss">${w10}mm x ${h10}mm</span>`)
        );
    }
};
</script>
@endsection
