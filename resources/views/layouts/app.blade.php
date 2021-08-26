<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-lg">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-lg">
    @yield('contenido')
</div>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
 <script>
     $(function (){
         $('#buscar').keyup( function(e){
             let producto_codigo=$('#buscar').val();
             console.log('consultado');
             console.log(producto_codigo);
             if($('#buscar').val()) {
                 e.preventDefault();
                 $.ajax({
                     url: '/producto/buscar',
                     type: 'GET',
                     async: true,
                     data: {
                         codigo: producto_codigo,
                         _token: $('input[name="_token"]').val()
                     },
                     success: function (response){
                         if(response==0){
                             console.log('No llego nada');
                         }else{

                             var datas = JSON.parse(response);
                             datas.forEach(data => {
                                 $('#nombre_producto').val(data.nombre);
                                 $('#producto_codigo').val(data.codigo);
                                 console.log($('#producto_codigo').val(data.codigo));
                             })
                         }
                     },
                     error: function (error){
                     },
                 })
             }
         })
     });
     /*ajax para buscar a un proveedor*/
     $(function (){
         $('#buscarproveedor').keyup( function(e){
             let proveedor_id=$('#buscarproveedor').val();
             console.log('consultado');
             console.log(proveedor_id);
             if($('#buscarproveedor').val()) {
                 e.preventDefault();
                 $.ajax({
                     url: '/proveedor/buscarproveedor',
                     type: 'GET',
                     async: true,
                     data: {
                         id: proveedor_id,
                         _token: $('input[name="_token"]').val()
                     },
                     success: function (response){
                         if(response==0){
                             console.log('No llego nada');
                         }else{

                             var datas = JSON.parse(response);
                             datas.forEach(data => {
                                 $('#nombre_proveedor').val(data.nombre);
                                 $('#proveedor_id').val(data.id_proveedor);
                                 console.log($('#proveedor_id').val(data.id_proveedor));
                             })
                             console.log('correcto')
                         }
                     },
                     error: function (error){
                     },
                 })
             }
         })
     });
 </script>
</body>
</html>
