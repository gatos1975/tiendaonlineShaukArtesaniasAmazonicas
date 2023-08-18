<?php include_once 'views/template/header-principal.php'; ?>


    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

        
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <!--mostrar productos en shop -->   
                <?php foreach($data['productos'] as $producto) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['pro_imagen'];?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white btnAddDeseo" href="#" prod="<?php echo $producto['pro_id'];?>"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['pro_id'];?>"><i class="fas fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="#" class="h3 text-decoration-none"><?php echo $producto['pro_nombre'];?></a>
                               
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?php echo MONEDA . ' ' . $producto['pro_precio'];?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                    <?php
                    $anterior=$data['pagina'] - 1;
                    $siguiente=$data['pagina'] + 1;
                    $url=BASE_URL.'principal/shop/';
                    if ($data['pagina']>1 ){
                       echo '<li class="page-item">
                       <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="'.$url . $anterior.'">Anterior</a>
                   </li>';
                    }
                    if ($data['total']>=$siguiente) {
                        echo '<li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="'.$url . $siguiente.'">Siguiente</a>
                    </li>'; # code...
                    }
                    ?>
                    </ul>
                </div>
                </div>

                </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
  
    <!--End Brands-->

<?php include_once 'views/template/footer-principal.php'; ?>
</body>

</html>