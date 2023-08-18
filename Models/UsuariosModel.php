<?php
class UsuariosModel extends Query{
    public function _construct()
    {
        parent::_construct();
    }
    public function getUsuarios()
    {
        $sql = "SELECT Usu_id, usu_nombres, usu_apellidos, usu_correo, usu_perfil FROM usuarios";
        return $this->selectAll($sql);
    }
}