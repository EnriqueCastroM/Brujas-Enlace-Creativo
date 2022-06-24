<?php include('../templates/cabecera.php'); ?>
<?php include('creativos.php');?>

    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="row">

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