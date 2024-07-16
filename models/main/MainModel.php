<?php
class MainModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    //SQL Sliders
    public function getSliders()
    {
        return $this->selectAll("SELECT*FROM sliders");
    }
    //SQL Habitaciones
    public function getHabitaciones()
    {
        return $this->selectAll("SELECT*FROM habitaciones WHERE estado = 1 ");
    }
    
}
