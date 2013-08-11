<?php

require_once("cpt/cpt.php");
require_once("cpt/metabox_numero.php");
require_once("cpt/metabox_numero_anterior.php");
require_once("cpt/metabox_articulo.php");
require_once("cpt/metabox_seccion.php");
require_once("footilities/funcionesHTML.php");
require_once("footilities/wp_ext.php");

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);

?>
