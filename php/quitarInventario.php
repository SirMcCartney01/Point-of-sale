<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="../js/alerts.js"></script>
    </head>
    <body>
        <?php 

            include("conexion.php");

            $link = Conectar();

            $code = $_POST['codigoEliminar'];
            $consulta = "DELETE FROM productos WHERE codigo = '".$code."'";
            $resultado = mysqli_query($link,$consulta);
                if ($resultado) {
                    ?>
                    <script>
                        deleteConfirmationAlert();
                        window.location.href = "../html/inventario.html";
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        deleteErrorAlert();
                        window.location.href = "../html/inventario.html";
                    </script>
                    <?php
                }
        ?>
    </body>
</html>
