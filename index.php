<?php

function getEndpointByToken($_endpoint, $_token)
{
    //Configuracion de la solicitud por cURL
    $ch = curl_init($_endpoint);
    //indico que tiene método de autorizacion para acceder al contenido
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $_token
    ));
    //indico que tiene contenido el endpoint (respuesta)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //ejecucion de la solicitud
    $respuesta = curl_exec($ch);
    //verificación si existen errores
    if ($respuesta === false) {
        return 'Error 1: No se pudo realizar la solicitud: ' . curl_error($ch);
    } else {
        return $respuesta;
    }
}

$respuestaEndpoint = getEndpointByToken('http://localhost/backend-sec70-2024t1/v1/services/', 'ciisa');
//convertir la respuesta en un JSON
$respuestaEndpoint = json_encode($respuestaEndpoint);
//echo $respuestaEndpoint;
//var_dump($respuestaEndpoint);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend 70</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        footer {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ConIngenio.cl</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                        <a class="nav-link" href="#servicios">Servicios</a>
                        <a class="nav-link" href="#contacto">Contáctenos</a>
                    </div>
                </div>
            </div>
    </nav>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/imagen1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/imagen2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/imagen3.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Nosotros</h2>
                    <h3>Mision</h3>
                    <p>Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la creatividad.</p>
                    <h3>Vision</h3>
                    <p>Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/punitos.webp" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container">
            <h2>Servicios</h2>
            <div id="rowServicios" class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Lorem Ipsum</div>
                        <div class="card-body">Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Lorem Ipsum</div>
                        <div class="card-body">Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Lorem Ipsum</div>
                        <div class="card-body">Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Lorem Ipsum</div>
                        <div class="card-body">Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <h2>Contáctenos</h2>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label id="lblMensaje" class="d-none">Error? exitoso?</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fi_nombre" placeholder="Ingrese su nombre">
                            <label for="fi_nombre">Nombre</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="fs_servicios" aria-label="Servicios">
                                <option value=0 selected>Seleccione un servicio</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="fs_servicios">Seleccione un servicio</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Ingrese su mensaje aquí" style="height: 100px" id="fta_mensaje"></textarea>
                            <label for="fta_mensaje">Mensaje</label>
                        </div>
                        <input type="checkbox" class="form-check-input" id="checkEnvio" value="checkeado">
                        <label for="checkEnvio">¿Exitoso?</label>
                        <button class="btn btn-primary" onclick="validarFormulario(this)">Enviar</button>
                    </div>
                </div>
                <div class="col-md-6">
                    imagen de google maps
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">asd
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        imprimeServicios(JSON.parse(<?php echo $respuestaEndpoint ?>));

        function imprimeServicios(_datosEndpoint) {
            // console.log(_datosEndpoint.data);
            let cantidadData = 0;
            _datosEndpoint.data.forEach(element => {
                if (element.activo) {
                    cantidadData++;
                }
            });
            // const anchoColumnasXL = 12 / _datosEndpoint.data.length;
            const anchoColumnasXL = 12 / cantidadData;
            const anchoColumnasMD = Math.round((12 / cantidadData) * 2);
            const anchoColumnasSM = Math.round((12 / cantidadData) * 2 * 2);
            console.log(anchoColumnasSM);
            // console.log(_datosEndpoint.data.length);
            // console.log(cantidadData);
            // console.log(anchoColumnasXL);
            const rowServicios = document.getElementById('rowServicios');
            rowServicios.innerHTML = '';
            _datosEndpoint.data.forEach(element => {
                if (element.activo) {
                    const columna = document.createElement('div');
                    columna.classList.add('col-xl-' + anchoColumnasXL);
                    columna.classList.add('col-md-' + anchoColumnasMD);
                    columna.classList.add('col-sm-' + anchoColumnasSM);
                    //x: horitzontal
                    //y: vertical
                    columna.classList.add('my-2');
                    const tarjeta = document.createElement('div');
                    tarjeta.classList.add('card');
                    const tarjetaHeader = document.createElement('div');
                    tarjetaHeader.classList.add('card-header');
                    const tarjetaBody = document.createElement('div');
                    tarjetaBody.classList.add('card-body');
                    const tarjetaFooter = document.createElement('div');
                    tarjetaFooter.classList.add('card-footer');
                    //trabajo con los datos
                    tarjetaHeader.innerText = element.titulo.esp;
                    tarjetaBody.innerText = element.texto.esp;
                    // console.log(element.texto.esp);
                    tarjetaFooter.innerHTML = '<a href="#contacto"><button onclick="cambiaServicio(`' + element.id + '`)">Contáctanos</button></a>';
                    tarjeta.appendChild(tarjetaHeader);
                    tarjeta.appendChild(tarjetaBody);
                    tarjeta.appendChild(tarjetaFooter);
                    columna.appendChild(tarjeta);
                    rowServicios.appendChild(columna);
                }
            });
        }

        function validarFormulario(_boton) {
            let validos = false;
            const lblMensaje = document.getElementById('lblMensaje');
            const input_nombre = document.getElementById('fi_nombre');
            const select_servicios = document.getElementById('fs_servicios');
            const textArea_mensaje = document.getElementById('fta_mensaje');
            const check_envio = document.getElementById('checkEnvio');
            console.log(_boton);
            console.log(input_nombre);
            console.log(select_servicios);
            console.log(textArea_mensaje);
            console.log(check_envio);

            lblMensaje.innerText = 'Error:';

            // Valido que el input nombre contenta caracteres
            if (input_nombre.value.length == 0) {
                input_nombre.classList.add('is-invalid');
                validos = false;
                lblMensaje.innerText += ' falta nombre /';
            } else {
                //validar que caracteres son válidos.
                input_nombre.classList.remove('is-invalid');
                input_nombre.classList.add('is-valid');
                validos = true;
            }

            if (select_servicios.value == 0) {
                select_servicios.classList.add('is-invalid');
                validos &= false;
                lblMensaje.innerText += ' falta servicio /';
            } else {
                select_servicios.classList.remove('is-invalid');
                select_servicios.classList.add('is-valid');
                validos &= true;
            }

            if (textArea_mensaje.value.length == 0) {
                textArea_mensaje.classList.add('is-invalid');
                validos &= false;
                lblMensaje.innerText += ' falta mensaje /';
            } else {
                textArea_mensaje.classList.remove('is-invalid');
                textArea_mensaje.classList.add('is-valid');
                validos &= true;
            }

            if (!validos) {
                lblMensaje.classList.remove('d-none');
            } else {
                lblMensaje.classList.add('d-none');
            }

            if (check_envio.value == 'checkeado') {
                console.log('checkeado');
            } else {
                console.log('No checkeado');
            }

        }

        function cambiaServicio(_llega) {
            alert(_llega);
        }
    </script>
</body>

</html>