<?php
include_once './lib/config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $servername;?> | Home</title>
    <?php include './engine/corecss.php' ?>
</head>

<body>
    <?php include './template/navbar.php';?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 bg-light p-3" style="width: 70;padding-right:0 !important;">
                <div class="alert alert-secondary" role="alert">
                    REGRESAMOS

                    Después de muuuucho tiempo estamos seguros de quitar whitelist, el servidor estará operativo
                    nuevamente el día Martes 10 de agosto!

                    Aprovecho este anuncio para felicitar a @LilFranc1s#1355 por su ascenso!

                    Los usuarios con Rango podrán entrar desde hoy sábado ||(23:30 Hora :flag_es: )|| para ayudarnos a
                    testear y revisar comandos que no funcionen, faltas de permisos etc.

                    Puntos positivo de tardarnos tanto, pudimos actualizar la mayoría de plugins, había algunos que
                    pedían borrar la configuración para evitar errores, solucionamos los errores de compatibilidad con
                    las versiones 1.17+ y además de eso agregamos soporte para Minecraft Bedrock

                    Tuvimos que rehacer el Lobby, Prelobby y el survival, recuerden que al principio el Survival será un
                    survival Medio "Vanilla", iremos agregando plugins uno a uno, obviamente Construcciones nuevas para
                    las modalidades!

                    Hemos adelantado algunas cosas en OneBlock, no tiene fecha de apertura pero será nuestra segunda
                    modalidad, hablando de modalidades, solo nos dedicaremos a Survival y Próximamente OneBlock,
                    TheBridge, KBFFA y demás fueron removidas

                    Nuevamente vuelve a estar operativa la página web, consigo la tienda, si notan algún error en la
                    tienda pueden reportarselo a @CoolDreams que el está a cargo de la web

                    Un saludo para todos de parte de la Cúpula Directiva
                </div>
            </div>
            <div class="col-4 bg-light p-3" style="width: 25%;">
                <iframe class="container ratio ratio-1x1"
                    src="https://discord.com/widget?id=838575305269575730&theme=dark" width="400px" height="400px"
                    allowtransparency="true" frameborder="0"
                    sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"
                    style="margin: 0px 0px 0px 0px;padding: 0px !important;"></iframe>
            </div>
        </div>
    </div>
    <?php include './template/footer.php';?>
</body>

</html>