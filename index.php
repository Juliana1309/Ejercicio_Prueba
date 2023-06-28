<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <select class="ddl_tipo_mant" name="Tipo_Mantenimiento" id="ddl_Tipo_Mantenimiento">
            <option value="0">Seleccione</option>
            <?php 
            include("conexiondb.php");
            $consulta = "SELECT * FROM Tipo_Mantenimiento";
            $resultado = mysqli_query($conexion,$consulta);
           
               while($valores = mysqli_fetch_array($resultado)){
                   echo '<option value="'.$valores[0].'">'.$valores[0].'</option>';
               }
            ?>
        </select>
        </div>
    </div>
    <script>
   
    </script>
</body>
</html>