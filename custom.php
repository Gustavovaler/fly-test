<?php
include('header.php');

?>

<link rel="stylesheet" href="css/custom.css">

<div class="container">
    
    <div class="image-central-div mt-5">
        <img src="img/<?php echo $_GET['malla'];?>.jpg" alt="" class="image-central">
    </div>   

    <div class="colores">

            <div>
                <h4>Colores plenos</h4>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <img class="color" src="img/colores/aqua.jpg" alt="First slide">
                    <img class="color" src="img/colores/rojo.jpg" alt="Second slide">
                    <img class="color" src="img/colores/coral.jpg" alt="Second slide">
                    <img class="color" src="img/colores/amarillo.jpg" alt="Second slide">
                </div>
            
            </div>
            <div class="carousel-item">
            <div>
                    <img class="color" src="img/colores/celeste.jpg" alt="First slide">
                    <img class="color" src="img/colores/fuxia.jpg" alt="Second slide">
                    <img class="color" src="img/colores/lila.jpg" alt="Second slide">
                    <img class="color" src="img/colores/negro.jpg" alt="Second slide">
                </div>
            </div>
            <div class="carousel-item">
                <div>
                    <img class="color" src="img/colores/rosa.jpg" alt="First slide">
                    <img class="color" src="img/colores/cobre.jpg" alt="Second slide">
                    <img class="color" src="img/colores/vagua.jpg" alt="Second slide">
                    <img class="color" src="img/colores/piel.jpg" alt="Second slide">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>

    <!-- estampados -->

    <div class="colores">

            <div>
                <h4>Estampados</h4>
            </div>

            <div id="carrousel2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carrousel2" data-slide-to="3" class="active"></li>
            <li data-target="#carrousel2" data-slide-to="4"></li>
            <li data-target="#carrousel2" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <img class="color" src="img/colores/aqua.jpg" alt="First slide">
                    <img class="color" src="img/colores/rojo.jpg" alt="Second slide">
                    <img class="color" src="img/colores/coral.jpg" alt="Second slide">
                    <img class="color" src="img/colores/amarillo.jpg" alt="Second slide">
                </div>
            
            </div>
            <div class="carousel-item">
            <div>
                    <img class="color" src="img/colores/celeste.jpg" alt="First slide">
                    <img class="color" src="img/colores/fuxia.jpg" alt="Second slide">
                    <img class="color" src="img/colores/lila.jpg" alt="Second slide">
                    <img class="color" src="img/colores/negro.jpg" alt="Second slide">
                </div>
            </div>
            <div class="carousel-item">
                <div>
                    <img class="color" src="img/colores/rosa.jpg" alt="First slide">
                    <img class="color" src="img/colores/cobre.jpg" alt="Second slide">
                    <img class="color" src="img/colores/vagua.jpg" alt="Second slide">
                    <img class="color" src="img/colores/piel.jpg" alt="Second slide">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carrousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carrousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>

    <div class="talles">
        <h4>Talles</h4>
        <select name="talles" id="" class="form-control">
            <option value="" default >Selecciona tu talle</option>
            <option value="">Talle 1 niña</option>
            <option value="">Talle 2 niña</option>
            <option value="">Talle 3 niña</option>
            <option value="">Talle XS</option>
            <option value="">Talle S</option>
            <option value="">Talle M</option>
            <option value="">Talle L</option>
            <option value="">Talle XL</option>
        </select>
    </div>

</div>
