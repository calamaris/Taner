<!DOCTYPE html>
<html lang="es">
    <head data-gwd-animation-mode="quickMode">
    <title>Almacenamiento</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php include 'includes/csss.html'; ?> 
    <?php include 'includes/head.html'; ?> <!--aqui esta el jquery-->
    </head>
  <body class="gwd-body">
      <div class="contenedor">
      <?php include 'includes/header.html'; ?>
      <?php include 'includes/carrusel2.html'; ?>
      <section class="seccion-b">
        <div class="encabezado"> <!--navegador en productos -->
                <h3 ><a class="nav-pl1" href="productos.php">Productos ></a><a class="nav-pl1 navActive" href="almacenamiento.php"> Almacenamiento</a></h3>
                <h1 class="titulo-b">Almacenamiento</h1>
            </div> 
        <article class="productos">
              <a href="estanteriaM.php" alt="estanteria metalica" class="item-gde">
                  <figure id="testanteriaM"><figcaption>Estanteria Metálica</figcaption></figure>
              </a>
              <a href="racks.php" alt="racks" class="item-gde">
                  <figure id="tRacks"><figcaption>Racks</figcaption></figure>
              </a>
              <a href="gaveterosM.php" alt="gaveteros metalicos" class="item-gde">
                  <figure id="tgaveterosM"><figcaption>Gaveteros Metálicos</figcaption></figure>
              </a>
              <a href="gaveterosP.php" alt="gaveteros plasticos" class="item-gde">
                  <figure id="tgaveterosP"><figcaption>Gaveteros Plásticos</figcaption></figure>
              </a>
        </article>
      </section>
       <?php include 'includes/footer.html'; ?>
    </div>
  </body>

</html>