<?php
class LoginModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function validarAcceso($dni)
    {
        $sql = "SELECT*FROM usuarios WHERE estado = 1 AND (dni = '$dni' OR correo = '$dni')";
        return $this->select($sql);
    }
}
