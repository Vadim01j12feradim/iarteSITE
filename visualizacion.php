<!doctype html>
<head>
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .modal-dialog {
            max-width: 800px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php 
            include ("conexion.php"); 
            $conexion = conectar();
            $query = "SELECT id_registro, nombre, imagen1, cadena1, descripcion1, imagen2, cadena2, descripcion2, imagen3, cadena3, descripcion3, imagen4, cadena4, descripcion4 FROM registro;";
            $resultado = select($conexion, $query);
        ?>
        <!-- Inicio tabla -->
        <div id="tablaG" style="text-align:center;">
        <caption style="text-align:center; font-size:25pt;"><span>Registros de participantes</span></caption>
            <table id="tabla" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th style="display:none;"></th>
                        <th></th>
                        
                        <th style="text-align: center;" colspan="2">Categoría: Producto Innovador</th>
                        <th style="text-align: center;" colspan="2">Categoría: Interacción Ciber-Humana</th>
                    </tr>
                    <tr>
                        <th style="display:none;">Id</th>
                        <th>Nombre</th>
                        
                        <th>Imagen 1</th>
                        <th>Imagen 2</th>
                        <th>Imagen 1</th>
                        <th>Imagen 2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            $img1 = str_replace(' ', '%20', $fila['imagen1']);
                            $img2 = str_replace(' ', '%20', $fila['imagen2']);
                            $img3 = str_replace(' ', '%20', $fila['imagen3']);
                            $img4 = str_replace(' ', '%20', $fila['imagen4']);
                            $cadena1 = $fila['cadena1']; 
                            $cadena2 = $fila['cadena2']; 
                            $cadena3 = $fila['cadena3']; 
                            $cadena4 = $fila['cadena4']; 
                            $descripcion1 = $fila['descripcion1'];
                            $descripcion2 = $fila['descripcion2'];
                            $descripcion3 = $fila['descripcion3'];
                            $descripcion4 = $fila['descripcion4'];

                            echo '<tr>
                                    <td style="display:none;">'. $fila['id_registro'] .'</td>
                                    <td>'. $fila['nombre'] .'</td>
                                    <td> <img style="height:112px; width:300px; cursor: pointer;" src="'. $img1 .'" onclick="mostrarModal(\''. $img1 .'\', \''. $cadena1 .'\', \''. $descripcion1 .'\')"> </td>
                                    <td> <img style="height:112px; width:300px; cursor: pointer;" src="'. $img2 .'" onclick="mostrarModal(\''. $img2 .'\', \''. $cadena2 .'\', \''. $descripcion2 .'\')"> </td>
                                    <td> <img style="height:112px; width:300px; cursor: pointer;" src="'. $img3 .'" onclick="mostrarModal(\''. $img3 .'\', \''. $cadena3 .'\', \''. $descripcion3 .'\')"> </td>
                                    <td> <img style="height:112px; width:300px; cursor: pointer;" src="'. $img4 .'" onclick="mostrarModal(\''. $img4 .'\', \''. $cadena4 .'\', \''. $descripcion4 .'\')"> </td>
                                </tr>';
                        }
                    ?>     
                </tbody>
            </table>
        </div>
        <?php 
            desconectar($conexion);
        ?>
        <!-- Fin tabla -->
    </div><!-- End off container -->

    
    <!-- Modal Imagen -->
    <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imagenModalLabel">Imagen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="imagenModalImg" style="max-width: 100%; height: auto;" src="" alt="Imagen">
                    <div class="mt-3">
                        <label for="promptModal" class="form-label">Prompt generador de la imagen:</label>
                        <textarea id="promptModal" class="form-control" rows="4" readonly></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="descripcionModal" class="form-label">Descripción de la imagen:</label>
                        <textarea id="descripcionModal" class="form-control" rows="4" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <script>
        function mostrarModal(imagenSrc, prompt, descripcion) {
            $('#imagenModalImg').attr('src', imagenSrc);
            $('#promptModal').val(prompt);
            $('#descripcionModal').val(descripcion);
            $('#imagenModal').modal('show');
        }

        $(document).ready(function() {
            let table = new DataTable('#tabla');
        });
    </script>
    
</body>
</html>
