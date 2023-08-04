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
        $porPagina=2;
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
        $data['title'] = $data['producto']['pro_nombre'];
        $this->views->getView('principal', "shop-single", $data);
    }
    
  //VISTA categorias
  public function categorias($cat_id)
  {
      $data['productos']=$this->model->getProductosCat($cat_id);
      $data['title'] = 'Categorias';
      $this->views->getView('principal', "categorias", $data);
  }

  //VISTA contactos
  public function contactos()
  {
      $data['title'] = 'Contactos';
      $this->views->getView('principal', "contact", $data);
  }

}