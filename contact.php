<!DOCTYPE html>
<html>

  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Clinique | Contact us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script langage="javascript" src="JSFiles/interaction1.js"></script>
    <link rel="stylesheet" href="CSSFiles/style1.css">
    
  </head>

  <body>
  <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="Images/Logo Site.PNG" alt="Logo" title="Logo" height="120px" width="160px">
            </a>

            <ul class="nav nav-pills">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>
            </ul>
        </header>
    </div>

    <section>

    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title">Love to Hear From You</h1>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

                <div class="find-widget">
                 Company:  <a href="https://www.emsi.ma" target="_blank">E-Clinique</a>
                </div>
                <div class="find-widget">
                 Address: <a href="https://www.google.com/maps/place/Ecole+Marocaine+des+Sciences+de+l'Ing%C3%A9nieur/@31.6537022,-8.0225456,18z/data=!4m12!1m6!3m5!1s0xdafec210db584a7:0x1cb520ab88165485!2sEcole+Marocaine+des+Sciences+de+l'Ing%C3%A9nieur!8m2!3d31.6535903!4d-8.0214513!3m4!1s0xdafec210db584a7:0x1cb520ab88165485!8m2!3d31.6535903!4d-8.0214513?hl=fr" target="_blank">Marrakech Maroc</a>
                </div>
                <div class="find-widget">
                  Phone:  <a href="#">+212524422222</a>
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="contactprocess.php">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input type="submit" name="send" class="btn btn-primary me-md-2" >
                        </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
  </body>

</html>
