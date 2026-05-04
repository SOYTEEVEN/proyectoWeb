

<html>
<head>
    <title>Noticias</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div style="width: 100%; height:10%; background-color: rgb(52, 61, 94); float: left;"></div>

    <div style="width: 100%; height:auto; background-color: rgb(231, 234, 235); float: left;">
        <table style="width: 100%;">
            <tr>
                <td style="width: 50%; vertical-align: top;">
    <b style="color: rgb(52, 61, 94); font-size: 25px; padding-top: 10px;">Noticias de Nuestra pagina</b>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">Dominaran las vias los autos CHINOS</h2>
                        <p style="color: rgb(52, 61, 94);">Te explicamos como los autos autonomos chinos podrian llegar a dominar las carreteras de todo el mundo.</p>
            <a href="https://cnnespanol.cnn.com/2026/04/25/ciencia/video/autos-autonomos-chinos-trax">Ver mas</a>
        </div>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">Se va uno de los buscadores mas recordados de Internet</h2>
                        <p style="color: rgb(52, 61, 94);">Ask.com dice adios.</p>
                        <a href="https://www.infobae.com/tecno/2026/05/04/askcom-dice-adios-se-va-uno-de-los-buscadores-mas-recordados-de-internet/">Ver mas</a>
                    </div>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">Los equipos del hogar que conviene reiniciar una vez por semana</h2>
                        <p style="color: rgb(52, 61, 94);">Cuando aparecen fallos de conexion o perdida de rendimiento, un reinicio suele resolver el inconveniente.</p>
                        <a href="https://www.infobae.com/tecno/2026/05/03/los-equipos-del-hogar-que-conviene-reiniciar-una-vez-por-semana-para-evitar-problemas/">Ver mas</a>
                    </div>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">Que telefonos perderan WhatsApp en mayo de 2026</h2>
                        <p style="color: rgb(52, 61, 94);">La nueva actualizacion elimina el soporte para modelos antiguos de Android e iPhone.</p>
                        <a href="https://www.infobae.com/tecno/2026/05/03/que-telefonos-perderan-whatsapp-en-mayo-de-2026-y-como-saber-si-tu-dispositivo-esta-en-riesgo/">Ver mas</a>
        </div> 
                </td>

                <td style="width: 50%; vertical-align: top;">
                    <b style="color: rgb(52, 61, 94); font-size: 25px; padding-top: 10px;">Noticias tecnologicas</b>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">La inteligencia artificial llega a mas dispositivos</h2>
                        <p style="color: rgb(52, 61, 94);">Cada vez mas celulares, computadoras y aplicaciones incluyen herramientas de inteligencia artificial.</p>
                        <a href="https://www.xataka.com/tag/inteligencia-artificial">Ver mas</a>
        </div>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">Nuevos avances en procesadores</h2>
                        <p style="color: rgb(52, 61, 94);">Las empresas de hardware siguen creando chips mas rapidos y eficientes para computadoras y servidores.</p>
                        <a href="https://www.xataka.com/tag/procesadores">Ver mas</a>
        </div>  

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">La ciberseguridad gana importancia</h2>
                        <p style="color: rgb(52, 61, 94);">Proteger los datos personales se ha vuelto una necesidad para usuarios, empresas e instituciones.</p>
                        <a href="https://www.xataka.com/tag/seguridad-informatica">Ver mas</a>
                    </div>

                    <div class="tarjeta">
                        <h2 style="color: rgb(52, 61, 94);">La tecnologia 5G sigue creciendo</h2>
                        <p style="color: rgb(52, 61, 94);">La conexion 5G permite mayor velocidad en internet movil y mejora el uso de servicios digitales.</p>
                        <a href="https://www.xataka.com/tag/5g">Ver mas</a>
        </div>  
                    </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%; height:auto; background-color: rgb(52, 61, 94); float: left; padding-top: 20px; padding-bottom: 20px;">
        <center>
            <p style="color: white; font-size: 18px;">DESEAS QUE TE LLEGUE INFORMACION A TU CORREO ELECTRONICO?</p>
             
             <form action="" method="post">
                <label style="color: white;">Nombre de la persona:</label>
                <input type="text" name="nombre">

                <label style="color: white;">Correo:</label>
                <input type="text" name="correo">

                <input type="submit" name="boton" value="Enviar">
             </form>
        </center>
    </div>
       
</body>
</html>
<?php
if (isset($_POST["boton"])) {
    echo "<script>alert('Mensaje enviado');</script>";
}
?>