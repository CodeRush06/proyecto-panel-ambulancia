<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <div class="container-fluid">
        <header class=" row bg-white p-4 justify-content-center">
            <!-- Barra de navegacion e interfaz de Clinicas-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="logo_rgb_200x100.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Inserte información" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar
                     </button>
                </form>
                  </div>
            </nav>
         </header>
    <body>
        <div class="row">
                <aside class="col-md-3 text-white p-4 bg-info">
                    <!-- Panel de seguimiento de traslado-->
                    <h1 class="h3 text-center">Panel de seguimiento</h1>  
                    <img src="Screenshotedited.png" class="img-thumbnail" width="600px" length="300px"> 
                    <p class="text text-center"> Traslado Seleccionado: "Juana"</p>
                </aside>
                <main class=" col-md-9 bg-white">
                    <!-- Panel de administracion de solciitudes-->
                    <h1 class="h3">Panel de Administración</h1>
                    <div class="card container-fluid"> 
                        <div class="card-title text-center my-2">Solicitudes de Traslado
                            <button class="button bg-info mx-2 border-0">Modificar</button>
                        </div>
                        <div class="card-body">
                        <!-- Solicitudes de traslado por iniciar-->
                            <!-- 1er solicitud de traslado-->
                         <div class="row">
                              <div class="col-md-3 text-dark">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="h1"> Paciente: Juana Lopez</h3>
                                        <p class="display-6">Destino: Camino Carrasco 1234</p>
                                        <p class="text-muted">Estado: 
                                            <span class="badge badge-danger">Aislado</span>
                                        </p> 
                                        <button class="button bg-success mx-2 border-0">Aceptar</button> 
                                        <button class="button bg-danger mx-2 border-0">Rechazar</button>
                                    </div>
                                </div>
                                </div>
                             <!-- 3er solicitud de traslado-->
                             <div class="col-md-3 text-dark">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h3 class="h1"> Paciente: Felipe Lorenzo</h3>
                                            <p class="display-6">Destino: Casavalle 1234</p>
                                            <p class="text-muted">Estado: 
                                                <span class="badge badge-success">Enfermo</span>
                                                <span class="badge badge-secondary">Acompañado</span> 
                                                <span class="badge badge-info">Necesita Oxigeno</span>
                                            </p> 
                                            <button class="button bg-success mx-2 border-0">Aceptar</button> 
                                            <button class="button bg-danger mx-2 border-0">Rechazar</button>
                                        </div>
                                    </div>
                            </div>
                             <!-- 3er solicitud de traslado-->
                             <div class="col-md-3 text-dark">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h3 class="h1"> Organo: Riñon</h3>
                                            <p class="display-6">Origen: Hospital de Clinicas. Destino: Hospital Pasteur </p>
                                            <p class="text-muted">Estado: <span class="badge badge-danger">Sano</span>
                                            </p> 
                                            <button class="button bg-success mx-2 border-0">Aceptar</button> 
                                            <button class="button bg-danger mx-2 border-0">Rechazar</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
                    <div class="card">
                        <!-- Formulario para traslados-->
                        <div class="card-title text-center my-2"> Formulario 
                            <span class="font-weight-bold">Peticion de traslado para Pacientes  </span>
                            <button class="button bg-info mx-2 border-0">Modificar</button>
                        </div>
                        <div class="card-body">
                        <form>
                            <!-- seccion de identificacion del paciente-->
                            <div class="form-group">
                                 <label for="exampleInput1">Ingresar Cédula de Paciente</label>
                                 <input type="text" class="form-control" id="exampleInput1" placeholder="Ingresar Cédula">
                            </div>
                            <!-- seccion de estado del paciente-->
                                <div class="form-group">
                                     <label for="defaultRadio"> Ingrese estado reportado del paciente llenando las casillas  </label>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" name="radios" type="radio" value="" id="defaultRadio">
                                         <label class="form-check-label" for="defaultRadio">
                                           <span class="badge badge-success"> Sano</span>
                                         </label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" name="radios" type="radio" value="" id="defaultRadio">
                                         <label class="form-check-label" for="defaultRadio">
                                           <span class="badge badge-warning"> Enfermo </span>
                                         </label>
                                    </div>
                                         <div class="form-check form-check-inline">
                                         <input class="form-check-input" name="radios" type="radio" value="" id="defaultRadio">
                                         <label class="form-check-label" for="defaultRadio">
                                           <span class="badge badge-danger"> Aislado</span>
                                         </label>
                                    </div>
                                </div>
                                <!-- seccion de equipamiento-->
                                <div class="form-group">
                                     <label for="defaultCheck1"> Ingrese equipamiento que necesite el paciente  </label>
                                 <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                     <label class="form-check-label" for="defaultCheck1">
                                        <span class="badge badge-info"> Oxigeno</span>
                                     </label>
                                </div>
                                 <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                     <label class="form-check-label" for="defaultCheck1">
                                       <span class="badge badge-warning"> Resucitador Electrico</span>
                                     </label>
                                </div>
                                 <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                     <label class="form-check-label" for="defaultCheck1">
                                       <span class="badge badge-danger"> Monitor Cardiáco</span>
                                     </label>
                                </div>
                            </div>
                                <!-- seccion de acompañado-->
                                <div class="form-group">
                                 <label for="defaultRadio1"> El paciente está acompañado? </label>
                                 <div class="form-check form-check-inline">
                                     <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultRadio1">
                                     <label class="form-check-label" for="defaultRadio1">
                                       <span class="badge badge-primary"> Si</span>
                                     </label>
                                </div>
                                 <div class="form-check form-check-inline">
                                     <input class="form-check-input" name= "exampleRadios"type="radio" value="" id="defaultRadio1">
                                     <label class="form-check-label" for="defaultRadio1">
                                   <span class="badge badge-secondary"> No</span>
                                     </label>
                                 </div>
                                  <!-- seccion de ubicacion-->
                                 <div class="form-group">
                                     <label for="exampleFormControlTextarea1">Ingrese destino / ubicacion del paciente</label>
                                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                <!-- seccion de comentarios / observaciones-->
                                <div class="form-group">
                                     <label for="exampleFormControlTextarea1">Ingrese comentarios u observaciones</label>
                                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                               <button type="submit" class="btn btn-outline-info">Enviar Solicitud de traslado</button>
                        </form>
                    
                    </div>
                    </div>
                </main> 
        </div>
</div>
                            
     <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
