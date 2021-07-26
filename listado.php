
<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_registro,nombre,apellidoP,apeliidoM,fecha,sexo FROM t_registro";
    $resultado = mysqli_query($conexion, $sql);
?>

<?php
    require_once 'header.php'; 
?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped" id="example">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>FECHA NACIMIENTO</th>
                        <th>SEXO</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($ver = mysqli_fetch_array($resultado)){ 
                    ?>
                    <tr class="table-secondary">
                        <td  class="text-center"> <?php echo $ver['id_registro']; ?> </td>
                        <td class="text-center"> <?php echo $ver['nombre'] ; ?> </td>
                        <td class="text-center"> <?php echo $ver['apellidoP'] ; ?> </td>
                        <td class="text-center"> <?php echo $ver['apeliidoM'] ; ?> </td>
                        <td class="text-center"> <?php echo $ver['fecha'] ; ?> </td>
                        <td class="text-center"> <?php echo $ver['sexo'] ; ?> </td>
                        <td class="text-center">
                            <form action="actualizar.php" method="POST">
                                <input type="text" hidden name="idRegistro" value="<?php echo $ver['id_registro']?>">
                                <button class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="servidor/eliminar.php" method="POST">
                                <input type="text" hidden name="idRegistro" value="<?php echo $ver['id_registro']?>">
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                    <?php
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
    require_once 'footer.php'; 
?>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>