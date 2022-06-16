<?php include('../templates/cabecera.php'); ?>
<div class="container">
 <div class="row">
  <div class="col-12">
  <div class="row">

  <div class="col-5">
<form action="" method="post">
<div class="card">
    <div class="card-header">
        Clientes
    </div>
<div class="card-body">

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" 
    name="nombre_cliente" 
    id="nombre_cliente" 
    aria-describedby="helpId" 
    placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Apellido</label>
  <input type="text"
    class="form-control" 
    name="apellido_cliente" 
    id="apellido_cliente" 
    aria-describedby="helpId" 
    placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">E-mail</label>
  <input type="text"
    class="form-control" 
    name="mail_cliente" 
    id="mail_cliente" 
    aria-describedby="helpId" 
    placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Numero de contacto</label>
  <input type="number"
    class="form-control" 
    name="contacto_cliente" 
    id="contacto_cliente" 
    aria-describedby="helpId" 
    placeholder="">
  
</div>

<div class="mb-3">
  <label for="" class="form-label">Area de trabajo:</label>
  <select name="areatrabajo_clientes" id="areatrabajo_clientes">
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
    <button type="submit" class="btn btn-success">Agregar</button>
    <button type="submit" class="btn btn-success">Editar</button>
    <button type="submit" class="btn btn-warning">Borrar</button>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
    </table>
    
</div>
</div>
</div>
</div>
</div>
<?php include('../templates/pie.php'); ?>
