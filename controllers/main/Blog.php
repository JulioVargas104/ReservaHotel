<?php
class Blog extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Blog';
        $data['subtitle'] = 'Nuestras Publicaciones';
        $this->views->getView('Main/blog','index', $data);
    }
}
?>