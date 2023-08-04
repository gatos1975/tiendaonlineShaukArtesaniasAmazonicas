<?php
class HomeModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategorias(Type $var=null)
    {
      $sql="SELECT * FROM categorias";
      return $this->selectAll($sql);  
    }
    public function getProductos()
    {
      $sql="SELECT * FROM productos ORDER BY pro_nombre";
      return $this->selectAll($sql);  
    }
}
 
?>