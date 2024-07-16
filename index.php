<?php
require_once 'config/config.php';
require_once 'helpers/funciones.php';

//RUTA /Administrador
$isAdmin = strpos($_SERVER['REQUEST_URI'], '/'.ADMIN)!== false ;

//Validación & URLS
$ruta= empty($_GET['url'])?'main/index' : $_GET['url'];

//Crear arreglo por URL
$array = explode('/',$ruta);

//Validar si nos encontramos en x ruta
if($isAdmin && (count($array) == 1||(count($array) == 2 && empty($array[1]))) && $array[0] == ADMIN){
    //Controlador
    $controller = 'Administrador';
    $metodo = 'login';
} else {
    $indiceUrl = ($isAdmin) ? 1 : 0;
    $controller = ucfirst($array[$indiceUrl]);
    $metodo = 'index';
}
//Validar Métodos URL Administrador
$metodoIndice = ($isAdmin) ? 2 : 1;
if (!empty($array[$metodoIndice]) && $array[$metodoIndice] !=''){
    $metodo = $array[$metodoIndice];
}
//Validar Paramateros URL 
$parametro = '';
$parametroIndice = ($isAdmin) ? 3 : 2;
if(!empty($array[$parametroIndice]) && $array[$parametroIndice] !=''){
    for ($i = $parametroIndice; $i  < count($array) ; $i++) { 
        $parametro .= $array[$i].',';
    }
    $parametro = trim($parametro,',');
}
//Llamar a Autoload
require_once 'config/app/Autoload.php';

//Validar Directorio de Controladores URL 
$dirControllers = ($isAdmin) ? 'controllers/admin/'.$controller.'.php':'controllers/main/'.$controller.'.php';
if (file_exists($dirControllers)) {
    require_once $dirControllers;
    $controller= new $controller();
    if (method_exists($controller, $metodo)) {
        $controller -> $metodo($parametro);
    } else{
        echo 'Metodo no existe';
    }
}else {
    echo 'Controlador no existe';}
?>