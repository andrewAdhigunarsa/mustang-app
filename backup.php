 <?php
// NOTE: this page must be saved as a .php file.
// And your server must support PHP 5.3+ PHP Mail().
// Define variables and set to empty values
$options = $features = $result = $name = $email = $phone = $message = $human = "";
$errName = $errEmail = $errPhone = $errMessage = $errHuman = "";
    if (isset($_POST["submit"])) {
        $features = $_POST['features'];
        $options = $_POST['options'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
         //valid address on your web server
        $from = 'info@thomsonautomotive.com.au';
        //your email address where you wish to receive mail
        $to = 'thomsonfordleads@gmail.com';
        $subject = 'MUSTANG2018 FORM SUBMISSION';
        $headers = "From:$from\r\nReply-to:$email";
        $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message: $message\n Features: $features\n Options: $options";
// Check if name is entered
if (empty($_POST["name"])) {
$errName = "Please enter your name.";
} else {
    $name = test_input($_POST["name"]);
}
// Check if email is entered
if (empty($_POST["email"])) {
$errEmail = "Please enter your email address.";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errEmail = "Invalid email format.";
    }
}
// Check if phone is entered although it is not required so we don't need error message
if (empty($_POST["phone"])) {
$phone = "Please enter your phone number";
} else {
    $phone = test_input($_POST["phone"]);
}
//Check if message is entered
if (empty($_POST["message"])) {
$errMessage = "Please enter your message.";
} else {
    $message = test_input($_POST["message"]);
}
//Check if simple anti-bot test is entered
if (empty($_POST["human"])) {
$errHuman = "Please enter the sum.";
} else {
     if ($human !== 12) {
     $errHuman = 'Wrong answer. Please try again.';
        }
}
// If there are no errors, send the email & output results to the form
if (!$errName && !$errEmail && !$errPhone &&  !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success col-12"><h2><span class="glyphicon glyphicon-ok"></span> Message sent!</h2><h3>Thank you for contacting us. Someone will be in touch with you soon.</h3></div><br><div class="col-12 text-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myFinanceModal">Apply for Finance</button></div>';
    } else {
        $result='<div class="alert alert-danger"><h2><span class="glyphicon glyphicon-warning-sign"></span> Sorry there was a form processing error.</h2> <h3>Please try again later.</h3></div>';
       }
    }
}
//sanitize data inputs
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = (filter_var($data, FILTER_SANITIZE_STRING));
   return $data;
}
//end form processing script
?>

<!DOCTYPE html>

<html>

<head>
   <!--Mustang2018 customiser created by Andrew Adhigunarsa-->
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="images/mustang.ico" />
  <title>2018 Ford Mustang</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name="description" content="Customise Your Own 2018 Ford Mustang GT EcoBoost In Sydney. Choose Fastback or Convertible choose colour and all of your options">
  <meta name="keywords" content="mustang,mustang2018,customiser,mustang gt,mustanggt,shelby,gt,ecoboost,custom mustang">
  <meta name="author" content="Andrew Adhigunarsa">

  <link rel="stylesheet" href="style.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  
  
  <!--<link rel="stylesheet" href="css/style.css">-->
   <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-98364532-1', 'auto');
    ga('send', 'pageview');
  
  </script>
</head>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="images/thomsonford_logo.png" alt="Logo"/></a>

  </nav>

  <main style="padding:30px 0 0 0; ">


    <div class="container" >
      
        <div class="row">
      <?php echo $result;?>
      </div>
      
        <div class="wrapper d-none d-sm-block">
        <nav class="stepper">
          <ul class="stepper__list">
            <li id="stepperExterior" class="stepper__list__item stepper__list__item--current">
              <div class="stepperIcon" id="exteriorIcon">
                <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24" viewbox="0 0 24 24">
                <path d="M12.2 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 1.377a9.377 9.377 0 1 1 0-18.754 9.377 9.377 0 0 1 0 18.754zm-4-8a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754z" fill="#006DFF" fill-rule="evenodd"></path></svg>
              </div>

              <span class="stepper__list__title">1. Exterior</span>
            </li>
            <li id="stepperInterior" class="stepper__list__item stepper__list__item--pending">
              <div class="stepperIcon" id="interiorIcon">
                <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24" viewbox="0 0 24 24">
                <path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z"></path></svg>
              </div>

              <span class="stepper__list__title">2. Interior</span>
            </li>
            <li id="stepperOptions" class="stepper__list__item stepper__list__item--pending">
              <div class="stepperIcon" id="optionIcon">
                <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24" viewbox="0 0 24 24">
                <path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z"></path></svg>
              </div>
              <span class="stepper__list__title">3. Options</span>
            </li>
            <li id="stepperComplete" class="stepper__list__item stepper__list__item--pending">
              <div class="stepperIcon" id="completeIcon">
                <svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24" viewbox="0 0 24 24">
                <path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z"></path></svg>
              </div>

              <span class="stepper__list__title">4. Complete</span>
            </li>

          </ul>
        </nav>
      </div>

    
      <div id="carBuilder" class="row justify-content-center" >
      
        <div class="col-12">
              
              <div class="row">
          
                <div class="col-12 text-muted text-center">
                    <h1 style="font-weight:500; text-transform: uppercase; font-size:2.5em;">2018 Mustang <span  id="cardModelHeader"></span> </h1>
                    <h2 style="font-weight:100"><span  id="cardStyleHeader"></span></h2>
                </div>
                
                <div id="interiorImage" class="carousel slide hidden col-12 col-sm-9 " data-ride="carousel">
                    <div class="carousel-inner">
                      <div id="interiorPic2-carousel" class="carousel-item active">
                        <img width="100%" id="interiorPic2" src="" />
                      </div>
                      <div id="interiorPic1-carousel" class="carousel-item">
                        <img width="100%" id="interiorPic1" src="" />
                      </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#interiorImage" role="button" data-slide="prev">
                        <div class="arrow leftIcon">
                          <svg width="40px" height="30px" viewBox="0 0 50 80" xml:space="preserve">
                            <polyline fill="none" stroke="white" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" points="
                        	45.63,75.8 0.375,38.087 45.63,0.375 "/>
                          </svg>  
                        </div>
                      </a>
                    <a class="carousel-control-next" href="#interiorImage" role="button" data-slide="next">
                        <div class="arrow rightIcon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="30px" viewBox="0 0 50 80" xml:space="preserve">
                            <polyline fill="none" stroke="white" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" points="
                        	0.375,0.375 45.63,38.087 0.375,75.8 "/>
                          </svg>
                        </div>
                    </a>
                </div>
      
      
                <div id="carouselcar" class="carousel slide col-12 col-sm-9 " data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselcar" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselcar" data-slide-to="1"></li>
                    <li data-target="#carouselcar" data-slide-to="2"></li>
                    <li data-target="#carouselcar" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner" >
                    
      
                    <div class="carousel-item active" >
                      <div class="card" style="border: none;">
                        <img class="img-fluid card-img-top d-block w-100" id="carPic" onerror="this.src='images/Notavailable.png'" src="images/FastbackEcoboost-RaceRed-front.png" alt="First slide" style="padding:0;">
                        <img class="img-fluid card-img-overlay d-block w-100" id="wheel1" src="" style="padding:0;"  >
                        <img class="img-fluid card-img-overlay d-block w-100" id="stripe1" src="" style="padding:0;"  >
                      </div>              
                    </div>
                    <div class="carousel-item">
                      <div class="card" style=" border: none;">
                        <img class="img-fluid card-img-top d-block w-100" id="carPic2" onerror="this.src='images/Notavailable3.png'" src="" alt="First slide" style="padding:0;">
                        <img class="img-fluid card-img-overlay d-block w-100" id="wheel2" src="" style="padding:0;" >
                        <img class="img-fluid card-img-overlay d-block w-100" id="stripe2" src="" style="padding:0;" >
                      </div>              
                    </div>
                    <div class="carousel-item">
                      <div class="card" style="width:100%; border: none;">
                        <img class="img-fluid card-img-top d-block w-100" id="carPic3" onerror="this.src='images/Notavailable2.png'" src="" alt="First slide" style=" padding:0;">
                        <img class="img-fluid card-img-overlay d-block w-100" id="wheel3" src="" style="padding:0;"  >
                        <img class="img-fluid card-img-overlay d-block w-100" id="stripe3" src="" style="padding:0;" >
                      </div>              
                    </div>
                      <div class="carousel-item ">
                      <div class="card" style="width:100%; border: none;">
                        <img class="img-fluid card-img-top d-block w-100" id="carPic4" onerror="this.src='images/Notavailable4.png'" src="images/FastbackEcoboost-ShadowBlack-front2.png" alt="First slide" style=" padding:0;">
                        <img class="img-fluid card-img-overlay d-block w-100" id="wheel4" src="" style="padding:0;" >
                        <img class="img-fluid card-img-overlay d-block w-100" id="stripe4" src="" style="padding:0;">
                      </div>
                    </div>
                  </div>
                  
                  <a class="carousel-control-prev" href="#carouselcar" role="button" data-slide="prev">
                    <div class="arrow leftIcon">
                      <svg width="40px" height="30px" viewBox="0 0 50 80" xml:space="preserve">
                        <polyline fill="none" stroke="grey" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" points="
                    	45.63,75.8 0.375,38.087 45.63,0.375 "/>
                      </svg>  
                    </div>
                        <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                        <!--<span class="sr-only">Previous</span>-->
                      </a>
                  <a class="carousel-control-next" href="#carouselcar" role="button" data-slide="next">
                        <div class="arrow rightIcon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="30px" viewBox="0 0 50 80" xml:space="preserve">
                            <polyline fill="none" stroke="grey" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" points="
                        	0.375,0.375 45.63,38.087 0.375,75.8 "/>
                          </svg>
                        </div>
                        <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                        <!--<span class="sr-only">Next</span>-->
                      </a>
                     
                </div>
      
                <div class="col-12 col-sm-3 d-none d-sm-block text-muted" style="padding: 20px;">
                      
                      <div class="row">
                        <div class="col-12 bottom15">
                          <div class="row"><div class="col-12"><h5>Engine</h5></div></div>
                          <div class="row"><div class="col-12"><span class="carEngine"></span></div></div>
                         
                        </div>
                     
                        <div class="col-12 bottom15">
                          <div class="row"><div class="col-12"><h5>Style</h5></div></div>
                          <div class="row"><div class="col-12"><span class="carStyle"></span></div></div>
                        </div>
                
                        <div class="col-12 bottom15">
                          <div class="row"><div class="col-12"><h5>Transmission</h5></div></div>
                          <div class="row"><div class="col-12"><span class="carTransmission2"></span></div></div>
                        </div>
                  
                        <div class="col-12 bottom15">
                          
                          <div class="row"><div class="col-12"><h5>Colour</h5></div></div>
                          <div class="row"><div class="col-12"><span class="carColour"></span></div></div>
                        </div> 
                        <div class="col-12 bottom15">
                          <!-- Button trigger modal -->
                            <button id="calltoaction" type="button" class="btn btn-info d-none" data-toggle="modal" data-target="#exampleModalCenter">
                              Get a quote
                            </button>
                        </div>
                      </div>
                     
                                      
                </div>
          
            </div>

          </div>

                     <p class="text-center" style="color:grey; font-size: .8em; ">*overseas model shown on all images</p>
          <div class="col-12 ">
          <div id="borderContainer" class="border" style="padding:15px; ">
            <div id="content-slider2" class="carousel slide" data-ride="false" data-interval="false">


              <!--The slideshow -->
              <div class="carousel-inner text-center" id="optionBox">

                <div class="carousel-item active" section="exterior">

                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Style: <span  class="carStyle"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <!--<li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>-->
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 

                  
                    
                  
                  <div class="row justify-content-center" style="padding:15px;">

                    <div class="attribute col-6 col-sm-3 " data="carstyle" name="Fastback"><img width="100%" src="images/Fastback-icon.png" alt="Fastback"/>
                      <p class="thinfont">Fastback</p>
                    </div>
                    <div class="attribute col-6 col-sm-3" data="carstyle" name="Convertible"><img width="100%" src="images/Convertible-icon.png" alt="Convertible"/>
                      <p class="thinfont">Convertible</p>
                    </div>
                  </div>
                  <div id="styleAlert" class="alert alert-danger" role="alert" style="display:none;"> </div>

                </div>


                <div class="carousel-item" section="exterior">
                  
                  
                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Model: <span  id="carModel"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 
                  
                  
                 <div class="row justify-content-center" style="padding:15px;">
                    <div class="card attribute text-left" style="color:grey; margin:5px; max-width:400px;" data="model" name="Ecoboost" data-description="2.3L EcoBoost Engine">
                          <div class="card-body">
                              <h4 lass="card-title">Ecoboost</h4>
                          <h5>Key Features:</h5>
                          <ul class="card-text">
                            <li>2.3L EcoBoost® Engine</li>
                            <li>Rear View Camera</li>
                            <li>Track Apps™</li>
                            <li>LED Headlamps with LED Signature Lighting</li>
                            <li>Intelligent Access with Push Button Start</li>
                          </ul>
                          </div>


                    </div>
                    <div class="card attribute text-left" style="color:grey; margin:5px; max-width:400px;" data="model" name="GT" data-description="5.0L Ti-VCT V8 Engine">
                          <div class="card-body">
                          <h4 lass="card-title">GT</h4>
                          <h5>Key Features:</h5>
                          <ul class="card-text">
                            <li>5.0L Ti-VCT V8 Engine</li>
                            <li>Dual Exhaust with Quad Tips</li>
                            <li>Leather-Trimmed Heated and Cooled Front Seats</li>
                            <li>SYNC®3</li>
                            <li>Heated Mirrors with Integrated Turn Signal Indicators</li>
                          </ul>
                          </div>
                      </div>
                      </div>

                  <div id="modelAlert" class="alert alert-danger" role="alert"  style="display:none;"> </div>
        

                </div>

                <div class="carousel-item " section="exterior">
                  
                  
                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Colour: <span  class="carColour"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 
                  
                  

                  <div class="margin-top-bot">
                    <div class="color-gradient attribute" data="colour" name="ShadowBlack" style="background-color: rgb(0, 0, 0);"></div>
                    <div class="color-gradient attribute" data="colour" name="OxfordWhite" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="color-gradient attribute" data="colour" name="Magnetic" style="background-color: rgb(90, 90, 89);"></div>
                    <div class="color-gradient attribute" data="colour" name="RaceRed" style="background-color: rgb(220, 0, 0);"></div>
                    <div class="color-gradient attribute" data="colour" name="IngotSilver" style="background-color: rgb(190, 191, 193);"></div>
                    <div class="color-gradient attribute" data="colour" name="RubyRed" style="background-color: rgb(171, 3, 0);"></div>
                    <div class="color-gradient attribute" data="colour" name="TripleYellow" style="background-color: rgb(248, 214, 25);"></div>
                    <div class="color-gradient attribute" data="colour" name="LightningBlue" style="background-color: rgb(21, 60, 160);"></div>
                    <div class="color-gradient attribute" data="colour" name="KonaBlue" style="background-color: rgb(16, 24, 103);"></div>
                    <div class="color-gradient attribute" data="colour" name="OrangeFury" style="background-color: rgb(255, 126, 0);"></div>
                    <div class="color-gradient attribute" data="colour" name="RoyalCrimson" style="background-color: rgb(69, 0, 0);"></div>
                  </div>
                  <div id="colourAlert" class="alert alert-danger" role="alert"  style="display:none;"></div>
             


                </div>
                <div class="carousel-item " section="exterior">
                  
                  
                  
                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Stripe: <span  id="carStripe"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 
                  

                  <div class="row margin-top-bot">

                      <div class="col-4">
                           <div class="color-gradient2 attribute" data="stripe" name="None" style="background-color: rgb(190, 191, 193);"></div>
                          <p name="">No Stripe</p>
                      </div>
                      <div class="col-4">
                            <div class="color-gradient2 attribute" data="stripe" name="BlackStripe" style="background-color: rgb(0, 0, 0);"></div>
                            <p name="BlackStripe">Black Stripe</p>
                      </div>
                      <div class="col-4">
                            <div class="color-gradient2 attribute" data="stripe" name="WhiteStripe" style="background-color: white;"></div>
                              <p name="WhiteStripe">White Stripe</p>
                      </div>

                  </div>

                  <div id="stripeAlert" class="alert alert-danger" role="alert"  style="display:none;"></div>
               

                </div>

                <div class="carousel-item " section="exterior">
                  
                                    
                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Spoiler <span  id="carSpoiler"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 


                  <div class="row justify-content-center" style="padding:15px;">

                     <div class="attribute col-4 col-sm-3 thinfont " data="spoiler" name=""><img width="100%" src="images/accessories/delete.jpg" alt="Spoiler Delete"/>
                      <p>None</p>
                    </div>

                    <!--<div class="attribute col-4 col-sm-3 thinfont " data="spoiler" name="Decklid"><img name="Decklid" width="100%" src="images/accessories/decklid.jpg" />-->
                    <!--  <p>Blade Decklid</p>-->
                    <!--</div>-->
                    <div class="attribute col-4 col-sm-3 thinfont " data="spoiler" name="Wing"><img name="Wing" width="100%" src="images/accessories/wing.jpg" alt="Wing Spoiler"/>
                      <p>Performance Wing</p>
                    </div> 

                  </div>
                  <div id="spoilerAlert" class="alert alert-danger" role="alert"  style="display:none;" > </div>
                
                </div>



                <div class="carousel-item " section="exterior">
                  
                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Wheel <span  id="carWheel"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 


                  <div class="row justify-content-center" style="padding:15px;">

                     <div class="attribute col-12 col-sm-3 thinfont " style="margin:5px 0; padding-top: 10px;" data="wheel" name="Aluminium"><img name="Aluminium" width="100%" src="images/accessories/wheel-aluminium.jpg" alt="Aluminium Wheel"/>
                      <p>18-inch x 8-inch Machined-face Aluminum Wheels</p>
                    </div>                     
                    
                    <div class="attribute col-12 col-sm-3 thinfont " style="margin:5px 0; padding-top: 10px;" data="wheel" name="PaintedForgedAluminum"><img name="PaintedForgedAluminum" width="100%" src="images/accessories/PaintedForgedAluminum.jpg" alt="Forged Aluminium Wheel"/>
                      <p>19-inch x 9-inch Luster Nickel-Painted Forged Aluminum Wheels</p>
                    </div>

                    <!--<div class="attribute col-12 col-sm-3 thinfont" style="margin:5px 0; padding-top: 10px;" data="wheel" name="BlackPainted"><img name="BlackPainted" width="100%" src="images/accessories/wheel-blackPainted.jpg" />-->
                    <!--  <p>19-inch x 9-inch(F) 19-inch x 9.5-inch (R) Ebony Black Painted Aluminum Wheels</p>-->
                    <!--</div>-->
                    <div class="attribute col-12 col-sm-3 thinfont" style="margin:5px 0; padding-top: 10px;" data="wheel" name="PremiumPaintAlloy"><img name="PremiumPaintAlloy" width="100%" src="images/accessories/wheel-PremiumPaintAlloy.jpg" alt="Premium Painted Alloy Wheel" />
                      <p>19-inch x 9-inch(F) 19-inch x 9.5-inch (R) Premium Painted Alloy Wheels</p>
                    </div>
                    <!--<div class="attribute col-12 col-sm-3 thinfont" style="margin:5px 0; padding-top: 10px;" data="wheel" name="PremiumAluminium"><img name="PremiumAluminium" width="100%" src="images/accessories/wheel-premiumAluminium.jpg" />-->
                    <!--  <p>20-inch x 9-inch Premium Painted Aluminum Wheels</p>-->
                    <!--</div>-->
                    <!--<div class="attribute col-12 col-sm-3 thinfont" style="margin:5px 0; padding-top: 10px;" data="wheel" name="19inch-Dark-Tarnish-Aluminium"><img name="SpoilerBlackPremium" width="100%" src="images/accessories/wheel-blackPremium.jpg"/>-->
                    <!--  <p>19-inch x 10.5-inch(F)/ 19-inch x 11-inch(R) Dark Tarnish Stainless-painted Aluminum Wheels</p>-->
                    <!--</div>-->

                  </div>
             

                </div>
                
                
                <!-- <div class="carousel-item " section="exterior">-->
                  
                                    
                <!--   <div class="row">-->
                <!--      <div class="col-sm-4 col-lg-4"><h4>Optional Special Package<span  class="specialPackage"></span></h4></div>-->
                <!--       <div class="col-sm-1 col-lg-4"></div>-->
                <!--      <div class="col-sm-7 col-lg-4">-->
                <!--          <ul class="nav justify-content-center">-->
                <!--            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>-->
                <!--            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>-->
                <!--          </ul>-->
                <!--      </div>-->
                <!--    </div> -->


                <!--  <div class="row justify-content-center" style="padding:15px;">-->

                <!--    <div class="attribute col-6 col-sm-3 thinfont " data="wheel" name="SpoilerBlackPremium" data-special="package" data-description="Performance Package Level2"><img name="SpoilerBlackPremium" width="100%" src="images/accessories/performancelv2.jpg" />-->
                <!--      <p>Performance Package - Level 2</p>-->
                <!--    </div>-->
                <!--    <div class="attribute col-6 col-sm-3 thinfont " data="wheel" name="StripePremium" data-special="package" data-description="Pony Package "><img name="StripePremium" width="100%" src="images/accessories/Pony.jpg" />-->
                <!--      <p>Pony Package</p>-->
                <!--    </div>-->

                <!--  </div>-->
                <!--  <div class="packageAlert alert alert-danger" role="alert"  style="display:none;"> </div>-->
                
                <!--</div>-->


                <div id="chooseTransmission" class="carousel-item" section="interior">

                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Transmission: <span  class="carTransmission"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 
 
                  <div class="row" style="padding:15px;">

                    <div class="attribute card" data="transmission" name="Automatic" style="margin:5px;" data-description="10 Speed SelectShift® Automatic Transmission">
                     <img class="card-img-top" src="images/accessories/automatic.jpg" alt="Card image cap">
                      <p class="card-body">10 Speed SelectShift® <br>Automatic Transmission</p>
                    </div>

                    <div class="attribute card" data="transmission" name="Manual" style="margin:5px;" data-description="6 Speed Manual Transmission">
                      <img class="card-img-top" src="images/accessories/manual.jpg" alt="Card image cap">
                      <p class="card-body">6 Speed Manual Transmission</p>
                    </div>
                  </div>
                  <div id="transmissionAlert" class="alert alert-danger" role="alert"  style="display:none;"> </div>
         
                </div>

                <div id="chooseSeat" class="carousel-item" section="interior">

                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Seat Model: <span  id="carSeat"></span></h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 

                  <div class="row" style="padding:15px;">
                    <div class="attribute card" data="seat" name="Leather-Trimmed" style="margin:5px;">
                      <img class="card-img-top" src="images/accessories/leather.jpg" alt="Card image cap">
                      <p class="card-body">Leather Trimmed Seats</p>
                    </div>
                    <div class="attribute card" data="seat" name="RECARO" style="margin:5px;">
                     <img class="card-img-top" src="images/accessories/recaro.jpg" alt="Card image cap">
                      <p class="card-body">RECARO®  Leather Trimmed Seats</p>
                    </div>


                  </div>
                 <div id="seatAlert" class="alert alert-danger" role="alert"  style="display:none;"> </div>

                </div>

                <div class="carousel-item" section="option">

                   <div class="row">
                      <div class="col-sm-4 col-lg-4"><h4>Choose Suspension: </h4></div>
                       <div class="col-sm-1 col-lg-4"></div>
                      <div class="col-sm-7 col-lg-4">
                          <ul class="nav justify-content-center">
                            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>
                          </ul>
                      </div>
                    </div> 
                    
                   <div class="row" style="padding:15px;">
                    
                    
                     <div class="col-12 col-sm-4 nopad text-center">
                       <div class="attribute card" data="suspension" name="Standard Suspension" style="margin:5px;">
                        <img class="img-responsive" width="100%" src="images/accessories/standardSuspension.jpg" alt="Standard Suspension"/>
                      <!--  <input type="checkbox" name="image[]" value="Magneride Suspension" />-->
                      <!--  <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                      <!--    <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                      <!--  </svg>-->
                      <!--</label>-->
                      <div class="card-body">
                         <h4>Standard Suspension</h4>
                          <p>Welcome to the cornering office.
The straight and narrow is fun for that open-throttle acceleration, but there’s nothing like the thrill of powering through a corner with awe-inspiring control. And, of course, the new 2018 Mustang delivers. Through a combo of new shock absorbers, fine-tuned suspensions and innovative technology, it offers up the ultimate fun-to-drive experience with every model.</p>
                      </div>
                     
                      </div>
                    </div>
     
                     <div class="col-12 col-sm-4 nopad text-center">
                       <div class="attribute card" data="suspension" name="Magneride Suspension" style="margin:5px;">
                        <img class="img-responsive" width="100%" src="images/accessories/Magneride.jpg" alt="Magneride" />
                      <!--  <input type="checkbox" name="image[]" value="Magneride Suspension" />-->
                      <!--  <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                      <!--    <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                      <!--  </svg>-->
                      <!--</label>-->
                      <div class="card-body">
                         <h4>Magneride Suspension</h4>
                          <p>The MagneRide™ Damping System you’ll find in the Shelby GT350® is now available for the 2018 Mustang. And with good reason. The sensors adjust all four corners independently, so you’ll feel more confident no matter how many curves lie ahead.</p>
                      </div>
                     
                      </div>
                    </div>


                  </div>
                    
                </div>
                    
                <!--<div class="carousel-item" section="option">-->

                <!--   <div class="row">-->
                <!--      <div class="col-sm-4 col-lg-4"><h4>Add Extra Options</h4></div>-->
                <!--       <div class="col-sm-1 col-lg-4"></div>-->
                <!--      <div class="col-sm-7 col-lg-4">-->
                <!--          <ul class="nav justify-content-center">-->
                <!--            <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>-->
                <!--            <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>-->
                <!--          </ul>-->
                <!--      </div>-->
                <!--    </div> -->


                  <!--<div class="row" style="padding:15px;">-->
                  <!--  <div class="col-12 col-sm-4 nopad text-center">-->
                  <!--    <label class="image-checkbox" key="suspension" value="Magneride Suspension">-->
                  <!--      <img class="img-responsive" width="100%" src="images/accessories/Magneride.jpg" />-->
                  <!--      <input type="checkbox" name="image[]" value="Magneride Suspension" />-->
                  <!--      <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                  <!--        <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                  <!--      </svg>-->
                  <!--    </label>-->
                  <!--    <h4>Magneride Suspension</h4>-->
                  <!--    <p>The MagneRide™ Damping System you’ll find in the Shelby GT350® is now available for the 2018 Mustang. And with good reason. The sensors adjust all four corners independently, so you’ll feel more confident no matter how many curves lie ahead.</p>-->
                  <!--  </div>-->
                    <!--<div class="col-12  col-sm-4 nopad text-center">-->
                    <!--  <label class="image-checkbox" key="spare"  value="Spare Wheel Tire">-->
                    <!--    <img class="img-responsive" width="100%" src="images/accessories/spareWheelTire.jpg" />-->
                    <!--    <input type="checkbox" name="image[]" value="Spare Wheel Tire" />-->
                    <!--    <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                    <!--      <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                    <!--    </svg>-->
                    <!--  </label>-->
                    <!--  <h4>Spare Wheel and Tire</h4>-->
                    <!--  <p>Spare Wheel and Tire are available on Mustang EcoBoost®, EcoBoost Premium, GT, and GT Premium.</p>-->
                      
                    <!--  </div>-->
                    <!--<div class="col-12  col-sm-4 nopad text-center">-->
                    <!--  <label class="image-checkbox" key="kit" value="Wheel Locking Kit">-->
                    <!--    <img class="img-responsive" width="100%" src="images/accessories/wheelLockingKit.jpg" />-->
                    <!--    <input type="checkbox" name="image[]" value="Wheel Locking Kit" />-->
                    <!--    <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                    <!--      <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                    <!--    </svg>-->
                    <!--  </label>-->
                    <!--  <h4>Wheel Locking Kit</h4>-->
                    <!--  <p>A Wheel Locking Kit is included in the Enhanced Security Package on Mustang EcoBoost®, EcoBoost Premium, GT, and GT Premium, and the R Package on Shelby GT350R®.</p>-->
                    <!--</div>-->
                    <!--<div class="col-12  col-sm-4 nopad text-center">-->
                    <!--  <label class="image-checkbox" key="memory" value="Memory Driver Seat">-->
                    <!--    <img class="img-responsive" width="100%" src="images/accessories/memoryDriverSeat.jpg" />-->
                    <!--    <input type="checkbox" name="image[]" value="Memory Driver Seat" />-->
                    <!--    <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                    <!--      <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                    <!--    </svg>-->
                    <!--  </label>-->
                    <!--  <h4>Memory Driver Seat</h4>-->
                    <!--  <p></p>-->
                    <!--</div>-->
                    <!--<div class="col-12  col-sm-4 nopad text-center">-->
                    <!--  <label class="image-checkbox" key="audio" value="Shaker Pro Audio System">-->
                    <!--    <img class="img-responsive" width="100%" src="images/accessories/shakerProAudioSystem.jpg" />-->
                    <!--    <input type="checkbox" name="image[]" value="Shaker Pro Audio System" />-->
                    <!--    <svg class="stepper__list__icon fa hidden" viewbox="0 0 24 24">-->
                    <!--      <path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z"></path>-->
                    <!--    </svg>-->
                    <!--  </label>-->
                    <!--  <h4>Shaker Pro Audio System</h4>-->
                    <!--  <p>Shaker™ Pro Audio System with twelve (12) speakers is available on Mustang EcoBoost® Premium and GT Premium.</p>-->
                    <!--</div>-->

                <!--    <div id="checkboxing"></div>-->

                <!--  </div>-->

                <!--</div>-->

                <div class="carousel-item justify-content-center" section="complete">
                  <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info d-block d-sm-none" data-toggle="modal" data-target="#exampleModalCenter" style="margin:0 auto;">
                              Get a quote
                            </button>

                  <!-- Centered nav -->

                  <!--<ul class="nav justify-content-center">-->
                  <!--  <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>-->

                  <!--</ul>-->
                  <!--<div class="row" style="margin-top:10px;">-->
                  <!--  <div class="col-12">-->
                  <!--    <h2 class="text-center" >Mustang<span id="summaryTitle"></span></h2>-->
                  <!--     <h4 class="text-center" id="summarySubtitle"></h4>-->
                  <!--  </div>-->



                  <!--</div>-->

                </div>


              </div>
            </div>

          </div>  <!--end of box with border-->

          </div>
        </div>
        <!--  <ul class="pagination" style="width:100%;float:right; margin-top: 30px; padding:0 15px;">-->
        <!--        <li class="page-item" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>-->
        <!--        <li class="page-item" data-target="#content-slider2" data-slide="next"><a style="color:grey;" class="page-link" href="#">Next Step</a></li>-->
        <!--</ul>-->



       


          <div id="accordion" class="margin-top-bot">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:black">
                    Exterior Summary
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" >

                    <p class="card-text">Style: <span  id="cardStyle"></span></p>
                    <p class="card-text">Model: <span  id="cardModel"></span></p>
                    <p class="card-text">Colour: <span  id="cardColour"></span></p>
                    <p class="card-text">Stripe: <span id="cardStripe"></span></p>
                    <p class="card-text">Spoiler: <span id="cardSpoiler"></span></p>
                    <p class="card-text">Wheel: <span id="cardWheel"></span></p>
                    <!--<p class="card-text">Package: <span class="carOptions"></span></p>-->
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:black">
                   Interior/Features Summary
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body" >
                    <p class="card-text">Transmission: <span  id="cardTransmission"></span></p>
                    <p class="card-text">Seat Model: <span  id="cardSeat"></span></p>
                    <p class="card-text">Suspension: <span  id="cardSuspension"></span></p>
                  
                </div>

                <!--<div class="card-body" >-->
                <!--   <p class="card-text colsubtitle">Added Features: </p>-->
                <!--    <ul class="card-text" id="addedFeatures">-->

                <!--    </ul>-->

                <!--</div>-->
                <div class="card-body">
                  
                </div>
                <div class="card-body" style="column-count: 1;">
                  
                  <p class="card-text colsubtitle">Standard Features: </p>
                
                
                  <div class="row">
                    <div class="col-12  col-sm-4  text-center">
                     
                        <img class="img-responsive" width="100%" src="images/accessories/wheelLockingKit.jpg" alt="Wheel Locking Kit"/>
                      
                      <h4>Wheel Locking Kit</h4>
                      <p>A Wheel Locking Kit is included in the Enhanced Security Package on Mustang EcoBoost®, EcoBoost Premium, GT, and GT Premium, and the R Package on Shelby GT350R®.</p>
                    </div>
                    
                    <div class="col-12  col-sm-4  text-center">
                    
                        <img class="img-responsive" width="100%" src="images/accessories/shakerProAudioSystem.jpg" alt="Shaker Pro Audio System" />
                  
                      <h4>Shaker Pro Audio System</h4>
                      <p>Shaker™ Pro Audio System with twelve (12) speakers is available on Mustang EcoBoost® Premium and GT Premium.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="modal" data-target="#exampleModalCenter" style="color:black">
                   GET A QUOTE
                  </button>
                </h5>
              </div>
              
          </div>
          <ul class="nav justify-content-center margin-top-bot">
                    <li id="previousPage" class="page-item hidden" data-target="#content-slider2" data-slide="prev"><a style="color:grey;" class="page-link" href="#">Previous Step</a></li>
                  
          </ul>
  
      </div><!--end of car builder-->



    </div><!--end of container-->
  </main>
  
  <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Get Quote on Mustang 2018</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!--begin HTML Form-->
                      <form class="form-horizontal quoteForm" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                         <!--when submit button is clicked, show results here-->
                        <div class="form-group">
                        <div class="col-12">
                        <?php echo $result;?>
                        </div>
                        </div>

                        <h3>Please fill your details below</h3>
                        <p class="required small">* = Required fields</p>


                        <input type="hidden" name="features" id="features" value="<?php echo $features;?>">
                        <input type="hidden" name="options" id="options" value="<?php echo $options;?>">

                        <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><span class="required">*</span> Name:</label>
                        <div class="col-12 col-sm-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last" value="<?php echo $name;?>"> <span class="required small"><?php echo $errName;?></span>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="email" class="col-sm-3 control-label"><span class="required">*</span> Email: </label>
                        <div class="col-12 col-sm-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@domain.com" value="<?php echo $email;?>">
<span class="required small"><?php echo $errEmail;?></span>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label"><span class="required">*</span> Phone: </label>
                        <div class="col-12 col-sm-12">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="your number" value="<?php echo $phone;?>">
<span class="required small"><?php echo $errPhone;?></span>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="message" class="col-sm-3 control-label"><span class="required">*</span> Message:</label>
                        <div class="col-12 col-sm-12">
                        <textarea class="form-control" row="4" name="message" placeholder="Your message"><?php echo $message;?></textarea>
<span class="required small"><?php echo $errMessage;?></span>
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="human" class="col-sm-6 control-label"><span class="required">*</span> Human Test:</label>
                        <div class="col-sm-6">
                        <h3 class="human">6 + 6 = ?</h3>
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" value="<?php echo $human;?>">
<span class="required small"><?php echo $errHuman;?></span>
                        </div>
                        </div>
                        <div class="form-group"><p style="color:red;" class="submitAlert hidden"></p></div>
                        <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
                        <button type="submit" id="submit" name="submit" class="btn btn-outline-secondary">SUBMIT</button>
                        </div>
                        </div>
                        <!--end Form--></form>            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      
 


  <!-- The Modal -->
  <div class="modal fade" id="myFinanceModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Finance Application Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <iframe width="100%" height="879px" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none" src="http://www.thomsonford.com.au/forms/embed.php?id=94" title="Prequalify For Finance"><a href="http://www.thomsonford.com.au/forms/view.php?id=94" title="Prequalify For Finance">Prequalify For Finance</a></iframe>


        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>
            

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom ">

    <ul class="navbar-nav ml-auto" style="margin-right:15px; font-size:1.1em;">
      <li class="nav-item">
        <a id="getQuote" class="nav-link " data-toggle="modal" data-target="#exampleModalCenter">GET A QUOTE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#collapseThree"></a>
      </li>
    </ul>

  </nav>




  <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS FOOTER PART>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->



  <footer class="container col-xs-12 text-center" style="margin-bottom:77px;">
    <p>Western Region Automotive Pty Ltd. Trading as Thomson Ford DL19710.</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

</body>

</html>
<?php


  // if(isset($connection)){
  //   mysqli_close($connection);
  // }
 ?>
