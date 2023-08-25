<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
       
    }
    //VISTA ABOUT
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('Principal', "about", $data);
    }
    //VISTA shop
    public function shop($page)
    {
        $pagina=(empty($page)) ? 1 : $page ;
        $porPagina=5;
        $desde=($pagina - 1) * $porPagina;
        $data['title'] = 'Nuestros Productos';
        $data['productos'] = $this->model->getProductos($desde,$porPagina);
        $data['pagina'] = $pagina;
        $total=$this->model->getTotalProductos();
        $data['total']=ceil($total['total'] / $porPagina);
        $this->views->getView('principal', "shop", $data);
    }
    //VISTA detail
    public function detail($pro_id)
    {
        $data['producto']=$this->model->getProducto($pro_id);
        $cat_id = $data['producto']['pro_catid'];
        $data['relacionados']=$this->model->getAleatorios($cat_id, $data['producto']['pro_id']);
        $data['title'] = $data['producto']['pro_nombre'];
        $this->views->getView('principal', "shop-single", $data);
    }
    
  //VISTA categorias
  public function categorias($datos)
  {
    $cat_id=1;
    $page=1;
    $array=explode(',',$datos);
    if (isset($array[0])){ 
        if (!empty($array[0])) {
            $cat_id=$array[0];
        }
    }
    if (isset($array[1])){ 
        if (!empty($array[1])) {
            $page=$array[1];
        }
    }
    
        $pagina=(empty($page)) ? 1 : $page ;
        $porPagina=5;
        $desde=($pagina - 1) * $porPagina;
        $data['pagina'] = $pagina;
        $total=$this->model->getTotalProductosCat($cat_id);
        $data['total']=ceil($total['total'] / $porPagina);


      $data['productos']=$this->model->getProductosCat($cat_id, $desde,$porPagina);
      $data['title'] = 'Categorias';
      $data['cat_id'] = $cat_id;
      $this->views->getView('principal', "categorias", $data);
  }

  //VISTA contactos
  public function contactos()
  {
      $data['title'] = 'Contactos';
      $this->views->getView('principal', "contact", $data);
  }
    //VISTA lista deseos
    public function deseo()
    {
        $data['title'] = 'Tu lista de deseo';
        $this->views->getView('principal', "deseo", $data);
    }
    //obtener producto a partir de la lista de deseo
    public function listaDeseo()
    {
        $datos = file_get_contents('php://input');
        $json=json_decode($datos, true);
        $array['productos'] = array();
        foreach ($json as $producto) {
        //print_r($producto);
            $result = $this->model->getProducto($producto['idProducto']);
            $data['pro_id'] = $result['pro_id'];
            $data['pro_nombre'] = $result['pro_nombre'];
            $data['pro_precio'] = $result['pro_precio'];
            $data['pro_cantidad'] = $producto['cantidad'];
            $data['pro_imagen'] = $result['pro_imagen'];
            array_push($array['productos'], $data);
        }
        $array['moneda']=MONEDA;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();    
    }
     //obtener producto a partir de la lista de Carrito
    public function listaCarrito()
    {
        $datos = file_get_contents('php://input');
        $json=json_decode($datos, true);
        $array['productos'] = array();
        $total = 0.00;
        foreach ($json as $producto) {
        //print_r($producto);
            $result = $this->model->getProducto($producto['idProducto']);
            $data['pro_id'] = $result['pro_id'];
            $data['pro_nombre'] = $result['pro_nombre'];
            $data['pro_precio'] = $result['pro_precio'];
            $data['pro_cantidad'] = $producto['cantidad'];
            $data['pro_imagen'] = $result['pro_imagen2'];
            $subTotal = $result['pro_precio'] * $producto['cantidad'];
            $data['pro_subTotal'] = number_format($subTotal,2);
            array_push($array['productos'], $data);
            $total+=$subTotal;
        }
        $array['total'] = number_format($total,2);
        $array['moneda'] = MONEDA;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();    
    }

}