<?php
    //header('Content-type: text/html; charset=utf-8');.
    define('DS', DIRECTORY_SEPARATOR);
    $servidor               =   "http://localhost";
    $sistema                =   "plantilla";
    $nombresistema          =   "Interfaz";

    $dominio                =   "@menpet.gob.ve";
    $bandera                =   "http://192.168.25.84/API_cintillo/imagenes/bandera-color.png";

    $link_pag_ministerio    =   "http:".DS.DS."www.minpet.gob.ve";
    // $nombre_ente            =   "Ministerio del Poder Popular de Petróleo";
    $nombre_ente            =   "Sistema realizado por Gustavo Mayora Ing. de Sistemas";

    define('RUTA_SISTEMA', str_replace('inc'.DS,'',dirname(__FILE__).DS));
?>
