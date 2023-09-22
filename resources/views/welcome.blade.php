<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Evento Jidga</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css\styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">JorKer</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Pagar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Gama!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Pagame ahora mismo</p>
                        <a class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#exampleModal">Pagar!</a>
                        <a class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#checkPay">Verificar </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pagar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Detalles pago</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Realizar pago</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Ver pago</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col">
                                {!! Form::open(['id'=>'miFormulario']) !!}
                                    {!! Form::label('nombre_cliente', 'Nombres') !!}
                                    {!! Form::text('nombre_cliente', 'aaaa', ['class'=>'form-control','id'=>'nombre_cliente']) !!}
                                    {!! Form::label('nombre_cliente', 'Apellidos') !!}
                                    {!! Form::text('nombre_cliente', 'bbbb', ['class'=>'form-control','id'=>'nombre_cliente']) !!}
                                    {!! Form::label('email_cliente', 'Email') !!}
                                    {!! Form::email('email_cliente', 'jriosg@atenea.edu.bo', ['class'=>'form-control','id'=>'email_cliente']) !!}
                                    {!! Form::label('ci', 'Carnet Indentidad') !!}
                                    {!! Form::text('ci', '12345678', ['class'=>'form-control','id'=>'ci']) !!}
                                    {!! Form::label('descripcion', 'Descripcion (contabilidad)') !!}
                                    {!! Form::text('descripcion', 'pago-de-prueba', ['class'=>'form-control','id'=>'descripcion']) !!}
                                    {!! Form::hidden('tipo_factura', 0) !!}
                                </div>
                                <div class="col">
                                    {!! Form::label('nit', 'NIT') !!}
                                    {!! Form::text('nit', '12345678012', ['class'=>'form-control','id'=>'nit']) !!}
                                    {!! Form::label('razon_social', 'NIT') !!}
                                    {!! Form::text('razon_social', 'ejemplo', ['class'=>'form-control','id'=>'razon_social']) !!}
                                    {!! Form::label('monto', 'Monto a Generar') !!}
                                    {!! Form::number('monto', null, ['class'=>'form-control','id'=>'monto']) !!}
                                    {!! Form::label('concepto', 'Concepto') !!}
                                    {!! Form::text('concepto', 'test', ['class'=>'form-control','id'=>'concepto']) !!}
                                    {!! Form::label('fecha_vencimiento', 'Fecha de Vencimiento de pago') !!}
                                    {!! Form::date('fecha_vencimiento', date('Y-m-d', strtotime('+1 day')), ['class'=>'form-control','id'=>'fecha_vencimiento']) !!}
                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <iframe src="https://pagos.libelula.bo/Pasarela.aspx?SESSION_ID=47971427-019a-4590-8368-e3599749f603" width="100%" height="500"></iframe>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Su pago esta siendo procesado :D</div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="generar">Generar</button>
                </div>
            </div>
            </div>
        </div>
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">JorKer &copy; 2023 - Laravel</div></div>
        </footer>
        <script src="{{asset('vendor\jquery\jquery-3.5.0.min.js')}}"></script>
        <script defer>            
            $("#generar").on('click', function(event) {
                event.preventDefault();
                var formData = {};
                $("#miFormulario").serializeArray().map(function (x) {
                    formData[x.name] = x.value;
                });
                // Agregar los nuevos datos requeridos
                formData.lineas_detalle_deuda = [
                    {
                    "concepto": formData.concepto,
                    "cantidad": 1,
                    "costo_unitario": formData.monto
                    }
                ];
                formData.lineas_metadatos = [
                    {
                    "nombre": "glosa",
                    "dato": "prueba"
                    }
                ];
                formData.callback_url = "{{asset('')}}"
                delete formData._token;
                delete formData.concepto;
                delete formData.monto;
                console.log(formData);
                return false;
                var jsonData = JSON.stringify(formData);
                console.log(jsonData);
                return false;
            });
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js\scripts.js')}}"></script>
    </body>
</html>
