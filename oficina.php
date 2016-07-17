<!DOCTYPE html>
<html lang="es">
    <head data-gwd-animation-mode="quickMode">
    <title>Oficína</title>
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
                <h3 ><a class="nav-pl1" href="productos.php">Productos ></a><a class="nav-pl1 navActive" href="oficina.php"> Oficína</a></h3>
                <h1 class="titulo-b">Oficína</h1>
        </div> 
         <article class="productos">
              <a href="archiveros.php" alt="archiveros" class="item-gde">
                  <figure id="tArchiveros"><figcaption>Archiveros</figcaption></figure>
              </a>
              <a href="mueblesU.php" alt="muebles universales" class="item-gde">
                  <figure id="tMueblesU"><figcaption>Muebles Universales</figcaption></figure>
              </a>
              <a href="lockers.php" alt="lockers metalicos" class="item-gde">
                  <figure id="tLockers"><figcaption>Lockers Metálicos</figcaption></figure>
              </a>
              <a href="sillas.php" alt="sillería" class="item-gde">
                  <figure id="tSillas"><figcaption>Sillería</figcaption></figure>
              </a>
        </article>
      </section>
       <?php include 'includes/footer.html'; ?>
    </div>
  </body>

</html>