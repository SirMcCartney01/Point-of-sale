<?php
    include 'layout/header.php';
?>

    <header id="tiraVentas">
        <label style="font-size: 20px;">INVENTARIO</label>
    </header>

    <!--Area de inventario-->
   <div id="test">
    <section id="seccion">
        <article>
            <form id="formulario1" name="fieldset1" action="http://localhost:8080/ejemplo" method="get">
                <legend align="center" style="font-size: 30px; color: transparent;">I'm cheating my nigga</legend>
                <fieldset>
                    <legend align="center" style="font-size: 30px;">Agregar nuevo producto</legend>
                    <p>
                        <br>
                        <br><br>
                        <label id="labelInventory"  for="codigo">Código de barras:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                        <input class="form-control form-control-lg" type="text" id="inputBoxesMain" name="codigo" size="60" placeholder="12345678" required>
                        <br><br>
                        <label id="labelInventory" for="producto">Nombre:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-control form-control-lg" type="text" id="inputBoxesMain" name="producto" size="60" placeholder="Gansito" required>
                        <br><br>
                        <label id="labelInventory" for="marca">Marca: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-control form-control-lg" type="text" id="inputBoxesMain" name="marca" size="60" placeholder="Marinela" required>
                        <br><br>
                        <label id="labelInventory" for="stock">Stock: &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-control form-control-lg" type="text" id="inputBoxesMain" name="stock" size="60" placeholder="50" required>
                        <br><br>
                        <label id="labelInventory" for="precio">Precio unitario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-control form-control-lg" type="text" id="inputBoxesMain" name="precio" size="60" placeholder="$10" required>
                        <br><br>
                        <label id="labelInventory" for="dpto">Departamento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-control form-control-lg" type="text" id="inputBoxesMain" name="dpto" size="60" placeholder="Abarrotes" required>
                        <br><br>
                    </p>
                </fieldset>
                <br><br>
                
                <br><br>
                <input id="boton" type="submit" name="enviar" value="💾 Guardar">
                &nbsp;&nbsp;
                <input id="boton" type="reset" value="🗑 Limpiar campos">
            </form>
        </article>
    </section>
   </div>
    <br><br><br><br>
    </body>
<footer id="pie">
    <small>&copy; 2022 Eleventa | Todos los derechos reservados. </small>
</footer>
</html>
