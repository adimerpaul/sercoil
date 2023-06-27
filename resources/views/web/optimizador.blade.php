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
                    </div>
                </div>
                <button class="btn btn-info" id="btnImprimir">Imprimir</button>
                @include('web.template.divCorte')
            </div>
        </div>
    </div>
</section>
@include('web.template.jsCorte')
@endsection
