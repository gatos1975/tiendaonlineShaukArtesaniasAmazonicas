 
 <!-- Start Banner Hero -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $data['title'];?></title>
        <link href="<?php echo BASE_URL;?>./css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ADMINISTRACION1</h3></div>
                                    <div class="card-body">
                                        <form id="formulario">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="email" name="email" value="wilmerayuy@gmail.com" placeholder="name@example.com"/>
                                                <label for="email">Correo Electrónico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="clave" type="password" name="clave" value="admin" placeholder="Contraseña"/>
                                                <label for="clave">Contraseña</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Olvidaste tu contraseña?</a>
                                                <button type="submit"  class="btn btn-primary">Acceso</button>
                                                 <!-- Start Banner Hero 
                                                <a type="submit"  class="btn btn-primary">Acceso</a>-->
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo BASE_URL;?>./js/scripts.js"></script>
        <script>
        const base_url = '<?php echo BASE_URL ; ?>';
        </script>
        <script src="<?php echo BASE_URL;?>./assets/js/sweetalert2.all.min.js"></script>
        <script src="<?php echo BASE_URL;?>./assets/js/modulos/login.js"></script>
    </body>
</html>
