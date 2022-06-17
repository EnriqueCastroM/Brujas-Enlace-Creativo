<?php include('../templates/cabecera.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md4">

        </div>
        <br>
        <form action="secciones/index.php" method="post">
            <div class="col-md4">
                <div class="card-header">
                    Inicio de sesión
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp" placeholder="Escriba su usuario">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="input1" aria-describedby="emailHelp" placeholder="Constraseña">

                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                        else.</div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('../templates/pie.php'); ?>