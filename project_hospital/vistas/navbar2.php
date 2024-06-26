<!DOCTYPE html>
<html lang="en">
<head>
    <title>Navbar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cambay:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@400&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar2.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="Logo navbar-brand" href="http://project_hospital.test"><img class="Logo" src="img/LOGO_WEB.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="textos">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto"> <!-- Utiliza ms-auto para alinear a la derecha -->
                        <button class="btn btn-danger"><i class="fa-thin fa-truck-medical"></i> Emergency</button>                        
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tips.php"> <i class="bi bi-search"></i> Tips</a> <!-- Agrega el icono de búsqueda -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mapa">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://project_hospital.test/vistas/dashboard.php">
                                <div class="rectangle2">
                                    <div class="ellipse">
                                        <i class="fas fa-user btn-profile"></i>
                                    </div>
                                    <span class="user-bar">User profile</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-outline-info">
                                    Menu
                                </button>
                                <div class="dropdown-content"> 
                                    <a rel="noopener"  href="http://project_hospital.test/vistas/filiacion.php">Filation</a> 
                                    <a rel="noopener" href="logout.php">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
</body>
</html>