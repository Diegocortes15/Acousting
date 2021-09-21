<footer>
        <div class="contacto">
            <section class="informacion contenedor">

                <p><i class="fas fa-map-marker-alt"></i>Cra. 1h ## 123-45 <br>Bogotá - Colombia</p>

                <h4>Teléfono</h4>
                <p><i class="fas fa-phone-alt"></i>(1) 2345678</p>
                <p><i class="fab fa-whatsapp"></i>(1) 2345678</p>

                <h4>Email</h4>
                <p><i class="far fa-envelope"></i>consultoria@ejemplo.com</p>

                <h4>Síguenos</h4>
                <p>Facebook Acousting</p>
                <p>Instagram Acousting</p>
                <p>Twitter Acousting</p>
            </section>

            <section class="formulario-contacto">
                <div class="contenedor">
                    <h3>Contáctanos</h3>
                    <form action="">

                        <input type="text" id="nombre" placeholder="Nombre" required>
                        <input type="text" id="apellido" placeholder="Apellido" required>
                        <input type="text" id="email" placeholder="Email" required>
                        <input type="tel" id="telefono" placeholder="Teléfono" required>
                        <textarea type="text" class="mensaje" id="mensaje" placeholder="Mensaje" required></textarea>
                        <input class="boton2 fw-700 enviar-formulario" type="submit" value="enviar">
                    </form>
                </div>

            </section>
        </div>
        <?php
        $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        if($host == 'acousting.herokuapp.com/contacto.php') { ?>

        <div id="ubicacion-acousting" class="ubicacion-acousting"></div>

            <!-- <section id="ubicacion-acousting" class="ubicacion-acousting leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag">
                <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"></div>
            </section> -->

        <?php } ?>
        <!-- contacto -->
        <p class="copy">Todos los derechos reservados 2021 &copy</p>
    </footer>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script src="js/main.js"></script>
</body>

</html>