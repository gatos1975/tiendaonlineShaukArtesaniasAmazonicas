
<?php include_once 'views/template/header-admin.php'; ?>
<?php include_once 'views/template/header-admin.php'; ?>

<div class="card">
    
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">

                <table class="table table-borderes table-striped table-hover" style=" width:100%;" id="tblUsuarios">
                    <thead>
                        <tr>
                            <th  scope="col" >#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Perfil</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

            </div>
            
        </div>
    </div>
</div>
        <?php include_once 'views/template/footer-admin.php'; ?>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo BASE_URL . 'config/Config.php'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/modulos/usuarios.js'; ?>"></script>
        

        </body>
</html>
