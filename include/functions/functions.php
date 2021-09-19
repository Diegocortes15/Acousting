<?php
    //Obtiene la pagina actual que se ejecuta
    function obtenerPaginaAcutal(){
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        return $pagina;
    }
?>