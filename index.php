<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header.php'; ?>


    <section class="recetas">
        <h2>Pagina de Inicio</h2>

        <ul class="tabs">
            <li>CARRUSEL DE IMÁGENES</li>
            <li>CERTIFICACIONES</li>
            <li>ADQIRIR PRODUCTO</li>
            <li>COLABORADORES</li>
            <li>RECETAS</li>
        </ul>

        <div class="contenedor">

            <div class="anadir">
                <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirInicioCarrusel()" class="manita"></figure>
                <p>Agregar Imagen</p>
            </div>

            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img2.jpg" alt="img2" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img3.jpg" alt="img3" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

        </div>

        <div class="contenedor">
            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img2.jpg" alt="img2" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img3.jpg" alt="img3" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

        </div>

    </section>
</body>

</html>