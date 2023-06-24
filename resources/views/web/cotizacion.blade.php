@extends('web.template.header')
@section('content')
    <!-- End Featured Product -->

    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>cotizar</h2>
                <p>COTIZACIONES</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div  class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group col-md-3">
                                <label>BASE:</label>
                                <input type="number" name="base" class="form-control" id="base" />
                            </div>
                            <div class="col form-group col-md-3">
                                <label>ALTURA:</label>
                                <input type="number" class="form-control" name="altura" id="altura"   />
                            </div>
                            <div class="col form-group col-md-3">
                                <label>TIPO DE COTIZACIÓN:</label>
                                <select class="form-control" name="tipo" id="tipo">
                                    <option selected="" value="PARED">PARED DRYWALL</option>
                                    <option value="CIELO">CIELO ACUSTICO</option>
                                    <option value="PISO">PISO FLOTANTE</option>
                                    <option value="PERSONALIZADA">PERSONALIZADA</option>
                                </select>
                            </div>
                            <div class="col form-group col-md-3">
                                <label> </label>
                                <br>
                                <button class="get-started-btn" type="button" onclick="calcular();"><i class="fa fa-search"></i> COTIZAR</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                        </div>
                        <form action="{{route('web.envia')}}" method="POST" id="form_envia">
                            <div class="col-md-12" id="div_resultado" style="font-size: 0.9em;"></div>
                        </form>
                        <div id="div_msg" class="col-md-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
