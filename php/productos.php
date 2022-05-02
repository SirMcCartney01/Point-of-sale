<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Cesar Eduardo Placido Velazco">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../imagenes/favicon.png">
    <title>Eleventa</title>
  </head>
  <body>
      <header id="cabecera">
          <label id="exitText">Le atiende: </label>
          <form id="formulario1" name="fieldset1" action="login.html" method="get">
              <input id="botonExit" type="submit" name="enviar" value="✘" title="Salir">
          </form>
          <h1 class="principal">
              <a><img src="../imagenes/logo.png" alt="Eleventa" height="80px" width="230px"></a>
          </h1>
          <label id="activeUser">Don Ramón</label>
      </header>
      <br>

      <!--VENTAS-->
      <form id="formularioVentas" name="fieldset1" action="../html/ventas.html" method="get">
          <input id="boton" type="submit" name="enviar" value="🛒 Ventas">
      </form>

      <!--PRODUCTOS-->
      <form id="formularioProductos" name="fieldset1" action="productos.php" method="get">
          <input id="boton" type="submit" name="productos" value="🔎 Productos">
      </form>

      <!--INVENTARIO-->
      <form id="formularioInventario" name="fieldset1" action="../html/inventario.html" method="get">
          <input id="boton" type="submit" name="inventario" value="📔 Inventario">
      </form>

      <!--CORTE DE CAJA-->
      <form id="formularioCorte" name="fieldset1" action="../html/corte.html" method="get">
          <input id="boton" type="submit" name="corte" value="✂ Corte de Caja">
      </form>

      <br><br>
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
                            <td>$" . $row["precio"] . "</td>
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