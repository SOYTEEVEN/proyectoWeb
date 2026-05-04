
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal - ITINNews</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color: rgb(231, 234, 235); margin: 0;">
    
    <!-- Navbar -->
    <div style="width: 100%; height:15% ; float: left; background-color: rgb(40, 50, 82);">
        <div style="width: 5%; height:1px ; float: left; background-color: rgb(40, 50, 82);"></div>
        <div style="width: 95%; height:40% ; float: left; background-color: rgb(40, 50, 82);">
            <p style="color: white; font-size: 20px; margin-top: 15px;">ITINNews</p>
        </div>
        <div style="width: 100%; height:20% ; float: left; background-color: rgb(40, 50, 82);"></div>
        <div style="width: 100%; height:24% ; float: left; background-color: rgb(40, 50, 82);">
            <div style="width: 5%; height:100% ; float: left; background-color: rgb(40, 50, 82);"></div>
            <a href="index.html" style="text-decoration: none;"><button style="background-color: rgb(40, 50, 82); border: 0px; color: white; font-size: 15px; padding: 10px 15px; cursor: pointer;">Inicio</button></a>
            <a href="noticias.html" style="text-decoration: none;"><button style="background-color: rgb(40, 50, 82); border: 0px; color: white; font-size: 15px; padding: 10px 15px; cursor: pointer;">Noticias</button></a>
            <a href="nosotros.html" style="text-decoration: none;"><button style="background-color: rgb(40, 50, 82); border: 0px; color: white; font-size: 15px; padding: 10px 15px; cursor: pointer;">Nosotros</button></a>
            <a href="contacto.html" style="text-decoration: none;"><button style="background-color: rgb(40, 50, 82); border: 0px; color: white; font-size: 15px; padding: 10px 15px; cursor: pointer;">Contacto</button></a>
        </div>
    </div>

    <!-- Título de Sección -->
    <div style="width: 100%; background-color: rgb(52, 61, 94); float: left; padding-bottom: 20px;">
        <p style="color: white; font-size: 25px; text-align: center; padding-top: 10px; margin-bottom: 5px;"><b>Panel Interactivo</b></p>
    </div>

    <!-- Contenedor Principal PHP -->
    <div style="width: 100%; height:auto ;background-color: rgb(231, 234, 235); float: left; padding-bottom: 50px;">
        
        <div style="background-color: rgb(255, 255, 255); width: 90%; height: auto; margin-left: 5%; margin-right: 5%; margin-top: 5%; border-radius: 5px; padding: 30px; box-sizing: border-box; float: left; text-align: center;">
            <?php
                // Verificamos si existe la variable 'nombre' en la URL
                if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
                    $nombre_desarrollador = $_GET['nombre'];

                    echo "<h1 style='color: rgb(52, 61, 94); margin-bottom: 10px;'>¡Gracias por tu mensaje!</h1>";
                    echo "<p style='color: rgb(52, 61, 94); font-size: 18px;'>Has enviado un agradecimiento a <b>" . $nombre_desarrollador . "</b> por su aporte al proyecto ITINNews.</p>";
                } else {
                    // Mensaje por defecto si se entra directo al archivo
                    echo "<h1 style='color: rgb(52, 61, 94); margin-bottom: 10px;'>¡Bienvenido al Panel Interactivo!</h1>";
                    echo "<p style='color: rgb(52, 61, 94); font-size: 18px;'>Desde aquí puedes explorar las diferentes secciones de nuestra plataforma de noticias y conocer el trabajo del equipo.</p>";
                }
            ?>
            
            <br>
            <hr style="border: 1px solid rgb(231, 234, 235); width: 80%;">
            <br>
            
            <h3 style="color: rgb(52, 61, 94);">Explora el Proyecto</h3>
            <a href="noticias.html" style="color: rgb(120, 142, 214); text-decoration: none; font-weight: bold; font-size: 18px; margin: 10px 20px; display: inline-block;">📰 Noticias</a>
            <a href="categorias.html" style="color: rgb(120, 142, 214); text-decoration: none; font-weight: bold; font-size: 18px; margin: 10px 20px; display: inline-block;">🏷️ Categorías</a>
            <a href="contacto.html" style="color: rgb(120, 142, 214); text-decoration: none; font-weight: bold; font-size: 18px; margin: 10px 20px; display: inline-block;">✉️ Contacto</a>
            <br><br>
            <a href="nosotros.html" style="background-color: rgb(120, 142, 214); color: white; border: none; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; font-size: 16px;">Volver a Nosotros</a>
        </div>

    </div>

    <!-- Footer -->
    <div style="width: 100%; height:10% ;background-color: rgb(52, 61, 94); float: left; padding: 20px 0;">
        <p style="color: white; font-size: 15px; text-align: center; margin: 0;">2026 | ITINNews | Todos los derechos reservados</p>
    </div>

</body>
</html>