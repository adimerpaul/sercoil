<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROZAZA</title>
    <meta content="PROZAZA" name="descriptison">
    <meta content="PROZAZA" name="keywords">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="web/assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/assets1/css/templatemo.css">
    <link rel="stylesheet" href="web/assets1/css/custom.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="web/assets1/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="web/assets/css/style.css" rel="stylesheet">

</head>
<body>
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            <img src="{{url('img/logo.jpg')}}" alt="" style="height:80px; width: auto;">
            <h1 class="logo mr-auto"><a style="text-decoration: none!important;font-size: 26px!important;color: #222222ed;font-family: 'Roboto', sans-serif;font-weight: bold !important;" href="#">PROZAZA</a></h1>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/cotizacionWeb')}}">Cotizacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/optimizador')}}">Optimizador de Cortes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contactos</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Buscar ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="{{url('/login')}}">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span> -->
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->
@yield('content')

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">PROZAZA</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Zona Sur Av Montenegro #2132
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">(2) 2382845</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">prozaza@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Servicios</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">PROZAZA</a></li>
                    <li><a class="text-decoration-none" href="#">Arquitectura Liviana</a></li>
                    <li><a class="text-decoration-none" href="#">Pared Drywall</a></li>
                    <li><a class="text-decoration-none" href="#">Cielos falsos</a></li>
                    <li><a class="text-decoration-none" href="#">Pisos Falsos</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Paginas</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Inicio</a></li>
                    <li><a class="text-decoration-none" href="#">Acerca de nostros</a></li>
                    <li><a class="text-decoration-none" href="#">Nuestra ubicacion</a></li>
                    <li><a class="text-decoration-none" href="#">Comentarios</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
            <!-- <div class="col-auto">
                <label class="sr-only" for="subscribeEmail">Email address</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                    <div class="input-group-text btn-success text-light">Subscribe</div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2023 PROZAZA
                        | Diseñado por <a rel="sponsored" href="https://prozaza.com" target="_blank">PROZAZA</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="web/assets1/js/jquery-1.11.0.min.js"></script>
<script src="web/assets1/js/jquery-migrate-1.2.1.min.js"></script>
<script src="web/assets1/js/bootstrap.bundle.min.js"></script>
<script src="web/assets1/js/templatemo.js"></script>
<script src="web/assets1/js/custom.js"></script>
<!-- End Script -->

<script src="web/assets/js/main.js"></script>
{!! Html::script('principal/bower_components/validation/parsley.min.js') !!}
<script type="text/javascript">

    mostrarproducto();

    function mostrarproducto(){

        var route= "{{route('web.mostrarproducto')}}";

        $.ajax({
            url: route,
            type: 'GET',
            dataType:'html',
            data: {},
            success: function(data){
                // console.log(data);
                $('#div_resultado_producto').html(data);

            },
            error: function(data){
                console.log(data);
            }
        });

    }
    function calcular(){
        var base=$('#base').val();
        var altura=$('#altura').val();
        var tipo=$('#tipo').val();
        var route= "{{route('web.calcula')}}";
        $('#div_msg').empty()
        $.ajax({
            url: route,
            //headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            type: 'POST',
            dataType:'html',
            data: {base:base, altura:altura, tipo:tipo},
            success: function(data){
                console.log(data);
                $('#div_resultado').html(data);

            },
            error: function(data){
                console.log(data);
            }
        });
    }

</script>

<script>

    $('#form_envia').on("submit",function(ev){
        ev.preventDefault();
        if ($(this).parsley().isValid()) {
            var $form=$(this);
            var button=$form.find("[type='submit']");

            $.ajax({
                url: $form.attr('action'),
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                type:'POST',
                dataType:'JSON',
                data: $form.serialize(),
                beforeSend: function(){
                    $('#btn_send').attr('disabled',true);
                    $('#btn_send').html('ENVIANDO COTIZACION...');
                },
                success: function(data){
                    console.log(data);
                    if (data=='TRUE') {
                        $('#btn_send').attr('disabled',true);
                        $('#btn_send').html('COTIZACION ENVIADA EXITOSAMENTE');
                        $('#div_msg').html('<div class="card bg-success text-center text-white"><h4><i class="fa fa-envelope-o"></i> COTIZACIÓN ENVIADA EXITOSAMENTE</h4></div>');
                    }else{
                        $('#btn_send').attr('disabled',false);
                        $('#btn_send').html('ENVIAR A MI CORREO');
                        $('#div_msg').html('<div class="card bg-danger text-center text-white"><h4><i class="fa fa-frown-o"></i> ERROR AL ENVIAR CORREO</h4></div>');
                    }
                },
                error: function(data, text, message){
                    console.log(data);
                    $('#btn_send').attr('disabled',false);
                    $('#btn_send').html('ENVIAR A MI CORREO');
                    $('#div_msg').html('<div class="card bg-danger text-center text-white"><h4><i class="fa fa-frown-o"></i> ERROR AL ENVIAR CORREO</h4></div>');
                }
            });
        }
        return false;
    });

</script>


</body>
</html>
