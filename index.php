<?php include('./templates/cabecera.php'); ?>
<?php include('./secciones/creativos.php');?>


<!-- Content section-->

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT US</h3>
    <p class="w3-center"><em>We love to connect people</em></p>
    <p>Brujas Enlace Creativo es una iniciativa que comenzó reconociendo la necesidad que tienen los trabajadores independientes, también conocidos como freelancers, para conseguir clientes que estén dispuestos a pagar el trabajo de manera justa, o clientes en general.</p>
    <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
            <p><b><i class="fa fa-user w3-margin-right"></i>Aldonza</b></p><br>
            <img src="./img/cristalbola.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
            <p>El objetivo de Brujas EC, es conectar a freelancers y clientes para la búsqueda y entrega de un trabajo de calidad de manera personalizada.

                Gracias por querer pertenecer a nuestra base de datos, juntos lograremos continuar con la cultura del freelance y la paga justa.

                Por favor deja tu información para comenzar a buscar opciones de clientes para ti.</p>
        </div>
    </div>
    
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">14+</span><br>
        Clientes
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">30+</span><br>
        Creativos
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">100%</span><br>
        Happy Clients
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150%</span><br>
        Work done!
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">WORK AREAS</h3>
    <p class="w3-center"><em>Clientes y Creativos en las siguientes areas de trabajo</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="./img/workareas/foto.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Fotografía">
            Foto de <a href="https://unsplash.com/@nordwood?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">NordWood Themes</a> en <a href="https://unsplash.com/es/s/fotos/c%C3%A1mara?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
  
        </div>


        <div class="w3-col m3">
            <img src="./img/workareas/diseño.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Diseño">
            Foto de <a href="https://unsplash.com/@themephotos?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Theme Photos</a> en <a href="https://unsplash.com/es/s/fotos/dise%C3%B1o-grafico?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
        </div>

        <div class="w3-col m3">
            <img src="./img/workareas/video.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Video">
            Foto de <a href="https://unsplash.com/@jakobowens1?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Jakob Owens</a> en <a href="https://unsplash.com/es/s/fotos/video?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        </div>

        <div class="w3-col m3">
            <img src="./img/workareas/ilustracion.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ilustración">
            Foto de <a href="https://unsplash.com/@emilybernal?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Emily Bernal</a> en <a href="https://unsplash.com/es/s/fotos/adobe?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="./img/workareas/redes.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Redes">
            Foto de <a href="https://unsplash.com/@firmbee?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Firmbee.com</a> en <a href="https://unsplash.com/es/s/fotos/publicidad-en-redes?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        </div>

        <div class="w3-col m3">
            <img src="./img/workareas/estrategia.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Comunicacion estretegica">
            Foto de <a href="https://unsplash.com/@johnschno?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">John Schnobrich</a> en <a href="https://unsplash.com/es/s/fotos/comunicaci%C3%B3n-estrat%C3%A9gica?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        </div>

        <div class="w3-col m3">
            <img src="./img/workareas/copywriting.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Copywriting creativo">
            Foto de <a href="https://unsplash.com/@lucaonniboni?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Luca Onniboni</a> en <a href="https://unsplash.com/es/s/fotos/copywriting?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        </div>

        <div class="w3-col m3">
            <img src="./img/workareas/audio.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Audio">
            Foto de <a href="https://unsplash.com/@hamza01nsr?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Hamza NOUASRIA</a> en <a href="https://unsplash.com/es/s/fotos/audio?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
  

        </div>

        <div class="w3-col m3">
            <img src="./img/workareas/redaccion.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Redacción">
            Foto de <a href="https://unsplash.com/es/@laurensauderstudio?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Lauren Sauder</a> en <a href="https://unsplash.com/es/s/fotos/redacci%C3%B3n?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
  
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
    </div>
</div>


<!-- Container (Contact Section) -->
<div class="container">
    <div class="row">
    <div class="col-12">
    <div class="row">

    <div class="col-5">

<form action="secciones/creativosData.php" method="post">
        
    <div class="card">
        
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
    


   
   



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <a href="https://www.instagram.com/brujasenlacecreativo/"><i class="fa fa-instagram w3-hover-opacity"></i></a>

        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Kalifer Web Design</a></p>
</footer>

<?php include('./templates/pie.php'); ?>