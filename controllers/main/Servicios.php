<?php
class Servicios extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Servicios';
        $data['subtitle'] = 'Nuestros Servicios';
        $this->views->getView('Main/Servicios','index', $data);
    }
}
?>