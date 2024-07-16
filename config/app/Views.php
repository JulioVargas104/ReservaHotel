<?php
class Views{
    public function getView($ruta, $vista, $data = ""){
        if ($ruta == 'main'){
            $vista = 'views/'.$vista.'.php';
        } else{
            $vista = 'views/'.$ruta.'/'.$vista.'.php';
        }
        require $vista;
    }
}
?> 