<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="../js/alerts.js"></script>
    </head>
    <body>
        <?php 

            include("conexion.php");

            $link = Conectar();

            $codigo = trim($_POST['codigo']);
            $producto = trim($_POST['producto']);
            $marca = trim($_POST['marca']);
            $departamento = trim($_POST['dpto']);
            $stock = trim($_POST['stock']);
            $precio = trim($_POST['precio']);
            $consulta = "INSERT INTO productos(codigo, producto, marca, departamento, stock, precio) VALUES ('$codigo','$producto','$marca','$departamento','$stock','$precio')";
            $resultado = mysqli_query($link,$consulta);
                if ($resultado) {
                    ?>
                    <script>
                        confirmationAlert();
                        window.location.href = "../html/inventario.html";
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        errorAlert();
                        window.location.href = "../html/inventario.html";
                    </script>
                    <?php
                }
        ?>
    </body>
</html>
