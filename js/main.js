(function() {
    "use strict";

    document.addEventListener('DOMContentLoaded', function() {


        /** Mapa Contacto */
        if (document.querySelector('#ubicacion-acousting')) {
            var map = L.map('ubicacion-acousting').setView([4.751371, -74.029935], 16.4);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([4.751371, -74.029935]).addTo(map)
                .bindPopup('Universidad de San Buena Ventura')
                .openPopup();
        }

        //Validar Formulario

        //Boton para enviar formulario
        document.querySelector('.enviar-formulario').addEventListener('click', enviarFormulario);


        function enviarFormulario(e) {
            e.preventDefault();

            const nombre = document.querySelector("#nombre").value;
            const apellido = document.querySelector("#apellido").value;
            const email = document.querySelector("#email").value;
            const telefono = document.querySelector("#telefono").value;
            const mensaje = document.querySelector("#mensaje").value;

            if (nombre === '' || apellido === '' || email === '' || telefono === '' || mensaje === '') {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Todos los campos son obligatorios',
                    showConfirmButton: false,
                    timer: 2700
                })
            } else {
                if ((validarEmail(email))) {
                    if (validarTelefono(telefono)) {

                        let datos = new FormData();
                        datos.append('nombre', nombre);
                        datos.append('apellido', apellido);
                        datos.append('email', email);
                        datos.append('telefono', telefono);
                        datos.append('mensaje', mensaje);
                        datos.append('accion', 'contacto');

                        //crear llamado a Ajax
                        var xhr = new XMLHttpRequest();

                        //abrir la conexion
                        xhr.open('POST', 'include/models/modelo-contacto.php', true);

                        //retorno de datos
                        xhr.onload = function() {
                            if (this.status === 200) {
                                let respuesta = JSON.parse(xhr.responseText);
                                let resultado = respuesta.respuesta;

                                if (resultado === 'correcto') {
                                    //fue exitoso
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Su consulta se ha enviado correctamente',
                                        showConfirmButton: false,
                                        timer: 2700
                                    })
                                    document.querySelector('.formulario-contacto form').reset();
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'No logramos enviar su mensaje, por favor inténtalo más tarde'
                                    })
                                }
                                console.log(respuesta);
                            }
                        }
                        xhr.send(datos);


                    }
                }
            }
        }

        function validarEmail(email) {
            let condicionCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            if (!condicionCorreo.test(email)) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Email no valido',
                    showConfirmButton: false,
                    timer: 2700
                })
                return false;
            } else {
                return true;
            }
        }

        function validarTelefono(telefono) {
            let condicionTelefono = /^(\+?\d{2}(\s)?)?\d{7,10}$/;
            if (!condicionTelefono.test(telefono)) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Numero teléfonico no valido',
                    showConfirmButton: false,
                    timer: 2700
                })
                return false;
            } else {
                return true;
            }
        }

    }); //DOM CONTENT LOADED
})();

$(function() {

    // Agregar clase a menu

    $('body.pagina-index .navegacion a:contains("Inicio")').addClass('activo');
    $('body.pagina-servicios .navegacion a:contains("Servicios")').addClass('activo');
    $('body.pagina-quienes-somos .navegacion a:contains("Nosotros")').addClass('activo');
    $('body.pagina-contacto .navegacion a:contains("Contáctenos")').addClass('activo');

    // Menu fijo

    var windowWidth = $(window).width() + 17;

    $(window).resize(function() {
        windowWidth = $(window).width() + 17;
        var scroll = $(window).scrollTop();

        if (windowWidth < 768) {
            if (scroll > $('.logo-barra').innerHeight()) {
                $('.barra-menu').addClass('fixed');
                $('body').css({ 'margin-top': $('.barra-menu').innerHeight() + 'px' });
            } else {
                $('.barra-menu').removeClass('fixed');
                $('body').css({ 'margin-top': '0px' });
            }
        } else {
            $('.barra-menu').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        $(window).resize(function() {
            windowWidth = $(window).width() + 17;
        });

        if (windowWidth < 768) {
            if (scroll > $('.logo-barra').innerHeight()) {
                $('.barra-menu').addClass('fixed');
                $('body').css({ 'margin-top': $('.barra-menu').innerHeight() + 'px' });
            } else {
                $('.barra-menu').removeClass('fixed');
                $('body').css({ 'margin-top': '0px' });
            }
        } else {
            $('.barra-menu').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }

    });

    // Menu responsive

    $('.menu-movil').on('click', function() {
        $('.navegacion').slideToggle();
        $('.menu-movil i').toggleClass("fa-bars fa-times");
    });
});