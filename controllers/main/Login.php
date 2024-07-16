<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Login';
        $data['subtitle'] = 'Inicio de Sesión';
        $this->views->getView('Main', 'login', $data);
    }
    public function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (validarCampos(['dni', 'clave'])) {
                $dni = strClean($_POST['dni']);
                $clave = strClean($_POST['clave']);
                //VERIFICAR ACCESO
                $verificar = $this->model->validarAcceso($dni);
                if (empty($verificar)) {
                    $res = ['tipo' => 'warning', 'msg' => 'El DNI no existe.'];
                } else {
                    if (password_verify($clave, $verificar['clave'])) {
                        # CREAR SESION
                        crearSession([
                            'id_usuario' => $verificar['id'],
                            'dni' => $verificar['dni'],
                            'correo' => $verificar['correo'],
                            'nombre' => $verificar['nombre'] . ' ' . $verificar['apellido'],
                            'rol' => $verificar['rol']
                        ]);
                        $res = ['tipo' => 'success', 'msg' => '¡Bienvenido!'];
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'Contraseña incorrecta.'];
                    }
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'Todos los campos son requeridos.'];
            }
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
