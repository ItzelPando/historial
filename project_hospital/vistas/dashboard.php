<?php
session_start();

// Verificar si no hay una sesión activa
if(!isset($_SESSION['correo'])) {
    // Si no hay una sesión activa, redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit; // Asegúrate de salir del script después de redirigir
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/navbar2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--COSAS DEL CALENDARIO-->
    <link rel="stylesheet" href="css/style_cale.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header>
        <?php include 'navbar2.php';?>
    </header><br>
    <div class="container">
        <div class="row ">
            <?php
                if(isset($_SESSION["name"])) {
                        $name = $_SESSION["name"];
                        // Conexión a la base de datos (debes ajustar tus credenciales según corresponda)
                        $servername = 'localhost'; 
                        $user = 'root';
                        $pass = ''; 
                        $database = 'historial_clinico';
                        $conn = new mysqli($servername, $user, $pass, $database); 
                        if ($conn->connect_error) {
                            die('Error de conexión: ' . $conn->connect_error);
                    }
                    // Consulta SQL para obtener el correo electrónico del usuario
                    $sql = "SELECT lastname FROM pacientes WHERE name='$name'";
                    $result = $conn->query($sql);
                    if($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $lastname = $row['lastname'];
                        //Yo imprimo lo que tiene tu sesión, eliminame para una mejor experiencia
                        echo "<h1>Bienvenido $name $lastname</h1>";
                    } else {
                        echo "No se pudo encontrar el correo electrónico del usuario.";
                    }
                    $conn->close(); // Cierra la conexión a la base de datos
                } else {
                    header("Location: login.php");
                    exit();
            }?>
            <div class="col-md-6">
                <div class="row">
                        <div class="col-md-12">
                            <!--Yo soy la gran tarjeta-->
                            <div class="card-container">
                                <div class="card bg-color-1"> 
                                    <div class="front">
                                        <div class="item item1-1"><h2>Schedule an appointment</h2></div>
                                        <div class="item item1-2"><img src="img/doc.png" alt=""></div>
                                    </div>
                                    <div class="back">
                                        <h4>Schedule your appointment</h4>
                                        <form action="bd_especialidad.php" method="post">
                                            <label for="especialidad">Especialidad:</label>
                                            <select id="especialidad" name="especialidad" required>
                                                <option value="Laboratorio">Laboratory</option>
                                                <option value="General">General</option>
                                                <option value="Ultrasonido">Ultrasound</option>
                                                <option value="Optica">Optic</option>
                                                <option value="Xray">X-ray</option>
                                                <option value="Cardiologo">Cardiology</option>
                                            </select> <br><br>
                                            <!--Dia-->
                                            <label for="fecha"> Date:</label><br>
                                            <input type="date" id="fecha" name="fecha" required><br><br>
                                            <!--Hora-->
                                            <label for="hora">Hour:</label>
                                            <select id="hora" name="hora" required>
                                                <option value="10:00 am">10:00 am</option>
                                                <option value="11:00 am">11:00 am</option>
                                                <option value="12:00 pm">12:00 pm</option>
                                                <option value="1:00 pm">1:00 pm</option>
                                                <option value="2:00 pm">2:00 pm</option>
                                                <option value="3:00 pm">3:00 pm</option>
                                            </select> <br><br>
                                            <button class="schedule222">Schedule</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--Nosotros somos las 2 cards de abajo-->
                    <div class="col-md-6">
                        <div class="card bg-color-2"> 
                            <div class="item item2-1"><h2>Medical history</h2></div>
                            <div class="item item2-2"><img class="ppoo" src="img/tablita.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-color-2-1"> 
                            <div class="item item2-1"><h2>Results</h2></div>
                            <div class="item item2-2"><img class="ppoo" src="img/results.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Yo soy el calendario-->
            <div class="col-md-3">
                    <div class="wrapper">
                        <header>
                            <p class="current-date"></p>
                            <div class="icons">
                                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                                <span id="next" class="material-symbols-rounded">chevron_right</span>
                            </div>
                        </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>