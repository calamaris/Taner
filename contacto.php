<!DOCTYPE html>
<html lang="es">
    <head data-gwd-animation-mode="quickMode">
    <title>TANER | Contacto</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'includes/csss.html'; ?> 
    <?php include 'includes/head.html'; ?> <!--aqui esta el jquery-->
    </head> 
    <body class="gwd-body">
      <div class="contenedor">
        <?php include 'includes/header.html'; ?>
      <section class="seccion-b">
         <div id="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.755329245619!2d-99.13405400000002!3d19.466112999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f91ab21a9adb%3A0x1dd11feeee925a8f!2sTaner+%7C+Organizadora+de+Espacios!5e0!3m2!1ses-419!2smx!4v1402602274708" width="100%" height="300" scrolling="no" frameborder="0" style="border:0"></iframe>
        </div>
       
            <div id="nosotrosW">
              <div id="nosotrosT"></div>
              <div id="nosotrosContent">
                Taner es una empresa LIDER en almacenamiento y organización de espacios contando con una experiencia de más de 25 años en la logística empresarial y siendo  precursor en equipos de almacenamiento, mobiliario de oficinas y contenedores plásticos.
              </div>
            </div>
            <div id="direccion">
                <h1>Dirección</h1>Paganini #36 Colonia Vallejo, <br>Gustavo A. Madero 07870 <br>México, Distrito Federal.
                <p id="mailC"><a href="mailto:ventas@taner.com.mx"> ventas@taner.com.mx</a></p>
                <p id="phoneC"><a href="tel:+43330000"> 43330000</a></p>
                <p id="phoneC"><a href="tel:+55371155"> 55371155</a></p>
                <p id="phoneC"><a href="tel:+57593031"> 57593031</a></p>
            </div> 	
      </section>
      <section class="seccion-d">
        <div id="formulario">
                    <h2 id="contactoT">Contacto</h2>
                <form name="fvalida" id="formaFormat" method="get" enctype="application/x-www-form-urlencoded" action="recibe.php" target="_self">
                <input type="text" name="nombre" size="12" tabindex="1" class="input" placeholder="Nombre">         
                <input type="text" name="email" size="12" tabindex="2" class="input" placeholder="Correo">
                <input type="text" name="telefono" size="12" tabindex="3" class="input" placeholder="Teléfono">
                <textarea name="textMessage" rows="10" cols="5" tabindex="4" class="textArea" placeholder="Mensaje"></textarea>
                <div id="aviso"><input type="checkbox" name="terminos" id="terminos" value="1" class="checkbox">
                <a href="Avisodeprivacidad.pdf"  target="_blank" >Acepto aviso de privacidad.</a></div>
                <div style=" width:117px; height:37px; text-align:center; cursor:pointer; margin: 0 auto" onclick="sumbiteFormas()"><img src="img/enviar.jpg"></div>
                </div>
      </section>
      <?php include 'includes/footer.html'; ?>
    </div>
    <script> function sumbiteFormas(){
            elemento = document.getElementById("terminos");
            if (document.fvalida.nombre.value.length==0){ 
                    alert("Tiene que escribir su Nombre") 
                    document.fvalida.nombre.focus();
                    return 0; 
            }
            if (document.fvalida.email.value.length==0){ 
                    alert("Tiene que escribir Email") 
                    document.fvalida.email.focus();
                    return 0; 
            } 
             if (document.fvalida.telefono.value.length==0){ 
                    alert("Tiene que escribir su teléfono") 
                    document.fvalida.telefono.focus();
                    return 0; 
            } 
            if (document.fvalida.textMessage.value.length==0){ 
                    alert("Escriba su mensaje") 
                    document.fvalida.textMessage.focus();
                    return 0; 
            } 
            if( !elemento.checked ) {
                    alert("Acepte el Aviso de Privacidad") 
            }
            else{
                    alert("Tu mensaje ha sido enviado con éxito") 
                    document.fvalida.submit();
                            
            }  
        }
    </script>
  </body>

</html>