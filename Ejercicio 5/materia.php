

	
<?php include 'header.php'; ?>


<?php
// Obtener el valor del parámetro 'titulo' en la URL
$titulo = $_GET['titulo'];
// Definir los enlaces para cada carrera
if ($titulo == "Matemática") {
    $enlace = "http://portal.fcpn.edu.bo/fcpn-carrera-de-matematica/";
} elseif ($titulo == "Física") {
    $enlace = "http://portal.fcpn.edu.bo/carrera-fisica/";
} elseif ($titulo == "Informática") {
    $enlace = "http://portal.fcpn.edu.bo/fcpn-carrera-de-informatica/";
} elseif ($titulo == "Química") {
    $enlace = "http://portal.fcpn.edu.bo/fcpn-carrera-de-ciencias-quimicas/";
}


?>



      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Facultad de Ciencias Puras y Naturales </div>          
                                <div class="small"><?php echo $titulo; ?></div>
                                <a href="<?php echo $enlace; ?>" class="middle btn btn-white">Ver Carrera</a>
                            </div>       
                        </div>
                        <img src="images/heroMateria.jpg" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Facultad de Ciencias Puras y Naturales </div>          
                                <div class="small"><?php echo $titulo; ?></div>
                                <a href="<?php echo $enlace; ?>" class="middle btn btn-white">Ver Carrera</a>
                            </div>       
                        </div>
                        <img src="images/heroMateria.jpg" alt="">
                    </li>
                    
                    <li class="third">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Facultad de Ciencias Puras y Naturales </div>          
                                <div class="small"><?php echo $titulo; ?></div>
                                <a href="<?php echo $enlace; ?>" class="middle btn btn-white">Ver Carrera</a>
                            </div>       
                        </div>
                        <img src="images/heroMateria.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->

          <?php include 'footer.php'; ?>