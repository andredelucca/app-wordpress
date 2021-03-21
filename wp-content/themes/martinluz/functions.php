<?php 
#ocultar a barra de ferramentas
function ocultarBarra() {
    return false;
}
add_filter("show_admin_bar", "ocultarBarra");



?>