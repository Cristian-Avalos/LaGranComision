<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>ejemplo slider/carrusel</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo-head.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

  <header class="header">
      <div class="container logo-nav-container">
        
        <a href="#" class="logo">
          <img src="img/BANER LGCC B.png" alt="logo LGCC" class="logohead">
        </a>
        <span class="menu-icon"><i class="fas fa-bars"></i></span>
          <nav class="navigation">
            <ul class="">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">IBCC</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </nav>
      </div>
  </header>

  <main class="main">
    
    <div id="slideshow-principal">
      <div id="progress-bar-container">
        <div id="progress-bar"></div>
      </div>

      <div id="slideshow">
        <img src="" alt="" id="img1" class="imgb">
        <img src="" alt="" id="img2" class="imgb">
      </div>

      <div id="text-baners">
        <h1 id="text-b">
          <!-- BIENVENIDOS <br> <br> SITIO OFICIAL DE LA GRAN COMISIÓN CRISTIANA -->
        </h1>
      </div>

      <div id="indicadores">

      </div> 
    </div>
<!-- -------------------------- MISION - VISIO - FE ---------------------------- -->
    <div class="maintab">
      <!-- Tab links -->
      <div class="tab">
        <button class="tabLink" onclick="openCity(event, 'London')" id="defaultOpen">Visión</button>
        <button class="tabLink" onclick="openCity(event, 'Paris')">Misión</button>
        <button class="tabLink" onclick="openCity(event, 'Tokyo')">Fe</button>
      </div>

      <!-- Tab content -->
      <div id="London" class="tabcontent">
        <h3>Misión</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid iste debitis accusamus ut,
          similique quaerat! Dolorem fuga omnis tempore. Quasi in ratione molestiae sunt? Quos consectetur
          quasi ducimus deserunt? Ratione!
        </p>
      </div>

      <div id="Paris" class="tabcontent">
        <h3>Visión</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eius, perferendis fugit optio,
          nisi, ullam beatae quasi nobis explicabo eum cum. Deleniti laudantium rerum nobis tempora magni vel,
          totam officiis.
        </p>
      </div>

      <div id="Tokyo" class="tabcontent">
        <h3>Fe</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eius, perferendis fugit optio,
          nisi, ullam beatae quasi nobis explicabo eum cum. Deleniti laudantium rerum nobis tempora magni vel,
          totam officiis.
        </p>
      </div>
    </div>
<!-- -------------------------- MISION - VISIO - FE ---------------------------- -->


  </main>

<!-- -----------------------------------inicio footer ----------------------------->
  <footer>
    <div class="Cntr">                
        <p>Página Oficial © 2020 
          <a rel="nofollow" href="#" target="_parent">lagrancomisioncristiana.com</a>
        </p>
    </div>
  </footer>
<!-- -------------------------------------fin footer------------------------------->
  <script src="js/script.js"></script>
  <script src="js/tablink.js"></script>
  <script src="js/headerjquery.js"></script>
  <script src="js/header-script.js"></script>

</body>
</html>