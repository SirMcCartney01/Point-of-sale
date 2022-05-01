<?php
    include 'layout/header.php';
?>

    <header id="tiraVentas">
        <label style="font-size: 20px;">CORTE DE CAJA</label>
    </header>
    <br>
    <div id="test">
        <label id="corteBanner"><p>Corte de caja realizado el <span id="datetime"></span></p></label>
    <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" a las "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
    </script>
    
    <table id="t01" style="width: 100%;">
        <tr>
          <th>Vendedor</th>
          <th>Ventas acumuladas</th>
        </tr>
        <tr>
          <td>Lidia Mora</td>  
          <td>143</td>
        </tr>
        <tr>
            <td>Angel Lafarja</td>  
            <td>213</td>
        </tr>
        <tr>
            <td>Ramiro Mendoza</td>  
            <td>194</td>
        </tr>
        <tr>
            <td>Ramón Valdez</td>  
            <td>26</td>
        </tr>
        <tr>
            <td>TOTAL</td>  
            <td>576</td>
        </tr>
    </table>
    </div>
    <br><br><br><br>
    </body>
<footer id="pie">
    <small>&copy; 2022 Eleventa | Todos los derechos reservados. </small>
</footer>
</html>
