<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Registrar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Registrar</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
</div>
<!-- /.content --> 

<div class="container p-4">
    <form class="needs-validation" novalidate method="post" action="AgregarUsuario" enctype="multipart/form-data">
        <div class="row">
            <div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrar Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div id="header" class="">
                                        <h5 class="mb-0 t" align="center">
                                                Ingresar datos del Usuario
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <input type="text" name="nid" placeholder="DNI" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" name="apellidos" placeholder="Apellidos" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="number" name="celular" placeholder="Celular" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="email" name="email" placeholder="Email" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" name="user" placeholder="Usuario" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" name="password" placeholder="Password" class="form-control" required autofocus/>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <select class="form-control" name="role" required>
                                                <option selected disabled value="">Seleccione el rol</option>
                                                <?php              
                                                foreach($model3 as $key => $value) {
                                                    echo "<option>".$value["Role"]."</option>";
                                                }
                                                ?>                    
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-danger"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>