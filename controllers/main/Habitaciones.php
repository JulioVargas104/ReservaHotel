<?php
class Habitaciones extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Habitaciones';
        $data['subtitle'] = 'Nuestras Habitaciones de Lujo';
        $this->views->getView('Main/habitaciones','index', $data);
    }
}
?>