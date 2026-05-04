<html lang="es">
<head>
    <title>Categoría - ITINNews</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div style="width: 100%; height:15%; float: left;" class="cabecera">
        <div style="width: 100%; height:15%; float: left;" class="cabecera"></div>
        <div style="width: 5%; height:1px; float: left;" class="cabecera"></div>
        <div style="width: 95%; height:40%; float: left;" class="cabecera">
            <p style="color: white; font-size: 20px;">ITINNews</p>
        </div>
        <div style="width: 100%; height:20%; float: left;" class="barranav"></div>
        <div style="width: 100%; height:24%; float: left;" class="barranav">
            <div style="width: 5%; height:100%; float: left;" class="barranav"></div>
            <a href="index.html"><button class="navboton">Inicio</button></a>
            <a href="noticia.php"><button class="navboton">Noticias</button></a>
            <a href="contacto.html"><button class="navboton">Contacto</button></a>
            <a href="categorias.html"><button class="navboton">Categorias</button></a>
        </div>
    </div>

    <div style="width: 100%; height:78%; background-color: rgb(231, 234, 235); float: left;">

<?php
    $categoria = $_GET['cat'];
    $nombre = ucwords(str_replace('-', ' ', $categoria));

    echo "<center style='color: rgb(52, 61, 94); font-size: 25px; padding-top: 20px;'><b>$nombre</b></center>";

    $noticias = [
        'inteligencia-artificial' => [
            ['titulo' => 'GPT-5 llega con razonamiento multimodal', 'resumen' => 'OpenAI lanza su modelo más avanzado con capacidades de razonamiento visual y textual sin precedentes.'],
            ['titulo' => 'Google Gemini Ultra 2 supera benchmarks', 'resumen' => 'El nuevo modelo de Google establece récords en pruebas de lógica y comprensión lectora.'],
        ],
        'hardware' => [
            ['titulo' => 'AMD: Nueva serie Ryzen AI 400 y MI400', 'resumen' => 'AMD ha dado un golpe sobre la mesa en el CES 2026 con lanzamientos enfocados en IA local y centros de datos.'],
            ['titulo' => 'NVIDIA prepara la arquitectura Vera Rubin', 'resumen' => 'Mientras Blackwell Ultra domina el mercado, NVIDIA ya mueve piezas para su próxima generación.'],
        ],
        'ciberseguridad' => [
            ['titulo' => 'Nuevo ransomware ataca empresas en Latinoamérica', 'resumen' => 'Expertos recomiendan actualizar sistemas y realizar respaldos de forma inmediata.'],
            ['titulo' => 'Las passkeys reemplazan a las contraseñas', 'resumen' => 'Los grandes sistemas operativos adoptan llaves de acceso como estándar de seguridad.'],
        ],
        'videojuegos' => [
            ['titulo' => 'GTA VI confirma su fecha de lanzamiento', 'resumen' => 'Rockstar anuncia detalles del juego más esperado y confirma la fecha oficial de salida.'],
            ['titulo' => 'Los mejores juegos indie del 2026', 'resumen' => 'Repasamos los títulos independientes que conquistaron a la crítica este año.'],
        ],
    ];

    if (isset($noticias[$categoria])) {
        foreach ($noticias[$categoria] as $noticia) {
            echo "<div class='tarjeta'>";
            echo "<h2 style='color: rgb(52, 61, 94);'>" . $noticia['titulo'] . "</h2>";
            echo "<p style='color: rgb(52, 61, 94);'>" . $noticia['resumen'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<div class='tarjeta'><p style='color: rgb(52, 61, 94);'>No hay noticias para esta categoría.</p></div>";
    }
?>

    </div>
    <div style="width: 100%; height:7%; background-color: rgb(52, 61, 94); float: left;">
        <p style="color: white; font-size: 15px; text-align: center;">2026 | ITINNews | Todos los derechos reservados</p>
    </div>

</body>
</html>