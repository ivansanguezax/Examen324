

<?php include 'headerIndex.php'; ?>

        

        
   
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                            <form action="indexresp.php" method="POST" class="formIndex">
                                    <label style="color: black;">Usuario</label>
                                    <input style="color: black;" type="text" name="usuario" value="">
                                    <br>
                                    <label style="color: black;">Contraseña</label>
                                    <input type="password" name="password" value="">
                                    <br>
                                    <input type="submit" value="Aceptar" name="Aceptar">
                            </form>
                            <a href="modificar.php?operacion=agregar"><button>Nuevo usuario</button></a>
                            </div>       
                        </div>
                        <img src="images/hero.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->


<?php include 'footer.php'; ?>