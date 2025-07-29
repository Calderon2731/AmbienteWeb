           
    <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Views/layoutInterno.php';
    
?>

<!DOCTYPE html>
<html >
    

  <?php
  Addcss();
  ?>
  
    <body>


        <?php
        showHeader();
        ?>

        <main>
            <?php
            menu();
            ?>
        
            <div th:fragment="ubicacion" class="container mt-5">
                <h2 style="color: #086266;">Servicios en Línea</h2>
                <h5 style="color: #1aabb1;">Estamos aquí para ayudar</h5>
                <br>
                <hr style="border: 1px solid #1aabb1;"/>
                <br>
            <p style="color: #086266;">Te invitamos a conocer nuestros servicios disponibles.</p>
            
            
            <h5 style="color: #1aabb1;">Ubicación</h5>

                <div class="row align-items-start">
                    <div class="col-md-6">
                        <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62880.81229403469!2d-84.12385695136717!3d9.929730100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e39c21049d13%3A0xcd11e3cc38b449e7!2zQ2zDrW5pY2EgU2FudGEgTWFyw61h!5e0!3m2!1ses-419!2scr!4v1753251826135!5m2!1ses-419!2scr"
                                    width="100%"
                                    height="400"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-start">
                        <div class="social-icons" style="margin: 20px 0;">
                            <a href="https://wa.me/123456789" target="_blank" style="margin-bottom: 10px;">
                                <i class="fab fa-whatsapp" style="font-size: 2rem; color: black;"></i>
                            </a>
                            <a href="https://www.facebook.com" target="_blank" style="margin-bottom: 10px;">
                                <i class="fab fa-facebook" style="font-size: 2rem; color: black;"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" style="margin-bottom: 10px;">
                                <i class="fab fa-instagram" style="font-size: 2rem; color: black;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    ShowFooter();
                    ?>
            </div>
        </main>

    </body>

  <?php
  addJS();
  ?>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</html>