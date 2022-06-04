//variable global
let otro = document.getElementById('otro');
//Valida el area de trabajo y desplegar opcion OTRO
function ValidarOtraArea(parametro){
    if(parametro === 1){
        otro.style.display = 'inline-block';
    }else{
        otro.style.display = 'none';
    }
}
function Registrar(){
    let datosBasicos = [];
    let diseño = document.getElementById('diseño');
    let fotografia = document.getElementById('fotografia');
    let video = document.getElementById('video');
    let animacion = document.getElementById('animacion');
    let audio = document.getElementById('audio');
    let redaccion = document.getElementById('redaccion');
    let ilustracion =  document.getElementById('ilustracion');
    let publicidadred = document.getElementById('publicidadred');
    let comunicacionest = document.getElementById('comunicacionest');
    let copywriting = document.getElementById('copywriting');
    let registro = document.getElementById('registro');
    let acepto = document.getElementById('acepto');
    let trabajo, terminos;

    
    //se agregan los datos al arreglo datosBasicos
    datosBasicos.push(document.getElementById('nombre').value);
    datosBasicos.push(document.getElementById('apellido').value);
    datosBasicos.push(document.getElementById('direccion').value);
    datosBasicos.push(document.getElementById('celular').value);
 
    
    //valido el area de trabajos
    if(diseño.checked === true){
        trabajo = 'Diseño';
    }else if(fotografia.checked === true){
        trabajo = 'Fotografía';
    }
    else if(video.checked === true){
        trabajo = 'Video';
    }
    else if(animacion.checked === true){
        trabajo = 'Animación';
    }
    else if(audio.checked === true){
        trabajo = 'Audio';
    }
    else if(redaccion.checked === true){
        trabajo = 'Redacción';
    }
    else if(ilustracion.checked === true){
        trabajo = 'Ilustración';
    }
    else if(publicidadred.checked === true){
        trabajo = 'Publicidad en redes';
    }
    else if(comunicacionest.checked === true){
        trabajo = 'Comunicación estratégica';
    }
    else if(copywriting.checked === true){
        trabajo = 'Copywriting creativo';
    }
    else{
        trabajo = otro.value;
    }
    //se agrega el area de trabajo
    datosBasicos.push(trabajo);

    //valido si acepto los terminos
    if(acepto.checked === true){
        terminos = 'Si';

        datosBasicos.push(terminos);
        
        const tr = document.createElement('tr');

        //agregar nodos a la tabla
        for(let i=0; i<datosBasicos.length; i++){
            //agrego el registro a la tabla
            const td = document.createElement('td');

            let texto = document.createTextNode(datosBasicos[i]);

            td.appendChild(texto);
            tr.appendChild(td);
        }      
        
        registro.appendChild(tr);

    }else{
        alert('Para registrarte debe aceptar los terminos');
    }
}


