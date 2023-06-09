<?php
require_once 'config/connect.php';
$works = mysqli_query($connect, "SELECT * FROM `works`");
$works = mysqli_fetch_all($works);

?>

<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

   <meta charset="utf-8">
   <title>Portfolio | Sparrow</title>
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <script src="js/modernizr.js"></script>
   <link rel="shortcut icon" href="favicon.ico">

</head>

<body>

   <!-- Header
   ================================================== -->
   <?php
   require_once('header.php');
   ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
               enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary" class="four columns entry-details">

               <h1>Our Portfolio.</h1>

               <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                  nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                  nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                  cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                  ornare odio.</p>

            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">

               <div class="works-wrapper">
                  <?php
                  foreach ($works as $work) {
                  ?>
                     <div class="columns portfolio-item">
                        <div class="item-wrap">
                           <a href="portfolio.php?id=<?= $work[0] ?>">
                              <img alt="" src="<?php echo $work[4]; ?>">
                              <div class="overlay"></div>
                              <div class="link-icon"><i class="fa fa-link"></i></div>
                           </a>
                           <div class="portfolio-item-meta">
                              <h5><a href="portfolio.html"><?php echo $work[1]; ?></a></h5>
                              <p>Illustrration</p>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>

                  <!-- <div class="columns portfolio-item first">
                     <div class="item-wrap">
                        <a href="portfolio.html">
                           <img alt="" src="images/portfolio/geometrics.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="portfolio.html">Geometrics</a></h5>
                           <p>Illustrration</p>
                        </div>
                     </div>
                  </div>

                  <div class="columns portfolio-item">
                     <div class="item-wrap">
                        <a href="portfolio.html">
                           <img alt="" src="images/portfolio/console.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="portfolio.html">Console</a></h5>
                           <p>Web Development</p>
                        </div>
                     </div>
                  </div>

                  <div class="columns portfolio-item first">
                     <div class="item-wrap">
                        <a href="portfolio.html">
                           <img alt="" src="images/portfolio/camera-man.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="portfolio.html">Camera Man</a></h5>
                           <p>Photography</p>
                        </div>
                     </div>
                  </div>

                  <div class="columns portfolio-item">
                     <div class="item-wrap">
                        <a href="portfolio.html">
                           <img alt="" src="images/portfolio/into-the-light.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="portfolio.html">Into The Light</a></h5>
                           <p>Photography</p>
                        </div>
                     </div>
                  </div>

                  <div class="columns portfolio-item first">
                     <div class="item-wrap">
                        <a href="portfolio.html">
                           <img alt="" src="images/portfolio/farmerboy.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="portfolio.html">Farmer Boy</a></h5>
                           <p>Branding</p>
                        </div>
                     </div>
                  </div>

                  <div class="columns portfolio-item">
                     <div class="item-wrap">
                        <a href="portfolio.html">
                           <img alt="" src="images/portfolio/coffee-cup.jpg">
                           <div class="overlay"></div>
                           <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                           <h5><a href="portfolio.html">Coffee Cup</a></h5>
                           <p>Web Design</p>
                        </div>
                     </div>
                  </div> -->

               </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

      </div> <!-- #page-content end-->

   </div> <!-- content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
                  This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>

            <li>
               <span>
                  This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                  <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>

         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->

   <!-- footer
   ================================================== -->
   <?php include('footer.php'); ?>

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>
      window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
   </script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/doubletaptogo.js"></script>
   <script src="js/init.js"></script>

</body>

</html>