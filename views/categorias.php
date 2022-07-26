<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categorias</h1>
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
                    <h3 class="card-title">LISTA DE CATEGORIAS:</h3>
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
                    <!-- Tabla de categorias -->
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="tbl_categorias" class="table table-striped w-100 shadow">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre Categoria</th>
                                        <th>Fecha Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>MOUSES</th>
                                        <th>10-10-2022</th>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>TECLADOS</th>
                                        <th>10-10-2022</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- Tabla de categorias -->
                </div> <!-- ./ end card-body -->
            </div>

        </div>

    </div><!-- /.container-fluid -->
</div>
