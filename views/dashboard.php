<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!--fila para informacion cards-->
        <div class="row">

            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalVentas"></h4>

                        <p>Total de Ventas del mes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Mas Informacion
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- probando -->

            <!-- probando -->
            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalGanancias">32</h4>

                        <p>Total de Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Mas Informacion
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalVentasHoy"></h4>

                        <p>Ventas del dia</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer;" class="small-box-footer">Mas Informacion
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--fila para informacion cards-->

        <!--fila para grafico-->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header" style="background-color: #269f94;">
                        <h3 id="card_ventas_mes" class="card-title" style="color:black; font-weight: bold"></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250; height: 300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fila para grafico-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color: #269f94;">
                        <h3 class="card-title" style="color:black; font-weight: bold">Los 10 productos mas vendidos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_producto_mas_vendidos">
                                <thead>
                                    <th>Codigo Producto</th>
                                    <th>Producto</th>
                                    <th>Precio de Compra</th>
                                    <th>Ventas Producto</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    //Solicitud Ajax para obtener datos
    $(document).ready(function() {
        //actualizacion cada 10 segundos
        //AJAX PARA CARDS   
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);
                $("#totalVentas").html('S/. ' + respuesta[0]['totalVentas']);
                    $("#totalGanancias").html('S/. ' + respuesta[0]['ganancias']);
                    $("#totalVentasHoy").html('S/. ' + respuesta[0]['ventasHoy']);
            }
        });

        //AJAX PARA GRAFICO
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            data: {
                //parametro para poder ejecutar el bloque de codigo de dashboardajax
                'accion': 1 //parametro para obtener ventas del mes
            },
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);

                var fecha_venta = [];
                var total_venta = [];
                var total_ventas_mes = 0;

                for (let i = 0; i < respuesta.length; i++) {
                    fecha_venta.push(respuesta[i]['fecha_venta']);
                    total_venta.push(respuesta[i]['total_venta']);
                    total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i]['total_venta']);
                }

                //console.log(total_ventas_mes);
                $("#card_ventas_mes").html('Ventas del Mes: S./ ' + total_ventas_mes.toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"));

                //grafico de barras
                var barChartCanvas = $("#barChart").get(0).getContext('2d');
                var areaChartData = {
                    //eje x
                    labels: fecha_venta,
                    datasets: [{
                        label: 'Ventas del Mes',
                        backgroundColor: 'rgba(38,159,148)',
                        data: total_venta
                    }]
                }

                var barChartData = $.extend(true, {}, areaChartData);
                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    events: false,
                    legend: {
                        display: true
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                for (var i = 0; i < dataset.data.length; i++) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                        scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                    ctx.fillStyle = '#444';
                                    var y_pos = model.y - 5;

                                    if ((scale_max - model.y) / scale_max >= 0.93)
                                        y_pos = model.y + 20;
                                    ctx.fillText(dataset.data[i], model.x, y_pos);
                                }
                            });
                        }
                    }
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })
            }
        });


        //AJAX PARA 10 PRODUCTOS
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            type: 'POST',
            data: {
                //parametro para poder ejecutar el bloque de codigo de dashboardajax
                'accion': 2 //parametro para obtener 10 PRODUCTOS
            },
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);

                for (let i = 0; i < respuesta.length; i++) {
                    filas = '<tr>' +
                        '<td>' + respuesta[i]["id"] + '</td>' +
                        '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                        '<td>' + respuesta[i]["cantidad"] + '</td>' +
                        '<td> S/. ' + respuesta[i]["total_venta"] + '</td>' +
                        '</tr>'
                    $("#tbl_producto_mas_vendidos tbody").append(filas);
                }

            }
        });

    })
</script>