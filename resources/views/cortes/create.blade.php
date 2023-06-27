@extends('layouts.master')
@section('corte')
    active
@endsection
@section('title')
    OPTIMIZA | CORTES
@endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Corte Registrados</h3>
        </div>
        <div class="box-body">
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
                </div>
            </div>
            @include('web.template.divCorte')
{{--            <div class="table-responsive">--}}
{{--                <table id="datatable" class="table table-bordered table-striped table-hover">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>#</th>--}}
{{--                        <th>CLIENTE</th>--}}
{{--                        <th>TOTAL</th>--}}
{{--                        <th>FECHA</th>--}}
{{--                        <th>ACCIONES</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($cortes as $numero=>$corte)--}}
{{--                        <tr>--}}
{{--                            <td>{{$numero+1}}</td>--}}
{{--                            <td>{{$corte->NOM_CLI}}</td>--}}
{{--                            <td>{{$corte->PAT_CLI}}</td>--}}
{{--                            <td>{{$corte->MAT_CLI}}</td>--}}
{{--                            <td>{{$corte->CI_CLI}}</td>--}}
{{--                            <td>{{$corte->EXP_CLI}}</td>--}}
{{--                            <td>{{$corte->FEC_NAC}}</td>--}}
{{--                            <td>{{$corte->DIR_CLI}}</td>--}}
{{--                            <td>{{$corte->TEL_CLI}}</td>--}}
{{--                            <td>{{$corte->EMAIL_CLI}}</td>--}}

{{--                            <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalUpdate_{{$corte->ID_CLI}}"><i class="fa fa-pencil"></i></button></td>--}}
{{--                        </tr>--}}
{{--                        <!--INICIO DE MODAL UPDATE-->--}}
{{--                        <div class="modal fade scroller" id="modalUpdate_{{$corte->ID_CLI}}" tabindex="-1" role="dialog">--}}
{{--                            <div class="modal-dialog modal-lg" role="document">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <!-- /modal-header -->--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>--}}
{{--                                        <h4 class="modal-title">EDITAR CLIENTE</h4>--}}
{{--                                    </div>--}}

{{--                                    <!-- /modal-body -->--}}
{{--                                    <div class="box-body">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <form method="POST" action="{{route('corte.update')}}" parsley-validate novalidate>--}}
{{--                                                {{csrf_field()}}--}}
{{--                                                <input type="hidden" name="id_cli" value="{{$corte->ID_CLI}}">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">CEDULA DE IDENTIDAD</label>--}}
{{--                                                            <input type="text" class="form-control" name="ci_cli2" id="ci_cli2" value="{{$corte->CI_CLI}}" required>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">EXPEDIDO:</label>--}}
{{--                                                            <select class="form-control field" id="exp_cli" name="exp_cli" value="{{$corte->EXP_CLI}}">--}}
{{--                                                                <option style="color: #c4bfbf;" disabled="" selected="" value="{{$corte->EXP_CLI}}">{{$corte->EXP_CLI}}</option>--}}
{{--                                                                <option value="LP">LP</option>--}}
{{--                                                                <option value="CBA">CBA</option>--}}
{{--                                                                <option value="SCZ">SCZ</option>--}}
{{--                                                                <option value="BNI">BNI</option>--}}
{{--                                                                <option value="CHQ">CHQ</option>--}}
{{--                                                                <option value="ORU">ORU</option>--}}
{{--                                                                <option value="PND">PND</option>--}}
{{--                                                                <option value="PSI">PSI</option>--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">NOMBRE</label>--}}
{{--                                                            <input type="text" class="form-control field" name="nom_cli" id="nom_cli" value="{{$corte->NOM_CLI}}" required onkeyup="may(this);">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">APELLIDO PATERNO</label>--}}
{{--                                                            <input type="text" class="form-control field" name="pat_cli" id="pat_cli" value="{{$corte->PAT_CLI}}" required onkeyup="may(this);">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">APELLIDO MATERNO</label>--}}
{{--                                                            <input type="text" class="form-control field" name="mat_cli" id="mat_cli" value="{{$corte->MAT_CLI}}"required onkeyup="may(this);">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">FECHA DE NACIMIENTO</label>--}}
{{--                                                            <input type="date" class="form-control field" name="fec_nac" id="fec_nac" value="{{$corte->FEC_NAC}}"required >--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">DIRECCION</label>--}}
{{--                                                            <input type="text" class="form-control field" name="dir_cli" id="dir_cli" value="{{$corte->DIR_CLI}}"required onkeyup="may(this);">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">TELEFONO</label>--}}
{{--                                                            <input type="text" class="form-control field" name="tel_cli" id="tel_cli" value="{{$corte->TEL_CLI}}"required onkeyup="may(this);">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="exampleInputEmail1">CORREO ELECTRONICO</label>--}}
{{--                                                            <input type="text" class="form-control field" name="email_cli" id="email_cli" value="{{$corte->EMAIL_CLI}}" >--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /.box-footer -->--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> Actualizar</button>--}}
{{--                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>--}}
{{--                                    </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--FIN DE MODAL UPDATE-->--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--            </div>--}}

        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $('#permisos').select2({
            width: "100%",
            theme: "material"
        });
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection
