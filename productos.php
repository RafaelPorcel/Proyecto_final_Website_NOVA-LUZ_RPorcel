<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA-LUZ | Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script defer src="tipos.js"></script>
</head>


<body>
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html" style="">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="servicios.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="ofertas.html">Ofertas destacadas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="nosotros.html">Nosotros/Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="productos.html">Productos</a>
                        </li>
                        
                    </ul>
                </div>
                <a class="navbar-brand" href="index.html"><img src="img/logo_nova.png" alt="logo NOVA-LUZ"
                        width="200px"></a>
            </div>
        </nav>
    </header>

    <main>

    <div class="container">

    <section class="formularios">

        <div class="formularios row justify-content-center">
            <div class="form1 col-lg-6">
                <form action='' method="GET">
                <fieldset >
                <legend>Producto</legend>
                <div class='mb-3'>

                <select class='form-select' name="eleccion" id="tables">
                    <option value="" disabled selected>Seleccione producto</option>
                    <?php
                        require_once 'tablas.php';
                    ?>
                </select><br>
                <div id="div">
                    <select class='form-select' name='tipazo' id='fields'>
                        <option value="" disabled selected>Seleccione tipo</option>
                    </select><br><br>
                </div id="div">
                <button type='submit' class='btn btn-primary;'>Buscar</button>
                </fieldset>
                </form>
            </div>

            

        </div>

        <div class="tablas">
            <?php
            if(isset($_GET["eleccion"]) && isset($_GET["tipazo"])) {
  
                $tabla = $_GET["eleccion"];
                $tipo = $_GET["tipazo"];

                require "conn.php";

                $sql = "SELECT referencia, tipo, nombre, precio FROM $tabla WHERE tipo = '$tipo'";
                $resultado = $conn->query($sql);

                $num_fila = mysqli_num_rows($resultado);
                if($num_fila == 0){
                }else{    
            
                    echo "<h4>".$tabla."</h4>";
                    echo "<table class='table'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>Referencia</th>
                            <th scope='col'>Tipo</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Precio</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($fila = mysqli_fetch_array($resultado)) {
                        extract($fila);
                        echo"<tr>
                                <td>$referencia</td>
                                <td>$tipo</td>
                                <td>$nombre</td>
                                <td>$precio</td>
                            </tr>";
                    }          
                    echo "</table>";
                }
                $conn->close();
            }
            ?>

        </div>
    </section>
    </div class="container">
    </main>

    <div class="container my-5">
        <footer class="text-white text-center text-lg-start bg-secondary">
            <div class="container p-4">
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">NOVA-LUZ</h5>
                        <p>
                            MÁS DE 20 AÑOS ILUMINANDO TU HOGAR Y TU NEGOCIO
                        </p>
                        <p>
                            ESPECIALÍSTAS EN ASESORAMIENTO PERSONALIZADO. VISÍTANOS
                        </p>
                    </div>
                    <div class="direccion col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 pb-1">Contacto</h5>
                        <ul class="fa-ul" style="margin-left: 1.65em;">
                            <li class="mb-3 maps">
                                <span class="ms-2">
                                    <a href="nosotros.html#visitanos">
                                        Avda.
                                        Villanueva de Córdoba, 43 - Pozoblanco</a>
                                </span>
                            </li>
                            <li class="mb-3 telefono">
                                <span class="ms-2">
                                    <a href="tel:+34957130334">Tlfn: 957
                                        130 334</a>
                                </span>
                            </li>
                            <li class="mb-3">
                                <span class="ms-2 whatsapp">
                                    <a target="_blank" href="https://wa.me/34623450198">WhatsApp: 623
                                        450 198</a>
                                </span>
                            </li>
                            <li class="mb-3 correo">
                                <span class="ms-2">
                                    <a target="_blank"
                                        href="mailto:iluminacion_novaluz@hotmail.com">iluminacion_novaluz@hotmail.com</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">HORARIO</h5>
                        <table class="table text-center text-white">
                            <tbody class="fw-normal">
                                <tr>
                                    <td>Lunes-Viernes:</td>
                                    <td>10:00/13:45 - 17:15/20:30</td>
                                </tr>
                                <tr>
                                    <td>Sábado:</td>
                                    <td>10:00-13:45</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" href="index.html">novaluz.com</a>
            </div>
        </footer>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        
</body>

</html>