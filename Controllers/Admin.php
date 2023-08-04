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
                # code...
            }
        }else {
                $respuesta= array('msg'=>'unn error desconocido','icono'=>'warning'); # code..
        }
            echo json_encode ($respuesta);
            die();
    }
}
