<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hello World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/mainRobar.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="height:100px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="robarHome.php">
        <img class="navbarLogo" alt="Brand" src="../img/RobarLogo.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li><a href="aboutUs.php">About Us </a></li> -->
        <li><a href="servicesRobar.php">Services</a></li>
        <!-- <li><a href="latestNews.php">Latest News</a></li> -->
        <li><a href="socialMediaRobar.php">Social Media</a></li>
        <li class="active"><a href="contactUsRobar.php">Contact Us <span class="sr-only">(current)</span></a></li>
        <li><a href="latestNewsRobar.php">Testimonials</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>
  <div class="navFiller"></div>
  <div class="container-fluid banner">
    <div class="jumbotron contactTron text-center">

      <h1>Ready to get started?</h1> 
      <p>Click below and let us know how we can help you today!<p>    

        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#contactUsModal">
          Contact Us
        </button>
        
      </div>   
    </div>

    <div class="container-fluid indexBody">
      <div id="aboutUs">

        <div class="col-md-6 col-md-offset-3 text-center">

          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>



          </div>


        </div>

      </div>

      <!-- Modal -->
      <div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <h1 class="modal-title text-center" id="ModalLabel">Contact Us</h1> 
            <p class="text-center">Ready To start your next project?</p>
              <div class="modal-body">
                <div class="row">
                  <!-- <div class="col-md-6 col-md-offset-3"> -->
                  <div class="col-xs-10 col-xs-offset-1">
                    <form class="form-horizontal" action="" method="post">
                      <fieldset>
                        <!-- <legend class="text-center">Contact us</legend> -->

                        <!-- Name input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="name">Name</label>
                          <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                          </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="message">Your message</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                          </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                          <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Submit</button>
                            <!-- <button type="submit" class="btn btn-primary btn-lg">Submit</button> -->
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
        </div>


      </body>
      <footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <h3 class="footerTitle"> Our Promise</h3>
          <ul>
            <li><p>DEDICATED AND DEVOTED IN MAKING EACH CLIENTS VISION A DREAM COME TRUE!!<p> </li>

            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3 class="footerTitle"> Contact Us </h3>
            <ul>
       <!--        <li><i class="fa fa-lg fa-phone" aria-hidden="true"></i><span class="footerSubTitle"> Phone:</span><a href="tel:555-555-5555">  210.111.1111</a> </li>
              <li><i class="fa fa-lg fa-fax" aria-hidden="true"></i><span class="footerSubTitle"> Fax:</span><a href="tel:555-555-5555">210.111.1234 </a> </li> -->
              <li><i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i><span class="footerSubTitle"> Email:</span><a href="mailto:htrevino29@gmail.com?Subject=Hello%20again">robarinc@gmail.com</a> </li>
              <li><i class="fa fa-lg fa-user-circle" aria-hidden="true"></i> <span class="footerSubTitle"> 24/7 Support:</span> <a href="tel:555-555-5555">210.111.1111</a> </li>
            </ul>
          </div>
               <!--  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3 class="footerTitle"> Careers</h3>
                    <ul>
                        <li> <a href="#"> Join our Team  </a> </li>
                        
                      </div> -->
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <h3 class="footerTitle"> Location </h3>
                        <ul>
                          <li><span class="footerSubTitle">Main Office</span><br> <a href="#">111 address  <br> Floresville TX <br> 78114   </a> </li>
                        
                        <!-- li> <a href="#"> San Antonio Tx</a> </li>
                        <li> <a href="#"> 78217</a> </li> -->
                        <!-- <li> <a href="#"> Lorem Ipsum </a> </li> -->
                      </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12 ">
                      <h3 class="footerTitle"> Follow Us</h3>                 
                      <ul class="social">
                        <li> <a href="https://www.facebook.com/RobarCustomHomesInc/"> <i class="fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <!-- <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>   -->                     
                      </ul>
                    </div>
                  </div>
                  <!--/.row--> 
                </div>
                <!--/.container--> 
              </div>
              <!--/.footer-->

              <div class="footer-bottom">
                <div class="container">
                  <p class="pull-left"> Copyright 2017, RoBar Construction, All Rights Reserved.  </p>
            <!-- <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
              </div> -->
            </div>
          </div>
          <!--/.footer-bottom--> 
        </footer>
        </html>


