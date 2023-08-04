<?php include_once 'views/template-principal/header.php'; ?>


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Shauk</b> Tienda Online</h1>
                                <h3 class="h2">Artesanías de la Nacionalidad Shuar</h3>
                                <p>
                                "Descubre la magia ancestral de la Amazonia con nuestras auténticas artesanías Shuar, elaboradas con amor y sabiduría, para llevar la esencia de la selva a tu hogar." 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                            <h1 class="h1 text-success"><b>Shauk</b> Tienda Online</h1>
                                <h3 class="h2">Artesanías de la Nacionalidad Shuar</h3>
                                <p>
                                "Adorna tu vida con la belleza única de las artesanías Shuar, creadas a mano con materiales naturales y diseños que narran la historia y tradiciones de la selva amazónica."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                            <h1 class="h1 text-success"><b>Shauk</b> Tienda Online</h1>
                                <h3 class="h2">Artesanías de la Nacionalidad Shuar</h3>
                                <p>
                                "Descubre el talento y el legado cultural del empoderado grupo de mujeres Shuar en la Amazonia ecuatoriana, cuyas artesanías tejen un vínculo auténtico entre tradiciones ancestrales y la inspiración contemporánea."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias</h1>
                <p>
                    Las categorias de los productos que ofrecemos
                </p>
            </div>
        </div>
        <div class="row">
        <?php foreach ($data ['categorias'] as $categoria) { ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="<?php echo BASE_URL .'principal/categorias/'.$categoria['cat_id']; ?>"><img src="<?php echo $categoria ['cat_imagen'];?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria ['cat_nombre'];?></h5>
                <p class="text-center"><a class="btn btn-success" href="<?php echo BASE_URL .'principal/categorias/'.$categoria['cat_id']; ?>">Ir de Compras</a></p>
            </div>
            <?php } ?>

         
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos</h1>
                    <p>
                    "Descubre la belleza ancestral de las artesanías amazónicas y lleva a tu hogar la magia de 
                    la selva con nuestras creaciones únicas y auténticas. Somos KintiaNua - Artesanías Shuar de 
                    la Amazonía Ecuatoriana"
                    </p>
                </div>
            </div>
            <div class="row">
            <?php foreach ($data ['Productos'] as $producto) { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'Principal/detail/' . $producto['pro_id']; ?>">
                            <img src="<?php echo $producto['pro_imagen']; ?>" class="card-img-top" alt="<?php echo $producto['pro_nombre'];?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <!--<li class="text-muted text-right">$240.00</li>-->
                                <li class="text-muted text-right"><?php echo MONEDA.' '.$producto['pro_precio'];?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'Principal/detail/' . $producto['pro_id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['pro_nombre'];?></a>
                            <p class="card-text">
                            <?php echo $producto['pro_descripcion'];?>
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <?php include_once 'views/template-principal/footer.php'; ?>    
</body>

</html>