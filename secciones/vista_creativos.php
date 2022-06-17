<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/creativos.php');?>

    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="row">

    <div class="col-5">

<form action="" method="post">
        
    <div class="card">
        <div class="card-header">
            Creativos
        </div>
    <div class="card-body">

    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text"
        class="form-control" 
        name="nombre_creativo" 
        id="nombre_creativo" 
        aria-describedby="helpId" 
        placeholder="">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input type="text"
        class="form-control" 
        name="apellido_creativo" 
        id="apellido_creativo" 
        aria-describedby="helpId" 
        placeholder="">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">E-mail</label>
    <input type="text"
        class="form-control" 
        name="mail_creativo" 
        id="mail_creativo" 
        aria-describedby="helpId" 
        placeholder="">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Numero de contacto</label>
    <input type="number"
        class="form-control" 
        name="contacto_creativo" 
        id="contacto_creativo" 
        aria-describedby="helpId" 
        placeholder="">
    
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Area de trabajo:</label>
    <select name="adt" id="adt">
            <option value="diseño">Diseño</option>
            <option value="fotografia">Fotografía</option>
            <option value="video">Video</option>
            <option value="animacion">Animacion</option>
            <option value="audio">Audio</option>
            <option value="redaccion">Redacción</option>
            <option value="ilustracion">Ilustración</option>
            <option value="publicidadredes">Publicidad en redes</option>
            <option value="comunicacionest">Comunicación estrategica</option>
            <option value="copywriting">Copywriting</option>
        </select>

    </div>


    <div class="btn-group" role="group" aria-label="">
        <button type="submit" value="agregar" name="accion" class="btn btn-success">Agregar</button>
        <button type="submit" value="editar" name="accion" class="btn btn-success">Editar</button>
        <button type="submit" value="borrar" name="accion" class="btn btn-warning">Borrar</button>
    </div>

    </div>  
    </div>
    </form>

    </div>

    <div class="col-7">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>E-mail</th>
                    <th>Numero de contacto</th>
                    <th>Area de trabajo</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($listaCreativos as $creativos) {?>

                    <tr>
                        <td><?php echo $creativos['nombre']; ?></td>
                        <td><?php echo $creativos['apellido']; ?></td>
                        <td><?php echo $creativos['direccion']; ?></td>
                        <td><?php echo $creativos['contacto']; ?></td>
                        <td><?php echo $creativos['area de trabajo']; ?></td>
                        <td>
                            
                        

                        </td>
                    </tr>

                 <?php } ?>
                
            </tbody>
        </table>
        
    </div>
    </div>
    </div>
    </div>
    </div>





<?php include('../templates/pie.php'); ?>