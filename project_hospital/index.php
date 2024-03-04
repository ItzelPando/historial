<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="vistas/css/index.css">
    <link rel="stylesheet" href="vistas/css/navbar_style.css">
    <link rel="stylesheet" href="vistas/css/footer.css">
    <link rel="stylesheet" href="https://fontawesome.com/">
</head>
<body>
    <header>
        <?php include 'vistas/navbar.php';?>
    </header>
    <main>
    <div class="container" id="contenedor">
        <div class="row">
            <div class="col-md-12">
            <img src="vistas/img/login.png" alt=""style="height: 562px; width: 1250px; margin-top: 10px; margin: 0px;">
            </div>
            <div id="texto" class="col-md-8">
                <h1>HOSPITAL PROVIDENCE</h1>
                <p class="col-md-6">Fuimos fundados con el propósito de llevar servicios de prevención y diagnóstico
                    oportuno a la
                    población en México, ofreciéndoles atención humana y equipo tecnológico de calidad a precios
                    accesibles.</p> <br>
                <button id="btn-cita" class="btn btn-primary agendar-cita">Agendar Cita</button>
            </div>
        </div>

        <div class="btn-container">
            <div class="col-md-3">
                <button class="btn btn-1">
                    <label for="" class="especialidad1">Laboratorios</label>
                    <img src="vistas/img/doc1.png" alt="" id="doctor1">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-2">
                    <label for="" class="especialidad2">Ultrasonido</label>
                    <img src="vistas/img/doc2.png" alt="" id="doctor2">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-3">
                    <label for="" class="especialidad3">Pediatria</label>
                    <img src="vistas/img/doc3.png" alt="" id="doctor3">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-4">
                    <label for="" class="especialidad4">X-RAY</label>
                    <img src="vistas/img/doc4.png" alt="" id="doctor4">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-5">
                    <label for="" class="especialidad5">Dentista</label>
                    <img src="vistas/img/doc5.png" alt="" id="doctor5">
                </button>
            </div>

        </div>
    </div>

    <!-- Agregar el mapa debajo del contenedor y botón -->
    <div id="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.1273197485193!2d-104.6515139!3d24.026575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bd3f47c9b73f%3A0x1739f232598383d8!2sHospital%20de%20la%20Paz!5e0!3m2!1ses!2smx!4v1707912841680!5m2!1ses!2smx"
            width="1256px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- Formulario de contacto -->
    <div class="container contact-form">
        <h2>Contáctanos ¡Estamos para Ayudarte!</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escriba su mensaje"></textarea>
            </div> <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </main>
    <footer>
        <?php include 'vistas/footer.php';?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>