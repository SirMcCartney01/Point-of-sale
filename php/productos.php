<?php
      include 'layout/header.php';
?>

      <header id="tiraVentas">
          <label style="font-size: 20px;">PRODUCTOS</label>
      </header>

      <!--AREA DE PRODUCTOS-->
      <input id="botonAgregar" type="submit" name="agregarproductos" value="✔ ENTER - Buscar articulo">
      <input class="form-control form-control-lg"  type="text" id="inputBoxVentas" name="codigoProducto" required>
      <label id="productTag">Nombre del producto: </label>
      <img src="../imagenes/barcode.jpg" width="80px" height="50px" style="margin-top: 10px;">
      <br><br>
      
      <table id="t01" class = "table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Producto</th>
                <th>Marca</th>
                <th>Departamento</th>
                <th>Stock</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include("conexion.php");

                $link = Conectar();

                // read all row from database table
                $sql = "SELECT * FROM productos";
                $result = $link->query($sql);

                if (!$result) {
                    die("Invalid query: " . $link->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["codigo"] . "</td>
                            <td>" . $row["producto"] . "</td>
                            <td>" . $row["marca"] . "</td>
                            <td>" . $row["departamento"] . "</td>
                            <td>" . $row["stock"] . "</td>
                            <td>" . $row["precio"] . "</td>
                        </tr>";
                }

                $link->close();
            ?>
        </tbody>
    </table>
      <br><br><br><br>
      </body>
  <footer id="pie">
      <small>&copy; 2022 Eleventa | Todos los derechos reservados. </small>
  </footer>
</html>
