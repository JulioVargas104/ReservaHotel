<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Perfil cliente';
        $this->views->getView('Main/clientes', 'index', $data);
    }
    public function salir()
    {
        session_destroy();
        redirect(Ruta_Main . 'login');
    }
}
