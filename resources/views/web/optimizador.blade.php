@extends('web.template.header')
@section('content')
<!-- End Featured Product -->
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
        height: 122mm;
    }
    .containerOptimizado2{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
        align-content: flex-start;
        /*outline: 1px solid green;*/
    }
    .childCss {
        background-color: lightblue;
        outline: 1px solid grey;
    }
</style>
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
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Cantidad" id="cantidad1"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Longitud" id="longitud1"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Ancho" id="ancho1"/></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Cantidad" id="cantidad2"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Longitud" id="longitud2"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Ancho" id="ancho2"/></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Cantidad" id="cantidad3"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Longitud" id="longitud3"/></td>
                                <td><input class="form-control form-control-sm" type="text" placeholder="Ancho" id="ancho3"/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="d-grid">
                            <button class="btn btn-success" id="btn" type="button">Optimizar</button>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <h5>2440mm x 2150mm  </h5>
                    <div class="containerOptimizado" id="containerOpt">
                    <span class="containerOptimizado2" id="span">
{{--                        <div class="child"></div>--}}
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
    $('#longitud1').val(150)
    $('#ancho1').val(150)
    $('#btn').click(function(){
        // if ($('#cantidad1').val() == '' || $('#longitud1').val() == '' || $('#ancho1').val() == '') {
        //     alert('Llene todos los campos')
        //     return false
        // }
        if ( $('#longitud1').val() < 150 || $('#ancho1').val() < 150) {
            alert('La longitud y el ancho no pueden ser menores a 150mm')
            return false
        }
        $('#span').html('')
        colocar1()
    })
    colocar1()
    function colocar1() {
        for (let i = 0; i < $('#cantidad1').val(); i++) {
            let lon1 = $('#longitud1').val()/10
            let anc1 = $('#ancho1').val()/10
            spanAdd(lon1+'mm',anc1+'mm')
        }
    }
    function spanAdd(w,h) {
        if ($('#span').height() > 461) {
            $('#span2').append($('<div>').addClass('childCss').css('width',w).css('height',h));
        }else{
            todo = $('#span').html();
            $('#span').append($('<div>').addClass('childCss').css('width',w).css('height',h));
            if ($('#span').height() > 461) {
                $('#span2').append($('<div>').addClass('childCss').css('width',w).css('height',h));
                $('#span').html(todo)
            }
        }
        // console.log($('#containerOpt').height())
    }
};
</script>
@endsection
