<?php

    $idRegistro = $_POST['idRegistro'];

    //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
    //debemos obtener los datos asociados

    $sql = "SELECT id_registro, 
                    nombre, 
                    apellidoP,
                    apeliidoM, 
                    fecha,
                    sexo 
            FROM t_registro WHERE id_registro = '$idRegistro'";
    $resultado = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($resultado);
?>


<?php
    require_once 'header.php'; 
?>



<div class="container ">
    <div class="row ">
        <div class="col-sm-12 text-center">
            <div class="container ">
                <div class="row " >
                    <div class="col-sm-6 mx-auto text-center " >
                        <div class="card mx-auto" style="width: 12rem; border-color:transparent">
                            <img src="raw/img/logo (1).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <hr class="linea">
                <!-- aca empezara el formulario -->
                <div class="row ">
                    <div class="col-sm-6 mx-auto">
                        <form action="servidor/actualizarRegistro.php" method="POST" class="form-group">

                            <div class="row">
                                <div class="col">
                                    <input type="text" name="idRegistro" value="<?php echo $datos['id_registro'] ?>" hidden>
                                    <label for="nombre"><H5>NOMBRE</H5></label>
                                    <input type="text" class="form-control rounded-pill" name="nombre" placeholder="ingresa tu nombre" required pattern="[A-Za-z]{5}" value="<?php echo $datos['nombre'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col ">
                                    <label for="apellidoP"><h5>Apellido Paterno</h5> </label>
                                    <input type="text" class="form-control rounded-pill" name="apellidoP" placeholder="Apellido Paterno" required value="<?php echo $datos['apellidoP'] ?>">
                                </div>
                                <div class="col">
                                    <label for="apellidoM"><h5>Apellido Materno</h5> </label>
                                    <input type="text" class="form-control rounded-pill" name="apellidoM" placeholder="Apellido Materno" required value="<?php echo $datos['apeliidoM'] ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="fecha"><h5>Fecha de nacimiento</h5></label>
                                    <input type="date" class="form-control rounded-pill" name="fecha" required  >
                                </div>
                                <div class="col">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                               <label for=""><h4>sexo</h4></label> 
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" name="sexo" value="Masculino" required>
                                                <label for="sexo">MASCULINO</label><br>
                                            </div>
                                            <div class="col">
                                                <input type="radio" name="sexo" value="Femenino" required>
                                                <label for="sexo">FEMENINO</label><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button class="btn btn-warning">actualizar</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php'; 
?>