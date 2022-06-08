<?php 
  $connect = mysqli_connect("localhost","root",'',"myprotfolio") or die("Server Connection Failed!");
  
  if(isset($_POST['send'])){
    

    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    

    $user_massage = $_POST['message'];

    $sql = "INSERT INTO user_massage (name, email, massage) VALUES ('{$user_name}', '{$user_email}', '{$user_massage}') ";
    $result = mysqli_query($connect, $sql) or die("Query Failed!");

    if($result) {
      $massage = "<p style=\"margin:30px 5px; background-color: #16df05; ; padding: 10px 33px; border-radius: 25px;\"> Thank You for Contacting Us. </p>";
    }else {
      $massage = "<p style = \"margin:30px 5px; background-color: #eb3b5a; color:#2d2525; padding: 10px 33px; border-radius: 25px;\"> Oho!! Massage Not Send!  </p>";
    }

    
  }

?>

<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MI_Pallab</title>
    <!-- progress bar start -->
    
    
    <!-- progress bar end -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">

    <?php 
      $user_sql = "SELECT * FROM users";
      $user_query = mysqli_query($connect, $user_sql) ;
      $user_row = mysqli_fetch_assoc($user_query);
    ?>

    <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#"><?php echo $user_row['uname'];?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
              <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
              <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <a href="#" class="btn btn-primary">Log In / Sign Up</a>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content">
      <div id="content">
<header>
  <div class="cover bg-light">
    <div class="container px-3">
      <div class="row">
        <div class="col-lg-6 p-2"><img class="img-fluid" src="images/illustrations/hello3.svg" alt="hello"/></div>
        <div class="col-lg-6">
          <div class="mt-5">
            <p class="lead text-uppercase mb-1">Hello!</p>
            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m <?php echo $user_row['name'];?></h1>
            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100"><?php echo $user_row['profession'];?></p>
            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
              <nav role="navigation">
                <?php
                  $social_sql = "SELECT * FROM social_link";
                  $social_result = mysqli_query($connect, $social_sql);
                  $social_row = mysqli_fetch_assoc($social_result);
                ?>
                <ul class="nav justify-content-left">
                  <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['twitter']; ?>" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
                  <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['facebook']; ?>" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                  <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['instagram']; ?>"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                  <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['linkedin']; ?>" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                  <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['behance']; ?>" title="Behance"><i class="fab fa-behance"></i><span class="menu-title sr-only">Behance</span></a></li>
                </ul>
              </nav>
            </div>
            <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In Touch <i class="fas fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wave-bg"></div>
</header>
<div class="section pt-4 px-3 px-lg-4" id="about">
  <?php
    $about_sql = "SELECT * FROM `about_us_section`";
    $about_result = mysqli_query($connect, $about_sql);
    $about_row = mysqli_fetch_assoc($about_result);
  ?>
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h4 my-2">Hello! I’m <?php echo $user_row['uname'];?></h2>
        <p><?php echo $about_row['description'];?></p>
        <div class="row mt-3">
          <div class="col-sm-2">
            <div class="pb-1">Age:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $about_row['age'];?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Email:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $social_row['email'];?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Skype:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $social_row['skype'];?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Phone:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $social_row['phone'];?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Address:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $about_row['address'];?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Staus:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">Available</div>
          </div>
        </div>
      </div>
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="<?php echo $about_row['photo'];?>" width="400" height="400" alt="Walter Patterson"/></div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="services">
  <?php
    $service_sql = "SELECT * FROM `section_&_skill` ";
    $service_result = mysqli_query($connect, $service_sql) or die("service query Field");
    $service_row = mysqli_fetch_assoc($service_result);
  ?>
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center"><?php echo $service_row['title_name'];?></h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"> <?php echo $service_row['paragraph'];?></p>
    </div>
   
    <div class="row py-3">
      <?php 
        $service_sql2 = "SELECT * FROM `my_service_section` ";
        $service_result2 = mysqli_query($connect, $service_sql2) or die("service query Field");
        
        while($service_row2=mysqli_fetch_assoc($service_result2)) {
      ?>
        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="<?php echo $service_row2['icon'] ?>" width="96" height="96" alt="web design"/>
          <div class="h5"><?php echo $service_row2['icon_header'] ?></div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="skills">
   <?php
    $service_sql3 = "SELECT * FROM `section_&_skill` WHERE `title_name` ='My Skills'";
    $service_result3 = mysqli_query($connect, $service_sql3) or die("service 3 query Field");
    $service_row3 = mysqli_fetch_assoc($service_result3);
  ?>
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center"><?php echo $service_row3['title_name'];?></h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"><?php echo $service_row3['paragraph'];?></p>
    </div>
    <div class="bg-light rounded p-3">
     
      <div class="row ">
        <?php
            $skill_sql = "SELECT * FROM `skill_section`";
            $skill_result = mysqli_query($connect, $skill_sql) or die("skill query Field");
            while($skill_row = mysqli_fetch_assoc($skill_result)) {
        ?>
            <div class="col-sm-3 text-center mb-3">
              <div class="progressbar">
                <div class="second circle" data-percent="<?php echo $skill_row['skill_persent'];?>">
                    <strong></strong>
                  <span><?php echo $skill_row['lan_name'];?></span>
                </div>
              </div>
            </div>
        <?php } ?>  
            
      </div>
    </div>
  </div>
</div>
<!-- <div class="section px-2 px-lg-4 pt-5" id="portfolio">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Portfolio </h2>
    </div>
    <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
      <div class="grid-sizer">
      <div class="grid-item">
        <a href="https://dribbble.com">
          <figure class="portfolio-item">
            <img src="images/portfolio/1-small.png" data-bp="images/portfolio/1.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">Web Design</h4>
              <div>Dribbble.com</div>
            </figcaption>
          </figure>
        </a></div>
        </div>
      <div class="grid-item"><a href="https://github.com">
          <figure class="portfolio-item"><img src="images/portfolio/2-small.png" data-bp="images/portfolio/2.jpg" data-caption="Example of an optional caption."/>
            <figcaption> 
              <h4 class="h5 mb-0">Web Development</h4>
              <div>GitHub.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://soundcloud.com/">
          <figure class="portfolio-item"><img src="images/portfolio/3-small.png" data-bp="images/portfolio/3.jpg" data-caption="Example of an optional caption."/>
            <figcaption> 
              <h4 class="h5 mb-0">Audio Mixing</h4>
              <div>Soundcloud.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.adobe.com/">
          <figure class="portfolio-item"><img src="images/portfolio/4-small.png" data-bp="images/portfolio/4.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">Video Editing</h4>
              <div>Adobe After Effects</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.adobe.com/">
          <figure class="portfolio-item"><img src="images/portfolio/5-small.png" data-bp="images/portfolio/5.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">Photography</h4>
              <div>Adobe Photoshop</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.android.com/">
          <figure class="portfolio-item"><img src="images/portfolio/6-small.png" data-bp="images/portfolio/6.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">App Development</h4>
              <div>Android</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://flutter.dev/">
          <figure class="portfolio-item"><img src="images/portfolio/7-small.png" data-bp="images/portfolio/7.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">App Design</h4>
              <div>Flutter</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://flutter.dev/">
          <figure class="portfolio-item"><img src="images/portfolio/8-small.png" data-bp="images/portfolio/8.jpg"/>
            <figcaption>
              <h4 class="h5 mb-0">App Development</h4>
              <div>Flutter</div>
            </figcaption>
          </figure></a></div>
    </div>
  </div>
</div> -->
<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Experience</h2>
    </div>
    <div class="row">
      <?php
        $experience_sql = "SELECT * FROM experience_section";
        $experience_result = mysqli_query($connect, $experience_sql);
        while($experience_row = mysqli_fetch_assoc($experience_result)) {
      ?>

      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1"><?php echo $experience_row['h_title'];?></h3>
                <div class="text-muted text-small"><?php echo $experience_row['sm_title'];?></div>
              </div><img src="<?php echo $experience_row['icon_pic'];?>" width="48" height="48" alt="ui-ux"/>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p><?php echo $experience_row['paragraph'];?></p>
          </div>
        </div>
      </div>
    <?php } ?>
      
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="testimonials">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Client Testimonials</h2>
    </div>
    <?php
      $review_sql = "SELECT * FROM client_review_section";
      $review_result = mysqli_query($connect, $review_sql);
    ?>
    <div class="row"> 
      <?php
         while($review_row = mysqli_fetch_assoc($review_result)){
      ?>
      <div class="col-md-6 mb-5 float-end" data-aos="fade-right" data-aos-delay="100">
        <div class="d-flex ms-md-3">
          <span><i class="fas fa-2x fa-quote-left"></i></span>
          <span class="m-2"><?php echo $review_row['client_review']; ?></span>
        </div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder"><?php echo $review_row['client_name']; ?></div>
            <div class="text-small"><?php echo $review_row['client_title']; ?></div>
          </div><img class="me-md-3 rounded" src="<?php echo $review_row['client_photo']; ?>" width="96" height="96" alt="client all"/>
        </div>
      </div>
    <?php
        }
    ?>

  </div>
</div>
<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
   <?php 

        $contact_sql = "SELECT * FROM contact_section";
        $result = mysqli_query($connect, $contact_sql) or die("Query Failed!");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0) {
      ?>
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center"><?php echo $row['title'];?></h2>
    </div>
    <div class="row">
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="bg-light my-2 p-3 pt-2">
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group my-2">
              <label for="name" class="form-label fw-bolder">Name</label>
              <input class="form-control" type="text" id="name" name="name" required>
            </div>
            <div class="form-group my-2">
              <label for="email" class="form-label fw-bolder">Email</label>
              <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="form-group my-2">
              <label for="message" class="form-label fw-bolder">Message</label>
              <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
            </div>
            <input id= "liveToastBtn" class="btn btn-primary mt-2" type="submit" value= "Send" name="send">
                <?php 
                  if(isset($massage)) {
                    echo "<p> $massage </p>";


                  }
                ?>
          </form>
        </div>
      </div>

     
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="mt-3 px-1">
          <div class="h5"><?php echo $row['heading'];?></div>
          <p><?php echo $row['paragraph'];?></p>
        </div>
        <div class="mt-53 px-1">
          <?php
            $contact_social_sql = "SELECT * FROM social_link";
            $result_social = mysqli_query($connect, $contact_social_sql) or die("Query Failed!");
            $row_socila = mysqli_fetch_assoc($result_social);

            if(mysqli_num_rows($result_social) > 0) {
          ?>
            <div class="row"> 
              <div class="col-sm-2">
                <div class="pb-1">Email:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?php echo $row_socila['email'] ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">IMO</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?php echo $row_socila['imo'] ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Phone:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?php echo $row_socila['phone'] ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">What's App</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?php echo $row_socila['what\'s_app'] ?></div>
              </div>
            </div>
          <?php
            } // mysqli_num_rows
          ?>  
        </div>
      </div>
      
    </div>
  </div>
  <?php 
     }//if mysqli_num_rows
  ?>
</div>
</div>
    </div>
<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4"><?php echo $user_row['name'];?></div>
      <p><?php echo $user_row['profession'];?></p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['twitter']; ?>" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
            <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['facebook']; ?>" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['instagram']; ?>" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" target="_blank" href="https://www.linkedin.com/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
            <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $social_row['behance']; ?>" title="Behance"><i class="fab fa-behance"></i><span class="menu-title sr-only">Behance</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; <?php echo $user_row['name'];?>. All rights reserved. 2022</div>
      <div>
        <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
    </div>
  </div>
</footer>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> <!-- progress bar -->
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- progress bar --> 
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script type="text/javascript">
      $(document).ready(function ($) {
          function animateElements() {
              $('.progressbar').each(function () {
                  var elementPos = $(this).offset().top;
                  var topOfWindow = $(window).scrollTop();
                  var percent = $(this).find('.circle').attr('data-percent');
                  var animate = $(this).data('animate');
                  if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                      $(this).data('animate', true);
                      $(this).find('.circle').circleProgress({
                          // startAngle: -Math.PI / 2,
                          value: percent / 100,
                          size : 400,
                          thickness: 15,
                          fill: {
                              color: '#f6e05e'
                          }
                      }).on('circle-animation-progress', function (event, progress, stepValue) {
                          $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
                      }).stop();
                  }
              });
          }

          animateElements();
          $(window).scroll(animateElements);
      });
    </script>
  </body>
</html>