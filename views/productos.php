<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventario/Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Inventario/Productos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Fila para las busquedas filtradas-->
        <div class="col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">LISTA DE PRODUCTOS:</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" id="btnLimpiarBusqueda">
                            <i class="fas fa-times"></i>
                        </button>
                    </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
                <div class="card-body">
                    <!-- Tabla de productos -->
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="tbl_productos" class="table table-striped w-100 shadow">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>id</th>
                                        <th>Codigo</th>
                                        <th>Categoria</th>
                                        <th>Producto</th>
                                        <th>P. Compra</th>
                                        <th>P. Venta</th>
                                        <th>Stock</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Fecha de Actualizacion</th>
                                        <th class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div><!-- Tabla de productos -->
                </div> <!-- ./ end card-body -->
            </div>

        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<div class="modal fade" id="mdlGestionarProducto" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- contenido del modal-->
        <div class="modal-content">
            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Registrando Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- cuerpo del modal -->
            <div class="modal-body">
                <div class="row">
                    <!-- codigo del producto -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptCodigoReg">
                                <span class="small">Codigo de Producto</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="iptCodigoReg" placeholder="Codigo de Producto" required>
                            <span id="validate_codigo" class="text-danger small fst-italic" style="display:none">Debe Ingresar Codigo de Producto</span>
                        </div>
                    </div>

                    <!-- categoria -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="selCategoriaReg">
                                <span class="small">Seleccione Categoria:</span>
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCategoriaReg">
                            </select>
                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">Debe Seleccionar la Categoria del Producto</span>
                        </div>
                    </div>

                    <!-- Producto -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptDescripcionReg">
                                <span class="small">Producto:</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="iptDescripcionReg" placeholder="Producto" required>
                            <span id="validate_descripcion" class="text-danger small fst-italic" style="display:none">Debe ingresar descripcion del producto</span>
                        </div>
                    </div>

                    <!-- Precio de compra -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptPrecioCompraReg">
                                <span class="small">Precio Compra:</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioCompraReg" placeholder="Precio de Compra" required>
                            <span id="validate_precio_compra" class="text-danger small fst-italic" style="display:none">Ingrese el precio de Compra</span>
                        </div>
                    </div>

                    <!-- Precio de venta -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptPrecioVentaReg">
                                <span class="small">Precio Venta:</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg" placeholder="Precio de Venta" required>
                            <span id="validate_precio_venta" class="text-danger small fst-italic" style="display:none">Ingrese el precio de Venta</span>
                        </div>
                    </div>

                    <!-- Stock -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockReg">
                                <span class="small">Stock:</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg" placeholder="Stock" required>
                            <span id="validate_stock" class="text-danger small fst-italic" style="display:none">Ingrese el Stock</span>
                        </div>
                    </div>

                    <!-- botones -->

                    <button type="button" class="btn btn-primary mt-3 mx-2" style="width:170px;" id="btnGuardarProducto" onclick="formSubmitClick()">Guardar Producto</button>

                    <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    var accion;
    var table;

    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });
    //DOCUMENTACION : https://datatables.net/
    //ejecutamos el plugin dataTable que nos permite
    //administrar la tabla con filtros ya sean
    //paginaciones - cantidad de productos para mostrar en la tabla.
    //y la busqueda de los mismos
    $(document).ready(function() {

        //Ajax para listar productos
        $.ajax({
            url: "ajax/productos.ajax.php",
            type: "POST",
            data: {
                'accion': 1
            }, //1: Listas productos
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);
            }
        });

        // mostrar categorias
        $.ajax({
            url: "ajax/categorias.ajax.php",
            cache: false,
            contentType: false,
            dataType: 'json',
            success: function(respuesta) {
                var options = '<option selected value="0">Seleccione una categoria</option>';
                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value =' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }
                $("#selCategoriaReg").html(options);
            }
        });

        ////cambiando el idioma
        //y ejecuciones de libreria DataTable
        table = $("#tbl_productos").DataTable({
            //agregando botonera
            dom: 'Bfrtip',
            buttons: [{
                    text: 'Agregar Producto',
                    className: 'addNewRecord',
                    action: function(e, dt, node, config) {
                        //Ventana modal
                        $("#mdlGestionarProducto").modal('show');
                        accion = 2; // registrar
                    }
                },
                'excel', 'print', 'pageLength'
            ],
            pageLength: [10, 25, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1
                }, //1: Listas productos
            },
            //activamos el responsive 
            responsive: {
                details: {
                    type: 'column'
                }
            },
            //activamos boton ue permita mostrar detalles de columnas
            // que no se puedan ver al momento de estar responsive
            //Propiedad de DataTable
            columnDefs: [{
                    targets: 0,
                    orderable: false,
                    className: 'control'
                },
                {
                    targets: 1,
                    visible: false,
                },
                {
                    targets: 8,
                    visible: false,
                },
                {
                    targets: 9,
                    visible: false,
                },
                {
                    targets: 10,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<button type='button' class='btnEditarProducto btn btn-primary mt-3 mx-2' style='width:150px;' id='btnGuardarProducto'>Editar Producto</button>" +
                            "<button type='button' class='btnEliminarProducto btn btn-danger mt-3 mx-2' style='width:150px;' data-bs-dismiss='modal' id='btnCancelarRegistro'>Eliminar</button>"
                        /* //boton editar producto
                        "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-pencil-alt fs-5'></i>" +
                        "</span>" +
                        //boton eliminar producto
                        "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-trash fs-5'></i>" +
                        "</span>" + */
                        "</center>"
                    }
                }
            ],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });

        //cerrar modal // limpiando modal
        $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {
            //limpiar validaciones
            $("#validate_codigo").css("display", "none");
            $("#validate_categoria").css("display", "none");
            $("#validate_descripcion").css("display", "none");
            $("#validate_precio_compra").css("display", "none");
            $("#validate_precio_venta").css("display", "none");
            $("#validate_stock").css("display", "none");
            //limpiar campos
            $("#iptCodigoReg").val("");
            $("#selCategoriaReg").val("");
            $("#iptDescripcionReg").val("");
            $("#iptPrecioCompraReg").val("");
            $("#iptPrecioVentaReg").val("");
            $("#iptStockReg").val("");
        });

        $('#tbl_productos tbody').on('click', '.btnEditarProducto', function() {
            accion = 4; //
            $("#mdlGestionarProducto").modal('show');

            var data = table.row($(this).parents('tr')).data();

            if (table.row(this).child.isShown()) { //cuando esta en tamaño responsivo
                var data = table.row(this).data();
            }

            $("#iptCodigoReg").val(data[2]);
            $("#selCategoriaReg").val(data[3]);
            $("#iptDescripcionReg").val(data[4]);
            $("#iptPrecioCompraReg").val(data[5]);
            $("#iptPrecioVentaReg").val(data[6]);
            $("#iptStockReg").val(data["stock_producto"]);

        });

        $('#tbl_productos tbody').on('click', '.btnEliminarProducto', function() {
            accion = 5; //

            var data = table.row($(this).parents('tr')).data();
            var codigo_producto = data["codigo_producto"];

            Swal.fire({
                title: "Desea Eliminar?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085D6',
                cancelButtonColor: '#D33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    var datos = new FormData();
                    datos.append("accion", accion);
                    datos.append("codigo_producto", codigo_producto);

                    $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            if (respuesta == 'ok') {

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Se elimino el producto'

                                });

                                table.ajax.reload();
                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'No se pudo eliminar'
                                });
                            }
                        }
                    });
                }
            })


        });


    })

    function formSubmitClick() {

        //validando datos
        //
        Swal.fire({
            title: "Registrar Producto?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085D6',
            cancelButtonColor: '#D33',
            confirmButtonText: 'Registrar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                var datos = new FormData();
                datos.append("accion", accion);
                datos.append("codigo_producto", $("#iptCodigoReg").val());
                datos.append("id_categoria_producto", $("#selCategoriaReg").val());
                datos.append("descripcion_producto", $("#iptDescripcionReg").val());
                datos.append("precio_compra_producto", $("#iptPrecioCompraReg").val());
                datos.append("precio_venta_producto", $("#iptPrecioVentaReg").val());
                datos.append("stock_producto", $("#iptStockReg").val());
                datos.append("ventas_producto", 0);

                $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(respuesta) {
                        if (respuesta == 'ok') {

                            Toast.fire({
                                icon: 'success',
                                title: 'El producto se registro'

                            });

                            table.ajax.reload();
                            $("#mdlGestionarProducto").modal('hide');
                            $("#iptCodigoReg").val("");
                            $("#selCategoriaReg").val(0);
                            $("#iptDescripcionReg").val("");
                            $("#iptPrecioCompraReg").val("");
                            $("#iptPrecioVentaReg").val("");
                            $("#iptStockReg").val("");
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'No se registro'
                            });
                        }
                    }
                });
            }
        })
    }
</script>