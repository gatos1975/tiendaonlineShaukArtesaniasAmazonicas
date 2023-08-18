<?php
class PrincipalModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    //obtener productos para index
    public function getProducto($pro_id)
    {
        $sql="SELECT p.*, c.cat_nombre FROM productos p INNER JOIN categorias c ON c.cat_id=p.pro_catid WHERE p.pro_id=$pro_id";
        return $this->select($sql);
    }
    //Paginacion
    public function getProductos($desde,$porPagina)
    {
        $sql="SELECT * FROM productos LIMIT $desde, $porPagina";
        return $this->selectall($sql);
    }
    //obtener total de productos
    public function getTotalProductos()
    {
        $sql="SELECT count(*) AS total FROM productos";
        return $this->select($sql);
    }
    //productos relacionados con la categoria
    public function getProductosCat($cat_id,$desde,$porPagina)
    {
        $sql="SELECT * FROM productos WHERE pro_catid=$cat_id LIMIT $desde, $porPagina";
        return $this->selectall($sql);
    }
    //obtener total de productos relacionados con la categiria
    public function getTotalProductosCat($cat_id)
    {
        $sql="SELECT count(*) AS total FROM productos WHERE pro_catid=$cat_id";
        return $this->select($sql);
    }
    //productos relacionados aleatorios
    public function getAleatorios($cat_id,$pro_id)
    {
        $sql="SELECT * FROM productos WHERE pro_catid=$cat_id AND pro_id != $pro_id ORDER BY RAND() LIMIT 10";
        return $this->selectall($sql);
    }
}
 
?>