
<html lang="en">
<head>
  <title>Robar Custom Homes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../css/mainRobar.css">
  <link rel="stylesheet" href="../css/social.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="js/popUps.js"></script>
  <!-- Magnific Popup core JS file -->
  <script src="magnific-popup/jquery.magnific-popup.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    
        $('#reg-form').submit(function(e){
  
            e.preventDefault(); // Prevent Default Submission
          
            $.ajax({
         url: 'send_form_email.php',
         type: 'POST',
         data: $(this).serialize(), // it will serialize the form data
                dataType: 'html'
            })
            .done(function(data){
             $('#form-content2').fadeOut('slow', function(){
                  $('#form-content2').fadeIn('slow').html(data);
                });
             console.log(data);
            })
            .fail(function(){
         alert('Submit Failed ...'); 
            });
        });
  });
  </script>

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

      <h1 style="margin-top:40px;">Welcome</h1> 
          
      <p>Our main goal is to transform your dream into a home that will make you proud of choosing us as your builder. We provide our clients with professionalism and quality construction through out the building process and at the same time always be available to answer any questions you might have, any time of day or night and weekends. There are no jobs too big or small and we will provide customer satisfaction with every job we take.</p>
        
      </div>   
    </div>

    <div class="container-fluid indexBody">
      <div id="aboutUs">
        <div class="col-md-6 col-md-offset-1 aboutUsDiv1">
          <img class="placeHolderImg" src="../img/home1.jpg" >
        </div>
        <div class="col-xs-12 col-md-4 aboutUsDiv1">
          <h1>About Us</h1>
            <p>Our first priority is the homeowner. We hope that our web site provides you with all the information about our process. If you have any questions please contact us.
              <br>
              In business for over 10 years we have competitive pricing and will design your dream home, for any budget. Our design process is provided at no cost to you.
              
            </p>
          </div>
      </div>
    </div>




          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content col-xs-12 col-md-8 col-md-offset-2">
        <div class="modal-header">
    
          <h4 class="modal-title text-center">Contact Form</h4> 


        </div>
      
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <div id="form-content2">
               <form method="post" id="reg-form" autocomplete="off">

                <div>
                  <!-- <p class="text-center" style="font-size:70%;">Register to begin designing your home</p> -->
                </div>
             
               <div class="form-group">
               <input type="text" class="form-control inputSpace" name="first_name" id="fname" placeholder="First Name" required />
               </div>

               <div class="form-group">
               <input type="text" class="form-control inputSpace" name="last_name" id="lname" placeholder="Last Name" required />
               </div>             
               
               <div class="form-group">
               <input type="text" class="form-control inputSpace" name="email" id="email" placeholder="Your Email" required />
               </div>
                   
               <div class="form-group">
               <input type="text" class="form-control inputSpace" name="telephone" id="phone" placeholder="Phone Number" required />
               </div>
                 
               <div class="form-group">
               <textarea type="textarea" class="form-control" name="comments" id="comment" placeholder="Comments"></textarea>
               </div>

               <hr/>
                  
               <div class="form-group">
               <!-- <button type="submit" name="submit" value="Submit" class="btn">Submit</button> -->
               <button class="btn btn-primary formSub">Start</button> 

                     
               </div>
              
              </form>     
          </div>  

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
        </div>
      </div>
      
    </div>
  </div>
    <!-- end modal -->
<!-- <script src="js/validator.js"></script>
<script src="js/contact.js"></script>   --> 

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
              <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i><span class="footerSubTitle"> Email:<br>robarinc@gmail.com</span></a></li>
              <li><i class="fa fa-lg fa-user-circle" aria-hidden="true"></i> <span class="footerSubTitle"> 24/7 Support:</span> <a href="tel:555-555-5555">210.889.9618</a> </li>
            </ul>
          </div>
               
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <h3 class="footerTitle"> Location </h3>
                      <ul>
                        <li><span class="footerSubTitle">Main Office</span><br> <a href="#"> Floresville TX </a> </li>
                      </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12 ">
                      <h3 class="footerTitle"> Follow Us</h3>                 
                      <ul class="social ">
                        <li> <a href="https://www.facebook.com/RobarCustomHomesInc/"> <i class="fa fa-facebook"> </i>   </a> </li>
                       <!--  <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li> -->
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
            
                </div>
              </div>
          <!--/.footer-bottom--> 
        </footer>
</html>


