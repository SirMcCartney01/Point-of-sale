<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Cesar Eduardo Placido Velazco">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
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
              <img src="../imagenes/logo.png" alt="Eleventa" height="80px" width="230px">
          </h1>
          <label id="activeUser">Don Ramón</label>
      </header>

      <section id="button-bar">
        <div class="container">
          <div class="btn-group">
            <a class="btn btn-primary" href="ventas.php"><i class="fa-solid fa-cart-shopping"></i> Ventas</a>
            <a class="btn btn-primary" href="productos.php"><i class="fa-solid fa-magnifying-glass"></i> Productos</a>
            <a class="btn btn-primary" href="inventario.php"><i class="fa-solid fa-book"></i> Inventario</a>
            <a class="btn btn-primary" href="corte.php"><i class="fa-solid fa-scissors"></i> Corte de Caja</a>
          </div>
        </div>
      </section>

