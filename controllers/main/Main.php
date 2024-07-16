<?php
class Main extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Página principal';
        //Traer Sliders
        $data['sliders'] = $this->model->getSliders();
        //Traer Habitaciones
        $data['habitaciones'] = $this->model->getHabitaciones();
        $this->views->getView('Main', 'index', $data);
    }
}
