<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="../styles/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Comentarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="../styles/comentarios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div class="top-buttons">
        <button class="left-button hvr-underline-from-center" onclick="window.location.href='../Recursos/Tecnologías Emergentes.php'">
            <img src="../img/imagenes-generales/BackButton.png" alt="Volver">
        </button>
        <form action="../BaseDatos/logout.inc.php" method="post">
            <button type="submit" class="right-button hvr-underline-from-center">LogOut</button>
        </form>
    </div>
    <div class="container animate__animated animate__bounceInUp">
        <div class="header">
            <h2>Explorando Tecnologías del Futuro</h2> 
        </div>
        <div class="header">
            <h1>Comentarios</h1>
            <img src="../img/imagenes-generales/Comments.png" alt="Imagen del encabezado">
        </div>
        <div class="comment">
            <img src="../img/usuarios/UserProfilePhoto.png" alt="Usuario 1">
            <div class="comment-content">
                <div class="author">Usuario 1</div>
                <div class="date">2024-08-01</div>
                <p>La transformación científico-tecnológica actual se caracteriza por la convergencia de disciplinas que antes operaban de manera independiente. La biotecnología, la inteligencia artificial y la ciencia de materiales están trabajando juntas para crear soluciones innovadoras que tienen el potencial de revolucionar sectores como la medicina, la agricultura y la energía. Esta integración interdisciplinaria está acelerando el ritmo de la innovación, pero también plantea desafíos en términos de regulación, ética y formación de profesionales capaces de operar en estos nuevos campos híbridos</p>
            </div>
        </div>
        <div class="comment" style="margin-top: 60px;">
            <img src="../img/usuarios/UserProfilePhoto.png" alt="Usuario 2">
            <div class="comment-content">
                <div class="author">Usuario 2</div>
                <div class="date">2024-08-02</div>
                <p>La transformación digital ha permitido un avance sin precedentes en la investigación científica. Herramientas como el big data, la computación en la nube y la inteligencia artificial están cambiando la forma en que los científicos recopilan, analizan e interpretan datos. Estos avances están haciendo posible que se lleven a cabo investigaciones más rápidas y precisas, pero también están cambiando el perfil del investigador, que ahora debe contar con habilidades tecnológicas avanzadas para aprovechar al máximo estas nuevas herramientas..</p>
            </div>
        </div>
        <div class="comment" style="margin-top: 60px; position: relative;">
            <img src="../img/usuarios/UserProfilePhoto.png" alt="Usuario 3">
            <div class="comment-content">
                <div class="author">Usuario 3</div>
                <div class="date">2024-08-03</div>
                <p>Mientras la transformación científico-tecnológica avanza a un ritmo vertiginoso, es crucial que no perdamos de vista las implicaciones éticas de estos desarrollos. Innovaciones como la edición genética y la inteligencia artificial tienen el potencial de alterar fundamentalmente nuestra sociedad, pero también presentan dilemas éticos significativos. La comunidad científica y tecnológica debe trabajar de la mano con filósofos, legisladores y la sociedad en general para asegurar que estas tecnologías se desarrollen de manera responsable y equitativa, garantizando que los beneficios sean compartidos por todos y no solo por una minoría privilegiada.</p>
            </div>
            <div style="position: absolute; top: 10px; right: 10px;">
                <button style="padding: 5px 10px; background-color: #ff4d4d; color: white; border: none; border-radius: 4px; cursor: pointer;">Eliminar</button>
            </div>
        </div>
        <div class="comment" style="margin-top: 60px;">
            <img src="../img/usuarios/UserProfilePhoto.png" alt="Usuario Actual">
            <div class="comment-content">
                <div class="author">Usuario 3</div>
                <div class="date">2024-08-04</div>
                <textarea placeholder="Escribe tu comentario aquí..." rows="5" style="width: 95%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                <button style="margin-top: 10px; padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Publicar</button>
            </div>
        </div>
    </div>
</body>
</html>
