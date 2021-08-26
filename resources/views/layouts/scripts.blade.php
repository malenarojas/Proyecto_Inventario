<script src="{{ asset('materialize/js/materialize.js') }}" ></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

{{-- Librerias de Chart --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(elems, {});

        var elemDate = document.querySelectorAll('.datepicker');
        M.Datepicker.init(elemDate, {
            format: 'yyyy-mm-dd'
        });

        var elemSelect = document.querySelectorAll('select');
        M.FormSelect.init(elemSelect, {});
    });

    function showProgress(){
        var elem = document.getElementById('modal-wait');
        M.Modal.init(elem, {
            'dismissible' : false,
            'opacity' : 0.2
        });
        var instance = M.Modal.getInstance(elem);
        instance.open();
    }
</script>

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