<?php
    include 'layout/header.php';
?>

        <header id="tiraVentas">
            <label style="font-size: 20px;">VENTA - Ticket #1</label>
        </header>

        <!--AREA DE VENTA-->
        <input id="botonAgregar" type="submit" name="agregarproductos" value="✔ ENTER - Agregar a la venta">
        <!--input type="text"  required-->
        <input class="form-control form-control-lg" type="text" id="inputBoxVentas" name="codigoProducto">
        <label id="productTag">Código del producto: </label>
        <img src="../imagenes/barcode.jpg" width="80px" height="50px" style="margin-top: 10px;">
        <table id="tablaProductos">
            <colgroup>
                <col span="1" style="background-color:rgba(78, 132, 233, 0.459)">
                <col span="2" style="background-color:rgb(250, 250, 250)">
                <col span="1" style="background-color:rgb(179, 231, 179)">
            </colgroup>
            <tr>
            <th>Código</th>
            <th>Nombre del producto</th> 
            <th>Cantidad</th>
            <th>Precio</th>
            </tr>
            <tr>
            <td>00000000</td>
            <td>Coca cola 600ml</td>
            <td>2</td>
            <td>$30</td>
            </tr>
            <tr>
            <td>11111111</td>
            <td>Toreadas habanero</td>
            <td>1</td>
            <td>$10</td>
            </tr>
            <tr>
            <td>22222222</td>
            <td>Trident Xtra care</td>
            <td>3</td>
            <td>$36</td>
            </tr>
            <tr>
                <td><br><br><br><br><br><br><br><br><br><br></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
            <label id="totalPagar">$76.0</label>
            <input id="botonCobrar" type="submit" name="enviar" value="💰 Cobrar">
            <label id="datosCambio">Total a pagar:</label>
            <label id="datosCambio">Paga con:</label>
            <label id="datosCambio">Su cambio:</label>
            <br><br><br><br>
            <label id="variablesCambio">$76.0</label>
            <label id="variablesCambio">$100.0</label>
            <label id="variablesCambio">$24.0</label>
        <br><br><br><br>
    </body>
    <footer id="pie">
        <small>&copy; 2022 Eleventa | Todos los derechos reservados. </small>
    </footer>
</html>
