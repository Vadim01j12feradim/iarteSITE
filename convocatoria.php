<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /**{
            background-color:darkseagreen; 
        }*/
    </style>
</head>

<body style="background-color:#FBE0B6;">

        <div style="display:inline-block; padding:5px;">
            <a href="./" style="text-decoration:none;"> <div>Home</div></a>
        </div>

       <div class="container" style="width:40%;margin-top:90px;" >
        <?php include('conexion.php'); ?>
                <div class="well well-sm" >
                    <form method="POST" action="procesa_convocatoria.php" enctype="multipart/form-data" id="form-registro"  >
                        <fieldset >
                        <!--********DATOS********-->
                        <div class="form-group" style="border-style:ridge; border-color: black;padding:20px; border-radius:10px;">

                            <legend class="text-center">Registro</legend>
                        
                            <label for="nombre" class="control-label">Los campos marcados con * son OBLIGATORIOS </label>
                            <div class="form-group"> 
                                <label for="nombre" class="control-label">* Nombre completo:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
                            </div>    
                        
                            <div class="form-group"> 
                                <label for="telefono" class="control-label">* Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" required>
                            </div>                    
                                                    
                            <div class="form-group"> 
                                <label for="correo" class="control-label">* Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="" required>
                            </div>    
                        
                            <div class="form-group"> 
                                <label for="edad" class="control-label">* Edad</label>
                                <input type="number" style="width:15%" class="form-control" min="18" max="80" id="edad" name="edad" placeholder="" required>
                            </div>        
                            
                            <div class="form-group"> 
                                <label for="estado" class="control-label">* Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="" required>
                            </div>  

                            <div class="form-group"> 
                                <label for="municipio" class="control-label">* Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" placeholder="" required>
                            </div> 

                            <div class="form-group"> 
                                <label for="colonia" class="control-label">* Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="" required>
                            </div> 
                                                    
                            
                            <div class="form-group"> 
                                <label for="ocupacion" class="control-label">* Ocupación</label>
                                <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="" required>
                            </div>  
                            
                            <div class="form-group"> 
                                <label for="nacionalidad" class="control-label">* Nacionalidad</label>
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="" required>
                            </div>  

                            <br>

                        </div>  

                        <!--*******DOCUMENTOS******-->
                        <br>
                        <div class="form-group" style="border-style:ridge; border-color: black;padding:20px; border-radius:10px;">
                        
                            <legend class="text-center">Documentos</legend>

                            <div class="form-group">
                                <label for="identificacion">* Identificación oficial vigente (PDF)</label>
                                <input type="file" class="form-control-file" id="identificacion" name="identificacion" accept="application/pdf" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="comprobante">* Comprobante de domicilio reciente (PDF)</label>
                                <input type="file" class="form-control-file" id="comprobante" name="comprobante" accept="application/pdf" required>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="manifiesto">* Manifiesto firmado (PDF)</label>
                                <input type="file" class="form-control-file" id="manifiesto" name="manifiesto" accept="application/pdf" required>
                            </div>
                            <br>
                        
                        </div>
                        <br>
                        <!--*******Imágenes Producto Innovador******-->
                        <div class="form-group" style="border-style:ridge; border-color: black;padding:20px; border-radius:10px;">
                        
                            <legend class="text-center">Categoría: Producto Innovador</legend>
                        
                            <!--<div class="form-group">
                                <label style="font-weight:900" for="">Categoría: Producto Innovador</label>
                            </div>-->
                            <br>

                            <div class="form-group">
                                <label for="imagen1">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen1" name="imagen1" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena1" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena1" name="cadena1" placeholder=""></textarea>
                            </div> 
                            <br>
                            <div class="form-group">
                                <label for="imagen2">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen2" name="imagen2" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena2" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena2" name="cadena2" placeholder=""></textarea>
                            </div> 
    
    
                        </div>
                        <br>
                        <!--*******Imágenes Producto Innovador******-->
                        <div class="form-group" style="border-style:ridge; border-color: black;padding:20px; border-radius:10px;">
                            
                            <legend class="text-center">Categoría: Interacción Ciber-Humana</legend>

                            <div class="form-group">
                                <label for="imagen3">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen3" name="imagen3" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena3" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena3" name="cadena3" placeholder=""></textarea>
                            </div> 
                            <br>
                            <div class="form-group">
                                <label for="imagen4">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen4" name="imagen4" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena4" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena4" name="cadena4" placeholder=""></textarea>
                            </div>  

                            </div>
                            <br>    

                            <div class="form-group" style="text-align:right"> 
                                <button type="button" class="btn btn-primary" onclick="validaImagenes();">Enviar</button>
                            </div>     
                        
                        </fieldset>
                    </form>
                </div>
           
    </div>

</body>

</html>

<script>
    function validaImagenes(){
        var okey = 0;
        var validaArchivos = 0;
        for(let i = 1; i<=4; i++){
            var archivo = document.getElementById("imagen"+i+"");
  
             if (archivo.files.length === 0) {
                
            }else{
                document.getElementById("cadena"+i+"").required = true;
                okey++;
            }
        }
        if(okey == 0){
            alert("Debes subir al menos una imagen");
        }else{

            var formulario = document.getElementById("form-registro");
  
            if (formulario.checkValidity()){

                const archivoIdentificacion = document.getElementById('identificacion');
                const archivoComprobante = document.getElementById('comprobante');
                const archivoManifiesto = document.getElementById('manifiesto');

                const fileIdentificacion = archivoIdentificacion.files[0];
                const fileComprobante = archivoComprobante.files[0];
                const fileManifiesto = archivoManifiesto.files[0]; 

                const archivoImg1 = document.getElementById('imagen1');
                const archivoImg2 = document.getElementById('imagen2');
                const archivoImg3 = document.getElementById('imagen3');
                const archivoImg4 = document.getElementById('imagen4');

                const fileImg1 = archivoImg1.files[0];
                const fileImg2 = archivoImg2.files[0];
                const fileImg3 = archivoImg3.files[0];
                const fileImg4 = archivoImg4.files[0];


                const maxSizePdf = 1024 * 1024; // 1MB
                const maxSizeImg = 1024 * 1024 * 5; // 5MB
                    
                    if(fileImg1){
                        if (fileImg1.size > maxSizeImg) {
                            alert("El archivo de imagen 1 en la categoría: Producto innovador. Excede el tamaño máximo permitido de 5MB.");
                            archivoImg1.value = '';
                            validaArchivos++;
                        }
                    }

                    if(fileImg2){
                        if (fileImg2.size > maxSizeImg) {
                            alert("El archivo de imagen 2 en la categoría: Producto innovador. Excede el tamaño máximo permitido de 5MB.");
                            archivoImg2.value = '';
                            validaArchivos++;
                        }
                    }

                    if(fileImg3){
                        if (fileImg3.size > maxSizeImg) {
                            alert("El archivo de imagen 1 en la categoría: Interacción Ciber-Humana. Excede el tamaño máximo permitido de 5MB.");
                            archivoImg3.value = '';
                            validaArchivos++;
                        }
                    }

                    if(fileImg4){
                        if (fileImg4.size > maxSizeImg) {
                            alert("El archivo de imagen 2 en la categoría: Producto innovador. Excede el tamaño máximo permitido de 5MB.");
                            archivoImg4.value = '';
                            validaArchivos++;
                        }
                    }

                    if (fileIdentificacion.size > maxSizePdf) {
                        alert("El archivo de identificación excede el tamaño máximo permitido de 1MB.");
                        archivoIdentificacion.value = ''; // Limpiar el valor del input para permitir volver a seleccionar el archivo
                        validaArchivos++;
                    }

                    if (fileComprobante.size > maxSizePdf) {
                        alert("El archivo de comprobante excede el tamaño máximo permitido de 1MB.");
                        archivoComprobante.value = ''; // Limpiar el valor del input para permitir volver a seleccionar el archivo
                        validaArchivos++;
                    }

                    if (fileManifiesto.size > maxSizePdf) {
                        alert("El archivo de manifiesto excede el tamaño máximo permitido de 1MB: ");
                        archivoManifiesto.value = ''; // Limpiar el valor del input para permitir volver a seleccionar el archivo
                        validaArchivos++;
                    }
                    
                    if(validaArchivos == 0){
                        document.getElementById("form-registro").submit();
                    }

                //
            }else{
                //alert("Debes llenar los campos correspondientes");
                formulario.reportValidity();
    
                var campos = formulario.elements;
                for (var i = 0; i < campos.length; i++) {
                    if (!campos[i].validity.valid) {
                        campos[i].focus();
                        break;
                    }
                }
            }              
        }
    }
</script>

<script>
var input = document.getElementById("telefono");
  input.addEventListener("input", function(event) {
    var value = event.target.value;
    var newValue = value.replace(/[^0-9]/g, "");
    event.target.value = newValue;
  });
</script>


<script>
  var input = document.getElementById("nombre");
  input.addEventListener("input", function(event) {
    var value = event.target.value;
    var newValue = value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚüÜ\s]/g, "");
    event.target.value = newValue;
  });
</script>

<script>
    var input = document.getElementById("estado");
    input.addEventListener("input", function(event) {
      var value = event.target.value;
      var newValue = value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚüÜ\s]/g, "");
      event.target.value = newValue;
    });
</script>

<script>
    var input = document.getElementById("municipio");
    input.addEventListener("input", function(event) {
      var value = event.target.value;
      var newValue = value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚüÜ\s]/g, "");
      event.target.value = newValue;
    });
</script>

<script>
    var input = document.getElementById("nacionalidad");
    input.addEventListener("input", function(event) {
      var value = event.target.value;
      var newValue = value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚüÜ\s]/g, "");
      event.target.value = newValue;
    });
</script>