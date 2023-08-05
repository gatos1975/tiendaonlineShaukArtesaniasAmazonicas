<?php
class Admin extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Acceso al Sistema';
        
        $this->views->getView('admin', "login", $data);
    }
    
    public function validar()
    {
        if (isset($_POST['email']) && isset($_POST['clave'])) {
            if (empty($_POST['email'])|| empty($_POST['clave'])) {
               $respuesta = array('msg' => 'todo los campos son requeridos', 'icono' => 'warning'); # code...
            } else {
                $data=$this->model->getUsuario($_POST['email']);
            if (empty($data)) {
                $respuesta = array('msg' => 'el correo no existe', 'icono' => 'warning'); 
            }else {
                if (password_verify($_POST['clave'],$data['clave'])) {
                    $_SESSION['email'] = $data['correo'];
                    $respuesta = array('msg' => 'datos correctos', 'icono' => 'success'); 
                } else {
                    $respuesta = array('msg' => 'contraseña incorrecta', 'icono' => 'warning'); 
                }
            }
        }
        }else {
                $respuesta= array('msg'=>'unn error desconocido','icono'=>'error'); # code..
        }
            echo json_encode ($respuesta, JSON_UNESCAPED_UNICODE);
            die();
    }
}
