<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Buscador de Recursos</title>
    <style>
        .profile-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div class="filter-group sidebar">
        <div class="logo">
            <img alt="Noodle logo" src="img/imagenes-generales/logo2.png">
            <span>Noodle</span>
        </div>
        <div class="filter-box">
            <h2>Filtros</h2>
            <!-- Filtros y Categorías -->
            <div class="filter-group-content">
                <h3>Filtrado por Fecha</h3>
                <label><input type="radio" name="date-filter" value="1"> Año actual</label>
                <label><input type="radio" name="date-filter" value="2"> Últimos 2 años</label>
                <label><input type="radio" name="date-filter" value="5"> Últimos 5 años</label>
                <label><input type="radio" name="date-filter" value="10"> Últimos 10 años</label>
                <label><input type="radio" name="date-filter" value="all"> Todo el tiempo</label>
            </div>
            <div class="filter-group-content">
                <h3>Categorías</h3>
                <label><input type="checkbox" class="category-checkbox" value="Artículos científicos"> Artículos científicos</label>
                <label><input type="checkbox" class="category-checkbox" value="Estudios de caso"> Estudios de caso</label>
                <label><input type="checkbox" class="category-checkbox" value="Informes y documentos"> Informes y documentos</label>
                <label><input type="checkbox" class="category-checkbox" value="Recursos educativos"> Recursos educativos</label>
            </div>
        </div>
        <div class="clear-filters" id="clearFilters">Quitar Filtros</div>
    </div>

    <div class="container">
        <h1 class="animate__animated animate__bounceIn">¡Bienvenido!</h1>
        <div class="search-container">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Buscar artículo...">
                <button>
                    <i class="fas fa-search"></i>
                </button>
                <img src="img/imagenes-generales/BarraBusqueda.png" alt="Search Icon" class="search-icon">
            </div>
        </div>
        <ul id="results"></ul>
    </div>

    <div class="right">
    <form action="BaseDatos/logout.inc.php" method="post">
        <button type="submit" class="logout-button hvr-underline-from-center">LogOut</button>
    </form>
        <div class="announcements">
            <p>Anuncios</p>
            <div class="announcement-images">
                <img src="img/anuncios-imagenes/Anuncio1.jpg" alt="Anuncio 1">
                <img src="img/anuncios-imagenes/Anuncio2.jpg" alt="Anuncio 2">
            </div>
        </div>
    </div>

    <button class="profile-button hvr-underline-from-center" onclick="window.location.href='Perfiles/perfil.php'">Perfil</button>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
