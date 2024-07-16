<?php
class Contactanos extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Contáctanos';
        $data['subtitle'] = 'Nuestro Contacto';
        $this->views->getView('Main/contactanos','index', $data);
    }
}
?>