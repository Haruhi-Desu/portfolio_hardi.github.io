<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KULIAH</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <!-- AOS CSS -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- my css -->

    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="home">
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="../img/UI.png" alt="" width="200px" class="rounded-circle img-thumbnail" />
      <h1 class="display-4" data-aos="fade-right" data-aos-offset="200" data-aos-delay="120" data-aos-duration="500">Universitas Indonesia</h1>
      <p class="lead" data-aos="fade-left" data-aos-offset="200" data-aos-delay="120" data-aos-duration="1000">Pondok Cina, Beji, Depok City, West Java 16424</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,256L40,245.3C80,235,160,213,240,197.3C320,181,400,171,480,176C560,181,640,203,720,229.3C800,256,880,288,960,277.3C1040,267,1120,213,1200,208C1280,203,1360,245,1400,266.7L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- / Jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <br /><br /><br /><br /><br />
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-offset="200" data-aos-delay="120" data-aos-duration="500">
            <p><button type="button" class="btn btn-dark"><a href="?page=master.php">Master</a></button></p>
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-offset="200" data-aos-delay="120" data-aos-duration="500">
            <p><button type="button" class="btn btn-dark"><a href="?page=transaksi.php">Transaksi</a></button></p>
          </div>
        </div><br><br>
    <div class="row">
    <div class="center">
        <div class="card">
            <p>
                <?php
                $p=$_GET['page'];
                if($p<>''){
                    include $p;
                }
            ?>
            </p>
        </div>
    </div>
    </div>
      </div>
    </section>

    
    <!-- / About -->
   <!-- JS Bootstraps -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Javascript aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 200, // offset (in px) from the original trigger point
        delay: 200, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
      });
    </script>
</body>
</html>