
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
  // <script type="text/javascript">

        $('#reg-form').submit(function(e){ 
            e.preventDefault(); // Prevent Default Submission
            $.ajax({
         url: 'mailer.php',
         type: 'POST',
         data: $(this).serialize(), // it will serialize the form data
                dataType: 'html'
            })
            .done(function(data){
             $('#form-content').fadeOut('slow', function(){
                  $('#form-content').fadeIn('slow').html(data);
                });
             console.log(data);
            })
            .fail(function(){
         alert('Submit Failed ...'); 
            });
        });
  //     </script>
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
        <!-- <li><a href="aboutUs.html">About Us </a></li> -->
        <li><a href="servicesRobar.php">Services</a></li>
        <li><a href="socialMediaRobar.php">Social Media</a></li>
        <li><a href="contactUsRobar.php">Contact Us</a></li>
        <li><a href="latestNewsRobar.php">Testimonials</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>


  <div class="navFiller"></div>

  <div class="container-fluid banner">
    <div class="jumbotron text-center">

      <h1>Welcome</h1> 
          
      <p>Our main goal is to transform your dream into a home that will make you proud of choosing us as your builder. We provide our clients with professionalism and quality construction through out the building process and at the same time always be available to answer any questions you might have, any time of day or night and weekends. There are no jobs too big or small and we will provide customer satisfaction with every job we take.</p>
        
      </div>   
    </div>

    <div class="container-fluid indexBody">
      <div id="aboutUs">
        <div class="col-md-6 aboutUsDiv1">
          <img class="placeHolderImg" src="../img/home1.jpg">
        </div>
        <div class="col-xs-12 col-md-6 aboutUsDiv1">
          <h1>About Us</h1>
            <p>Our first priority is the homeowner. We hope that our web site provides you with all the information about our process. If you have any questions please contact us.
              <br>
              In business for over 10 years we have competitive pricing and will design your dream home, for any budget. Our design process is provided at no cost to you.
              
            </p>
          </div>
      </div>
    </div>




<!-- Modal -->
<div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <h1 class="modal-title text-center" id="ModalLabel">Contact Us</h1> 
      <p class="text-center">Let Us know about your Next Project Ideas.</p>
        <div class="modal-body">
          <div class="row">
            <!-- <div class="col-md-6 col-md-offset-3"> -->
            <div id="form-content" class="col-xs-10 col-xs-offset-1">
              <form id="reg-form"class="form-horizontal" method="post">
                <fieldset>
                  <!-- <legend class="text-center">Contact us</legend> -->

                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">First Name</label>
                    <div class="col-md-9">
                      <input id="name" name="first_name" type="text" placeholder="Your First name" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Last Name</label>
                    <div class="col-md-9">
                      <input id="name" name="last_name" type="text" placeholder="Your Last name" class="form-control">
                    </div>
                  </div>

                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                    <div class="col-md-9">
                      <input id="email" name="email" type="text" placeholder="Your Email" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Telephone</label>
                    <div class="col-md-9">
                      <input id="name" name="telephone" type="text" placeholder="Your Number" class="form-control">
                    </div>
                  </div>

                  <!-- Message body -->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Your message</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="message" name="comments" placeholder="Please enter your message here..." rows="5"></textarea>
                    </div>
                  </div>

                  <!-- Form actions -->
                  <div class="form-group">
                    <div class="col-md-12 text-right">
                      <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                   
                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
        <!-- Modal -->
     

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
              <li><a href="#" data-toggle="modal" data-target="#contactUsModal"><i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i><span class="footerSubTitle"> Email:<br>robarinc@gmail.com</span></a></li>
              <li><i class="fa fa-lg fa-user-circle" aria-hidden="true"></i> <span class="footerSubTitle"> 24/7 Support:</span> <a href="tel:555-555-5555">210.889.9618</a> </li>
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
                          <li><span class="footerSubTitle">Main Office</span><br> <a href="#"> Floresville TX </a> </li>
                        
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


