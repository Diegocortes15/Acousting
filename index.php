<?php
    include_once 'include/functions/functions.php';
    include_once 'include/templates/header.php';
?>

    <h1>Acousting</h1>
    <a href="https://api.whatsapp.com/send?phone=+57 311 2482055&text=Cliente Acousting" class="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <div class="body-site">
        <header>
            <?php include_once 'include/templates/barra.php'; ?>
            <div class="hero">
                <p class="contenedor fw-700">Las mejores <span>soluciones<br>Acústicas</span> para tus proyectos</p>
            </div>
        </header>
        <!-- Header -->
        <main class="productos-servicios contenedor">
            <h2>Nuestros Servicios</h2>
            <div class="servicios">
                <div class="servicio">
                    <div class="icono-servicio">
                        <i class="fas fa-pencil-alt"></i>
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4>Diseño y consultoria acústica</h4>
                </div>
                <div class="servicio">
                    <div class="icono-servicio">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h4>Mediciones acústicas</h4>
                </div>
                <div class="servicio">
                    <div class="icono-servicio">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h4>Visitas técnicas</h4>
                </div>
            </div>
            <a class="boton3 fw-700" href="servicios.php">Ver más</a>
        </main>
        <!-- Sección de Servicios -->
        <section class="nosotros">
            <div class="contenedor">
                <h2>Quiénes Somos</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iusto nisi quo qui? At animi tempora impedit autem voluptas aliquam atque in hic maiores a, repellat, eum ut similique accusantium!
                </p>
                <a class="boton" href="quienes-somos.php">Ver más</a>
            </div>
        </section>
        <!-- Sección de Nosotros -->
    </div>
    <?php
        include_once 'include/templates/footer.php';
    ?>