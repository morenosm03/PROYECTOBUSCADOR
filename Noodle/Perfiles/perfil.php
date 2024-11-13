<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="../styles/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" type="text/css" href="../styles/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div class="top-buttons">
        <button class="left-button hvr-underline-from-center" onclick="window.location.href='../index.php'">
            <img src="../img/imagenes-generales/BackButton.png" alt="Volver">
        </button>
        <form action="../BaseDatos/logout.inc.php" method="post">
            <button type="submit" class="right-button hvr-underline-from-center">LogOut</button>
        </form>
    </div>
    <div class="container">
        <div class="profile-header">
            <div class="profile-image">
                <img src="../img/usuarios/UserProfilePhoto.png" alt="Foto de perfil">
            </div>
            <div>
                <h2>Andrés Sánchez Vázquez</h2>
                <div class="email">anressv@gmail.com</div>
            </div>
        </div>
        <div class="info-container animate__animated animate__flash">
            <div class="info-title">Información del usuario</div>
            <div class="info-item"><strong>Nombre:</strong> Andrés Sánchez Vázquez</div>
            <div class="info-item"><strong>Teléfono:</strong> 81-1661-2339</div>
            <div class="info-item"><strong>Edad:</strong> 28</div>
            <div class="info-item"><strong>País:</strong> MX</div>
            <div class="info-item"><strong>Acreditaciones:</strong> Maestría en biotecnología<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctorado en bioinformática</div>
            <button class="edit-button hvr-shrink hvr-shadow-radial">Editar información</button>
        </div>
    </div>
</body>
</html>
