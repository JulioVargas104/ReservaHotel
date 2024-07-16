<?php
class Registro extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Registro';
        $data['subtitle'] = 'Registrarse';
        $this->views->getView('Main', 'registro', $data);
    }
    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (validarCampos(['nombre', 'apellido', 'dni', 'correo', 'clave', 'confirmar', 'chb2'])) {
                $nombre = strClean($_POST['nombre']);
                $apellido = strClean($_POST['apellido']);
                $dni = strClean($_POST['dni']);
                $correo = strClean($_POST['correo']);
                $clave = strClean($_POST['clave']);
                $confirmar = strClean($_POST['confirmar']);
                $hash = password_hash($clave, PASSWORD_DEFAULT);
                $rol = 2;
                if ($clave == $confirmar) {
                    //VERIFICAR METODO UNIQUE
                    $verificarUser = $this->model->validarUnique('dni', $dni, 0);
                    if (empty($verificarUser)) {
                        $verificarCorreo = $this->model->validarUnique('correo', $correo, 0);
                        if (empty($verificarCorreo)) {
                            $data = $this->model->Registrarse($nombre, $apellido, $dni, $correo, $hash, $rol);
                            if ($data > 0) {
                                crearSession([
                                    'id_usuario' => $data,
                                    'dni' => $dni,
                                    'correo' => $correo,
                                    'nombre' => $nombre . ' ' . $apellido,
                                    'rol' => $rol
                                ]);
                                $res = ['tipo' => 'success', 'msg' => 'DNI Registrado.'];
                            } else {
                                $res = ['tipo' => 'warning', 'msg' => 'Error al Registrarse.'];
                            }
                        } else {
                            $res = ['tipo' => 'warning', 'msg' => 'El correo ya existe.'];
                        }
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'El DNI ya existe.'];
                    }
                } else {
                    $res = ['tipo' => 'warning', 'msg' => 'Las contraseñas no coinciden.'];
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'Todos los campos son requeridos.'];
            }
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
