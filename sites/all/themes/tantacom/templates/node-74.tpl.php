<?php //page de Clientes ?>
        <?php
            //llamada a vista de soluciones
            $xview = views_get_view(  'vistaPaginas' ) or die( 'No "status" view.' ) ;
            echo $xview->execute_display( 'page_3' ) ;
?>
