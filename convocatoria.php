<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
       <div class="container" style="width:40%;" >
        <?php include('conexion.php'); ?>
                <div class="well well-sm" >
                    <form method="POST" action="procesa_convocatoria.php" enctype="multipart/form-data" id="form-registro">
                        <fieldset>
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
                            <br>

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
                                <label for="">Categoría: Producto Innovador</label>
                            </div>
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

                            <div class="form-group">
                                <label for="imagen2">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen2" name="imagen2" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena2" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena2" name="cadena2" placeholder=""></textarea>
                            </div> 

                            <div class="form-group">
                                <label for="">Categoría: Interacción Ciber-Humana</label>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="imagen3">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen3" name="imagen3" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena3" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena3" name="cadena3" placeholder=""></textarea>
                            </div> 

                            <div class="form-group">
                                <label for="imagen4">Imagen generada por IA (JPG)</label>
                                <input type="file" class="form-control-file" id="imagen4" name="imagen4" accept="image/jpeg">
                            </div>
                            <br>

                            <div class="form-group"> 
                                <label for="cadena4" class="control-label">Cadena de texto generadora de la imagen:</label>
                                <textarea style="height:100px" class="form-control" id="cadena4" name="cadena4" placeholder=""></textarea>
                            </div>  

                            <div class="form-group">
                                <label for="manifiesto">* Manifiesto firmado (PDF)</label>
                                <input type="file" class="form-control-file" id="manifiesto" name="manifiesto" accept="application/pdf" required>
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
                document.getElementById("form-registro").submit();
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