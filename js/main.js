// Created by Andrew Adhigunarsa

// Shorthand for $( document ).ready()
$(function() {


    var car ={  type: "Mustang 2018",
                carstyle:"Fastback",
                model:"Ecoboost",
                colour:"RaceRed",
                stripe:"None" ,
                spoiler:"",
                wheel:"BlackPainted",
                transmission:"Manual",
                seat:"Leather-Trimmed",
                engine:"2.3L EcoBoost Engine",
                suspension:"Standard Suspension"
       
                };

    var features = [];

    var builderContainer = $("#carBuilder");


    var carstyle= car.carstyle;

    var carmodel= car.model;
    
    var engine= car.engine;
    var suspension = car.suspension;


    var colour= car.colour;

    var stripe= car.stripe;

    var spoiler= car.spoiler;

    var wheel= car.wheel;

    var transmission= car.transmission;

    var seat = car.seat

    var angle="-front.png";
    var angle2="-side.png";
    var angle3="-back.png";
    var angle4="-front2.png";

    var view="-top.png";
    var view2="-inside.png";

    var folder ="./images/";
    var folder2 ="./images/accessories/";

    var total= folder+carstyle+carmodel+"-"+colour+spoiler+angle;
    var total2= folder+carstyle+carmodel+"-"+colour+spoiler+angle2;
    var total3= folder+carstyle+carmodel+"-"+colour+spoiler+angle3;
    var total4= folder+carstyle+carmodel+"-"+colour+spoiler+angle4;

    var overlay1= folder2+"wheel-"+wheel+angle;
    var overlay2= folder2+"wheel-"+wheel+angle2;
    var overlay3= folder2+"wheel-"+wheel+angle3;
    var overlay4= folder2+"wheel-"+wheel+angle4;
    
    var overlayStripe1= folder2+carstyle+stripe+spoiler+angle;
    var overlayStripe2= folder2+carstyle+stripe+spoiler+angle2;
    var overlayStripe3= folder2+carstyle+stripe+spoiler+angle3;
    var overlayStripe4= folder2+carstyle+stripe+spoiler+angle4;
   

    var interiorPic = folder2+transmission+seat+view;
    var interiorPic2 = folder2+transmission+seat+view2;

    $("#cardStyle").text(carstyle);
    $(".carStyle").text(carstyle);
    $(".carEngine").text(engine);
    $("#cardStyleHeader").text(carstyle);
    $("#summarySubtitle").text(carstyle);
    $("#cardModel").text(carmodel);
    $("#carModel").text(carmodel);
    $("#cardModelHeader").text(carmodel);
    $("#summaryTitle").text(carmodel);
    $("#cardColour").text(colour);
    $(".carColour").text(colour);
    $("#cardStripe").text(stripe);
    $("#carStripe").text(stripe);
    $("#cardSpoiler").text(spoiler);
    $("#carSpoiler").text(spoiler);
    $("#cardWheel").text(wheel);
    $("#carWheel").text(wheel);
    $("#cardSuspension").text(suspension);
    $("#carPic").attr("src",total);
    $("#carPic2").attr("src",total2);
    $("#carPic3").attr("src",total3);
    $("#carPic4").attr("src",total4);

    $("#interiorPic1").attr("src",interiorPic);
    $("#interiorPic2").attr("src",interiorPic2);

    $("#cardTransmission").text(transmission);
    $(".carTransmission").text(transmission);
    $("#cardSeat").text(seat);
    $("#carSeat").text(seat);


// This code is to toggle accordion
    
    
    function showSummary(){
        if($('[section="exterior"]').hasClass('active')){
            $('#collapseOne').addClass("show");
            $('#collapseTwo').removeClass("show");
            $('#collapseThree').removeClass("show");
        }
        
        if($('[section="interior"]').hasClass('active') || $('[section="option"]').hasClass('active')){
            $('#collapseOne').removeClass("show");
            $('#collapseTwo').addClass("show");
            $('#collapseThree').removeClass("show");
        } 
    }



    var doneIcon ='<svg class="stepper__list__icon" viewbox="0 0 24 24">'+'<path class="st0" d="M12 20c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8zm0 1.5c-5.2 0-9.5-4.3-9.5-9.5S6.8 2.5 12 2.5s9.5 4.3 9.5 9.5-4.3 9.5-9.5 9.5z">'+'</path>'+'<path class="st0" d="M11.1 12.9l-1.2-1.1c-.4-.3-.9-.3-1.3 0-.3.3-.4.8-.1 1.1l.1.1 1.8 1.6c.1.1.4.3.7.3.2 0 .5-.1.7-.3l3.6-4.1c.3-.3.4-.8.1-1.1l-.1-.1c-.4-.3-1-.3-1.3 0l-3 3.6z">'+'</path>'+'</svg>';

    var currentIcon = '<svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24" viewbox="0 0 24 24">'+'<path d="M12.2 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 1.377a9.377 9.377 0 1 1 0-18.754 9.377 9.377 0 0 1 0 18.754zm-4-8a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754zm4 0a1.377 1.377 0 1 1 0-2.754 1.377 1.377 0 0 1 0 2.754z" fill="#006DFF" fill-rule="evenodd">'+'</path>'+'</svg>';

    var pendingIcon = '<svg class="stepper__list__icon stepper__list__icon--current" width="24" height="24" viewbox="0 0 24 24">'+'<path d="M12 16.1c1.8 0 3.3-1.4 3.3-3.2 0-1.8-1.5-3.2-3.3-3.2s-3.3 1.4-3.3 3.2c0 1.7 1.5 3.2 3.3 3.2zm0 1.7c-2.8 0-5-2.2-5-4.9S9.2 8 12 8s5 2.2 5 4.9-2.2 4.9-5 4.9z">'+'</path>'+'</svg>';


//   this function is to check which section is shown and update the top progress icons

   function checkSection(){

       if($('[section="exterior"]').hasClass('active')){
           $(".stepper__list__item").removeClass();
           $("#stepperExterior").addClass("stepper__list__item stepper__list__item--current");
           $("#exteriorIcon").html(currentIcon);
           $("#stepperInterior").addClass("stepper__list__item stepper__list__item--pending");
           $("#interiorIcon").html(pendingIcon);
           $("#stepperOptions").addClass("stepper__list__item stepper__list__item--pending");
           $("#optionIcon").html(pendingIcon);
           $("#stepperComplete").addClass("stepper__list__item stepper__list__item--pending");
           $("#completeIcon").html(pendingIcon);
      } else if ($('[section="interior"]').hasClass('active')){
          $(".stepper__list__item").removeClass();
           $("#stepperExterior").addClass("stepper__list__item stepper__list__item--done");
           $("#exteriorIcon").html(doneIcon);
           $("#stepperInterior").addClass("stepper__list__item stepper__list__item--current");
           $("#interiorIcon").html(currentIcon);
           $("#stepperOptions").addClass("stepper__list__item stepper__list__item--pending");
           $("#optionIcon").html(pendingIcon);
           $("#stepperComplete").addClass("stepper__list__item stepper__list__item--pending");
           $("#completeIcon").html(pendingIcon);
      } else if ($('[section="option"]').hasClass('active')){
          $(".stepper__list__item").removeClass();
           $("#stepperExterior").addClass("stepper__list__item stepper__list__item--done");
           $("#exteriorIcon").html(doneIcon);
           $("#stepperInterior").addClass("stepper__list__item stepper__list__item--done");
           $("#interiorIcon").html(doneIcon);
           $("#stepperOptions").addClass("stepper__list__item stepper__list__item--current");
           $("#optionIcon").html(currentIcon);
           $("#stepperComplete").addClass("stepper__list__item stepper__list__item--pending");
           $("#completeIcon").html(pendingIcon);
      } else {
          $(".stepper__list__item").removeClass();
           $("#stepperExterior").addClass("stepper__list__item stepper__list__item--done");
           $("#exteriorIcon").html(doneIcon);
           $("#stepperInterior").addClass("stepper__list__item stepper__list__item--done");
           $("#interiorIcon").html(doneIcon);
           $("#stepperOptions").addClass("stepper__list__item stepper__list__item--done");
           $("#optionIcon").html(doneIcon);
           $("#stepperComplete").addClass("stepper__list__item stepper__list__item--current");
           $("#completeIcon").html(doneIcon);
      }
   }

// function to change image when section interior shown

function changePic(){

    if($('[section="interior"]').hasClass('active') || $('[section="option"]').hasClass('active')){
        $("#interiorImage").removeClass("hidden");
        $("#carouselcar").addClass("hidden");
    }else{
        $("#interiorImage").addClass("hidden");
        $("#carouselcar").removeClass("hidden");
    }
    if($('[section="complete"]').hasClass('active')){
        $("#borderContainer").removeClass("border")
        $(".collapse").addClass("show");
        $("#previousPage").removeClass("hidden");
        $("#calltoaction").removeClass("d-none");
    }else{
        $("#borderContainer").addClass("border");
        showSummary();
        $("#previousPage").addClass("hidden");
    }
    if($("#chooseTransmission").hasClass("active")){
        $("#interiorPic2-carousel").addClass("active");
        $("#interiorPic1-carousel").removeClass("active");
    }else{
        $("#interiorPic1-carousel").addClass("active");
        $("#interiorPic2-carousel").removeClass("active");
    }
    
}

// This function is to check the size of the screen and run the check section function only on screen bigger than 576

function checkSize(){
    if ($(window).width() > 576) {

         $('#content-slider2').on('slid.bs.carousel', function() {
            checkSection()
            changePic()
            });
    }else{
        $('#content-slider2').on('slid.bs.carousel', function() {
            changePic()
            });
    }
}

checkSize()


$('[name="Convertible"]').click(function() {
    var transmission = car.transmission;
    var transmissionDescription = "10 Speed SelectShift® Automatic Transmission";
    car.transmission = "Automatic";
    $("#cardTransmission").text(transmission);
    $('.carTransmission2').text(transmissionDescription);
})
$('[name="Fastback"]').click(function() {
    var transmission = car.transmission;
    var transmissionDescription ="6 Speed Manual Transmission";
    car.transmission = "Manual";
    $("#cardTransmission").text(transmission);
    $('.carTransmission2').text(transmissionDescription);
})


    function checkVar(){
        

        
        if(car.carstyle=="Convertible"){
            $('[name="WhiteStripe"]').hide();
            $('#stripeAlert').show().text("White stripe is not available for Mustang Convertible");
            $('[name="Wing"]').hide();  
            $('#spoilerAlert').show().text("Wing spoiler is not available for Mustang Convertible") 
            $('[name="RECARO"]').hide();   
            $('#seatAlert').show().text("RECARO seat is not available for Mustang Convertible") 
            $('[name="Manual"]').hide();   
            $('#transmissionAlert').show().text("Manual transmission is not available for Mustang Convertible")
            
        }else{
            
            if(car.colour=="OxfordWhite"){
                $('[name="WhiteStripe"]').hide();
                 $('[name="None"]').show();
                $('#stripeAlert').show().text("White stripe is not available for Oxford White colour");
             } else{
                $('[name="Manual"]').show();
                // $('[name="WhiteStripe"]').show();
                $('#stripeAlert').hide()
                $('[name="Wing"]').show();   
                $('[name="RECARO"]').show();
                $('#seatAlert').hide()
                $('#spoilerAlert').hide();
                $('#transmissionAlert').hide()
                
                if(car.colour=="NeedForGreen"){
                          $('[name="WhiteStripe"]').hide();
                          $('[name="None"]').hide();
                          car.stripe = "BlackStripe";
                          
                    }else{
                          $('[name="WhiteStripe"]').show();
                          $('[name="None"]').show();
                    }
        
             }
                
        }
        
     
        if(car.model=="Ecoboost"){
               $('[name="PaintedForgedAluminum"]').hide();
                $('[name="PremiumPaintAlloy"]').show();
                $('[name="BlackPainted"]').show();
                $('[name="Aluminium"]').hide();
        }else{
             $('[name="PaintedForgedAluminum"]').show();
                $('[name="PremiumPaintAlloy"]').hide();
                $('[name="BlackPainted"]').show();
                $('[name="Aluminium"]').hide();
        }
        
        
        if(car.spoiler == "Wing"){
            $('[name="Convertible"]').hide();
            $('#styleAlert').show().text("Convertible Style not available with Wing spoiler"); 
        } else{
           
            if(car.stripe == "WhiteStripe"){
            
                $('[name="Convertible"]').hide();
                $('#styleAlert').show().text("Convertible Style not available with White stripe");
                }else{
                     $('[name="Convertible"]').show();
                     $('#styleAlert').hide();
            
                }
        
        }
        
        
         



      



    }

    checkVar();
    
    $("[name='NeedForGreen']").click(function() {
        car.stripe = "BlackStripe"
    })
     $("[name='GT']").click(function() {
        car.wheel = "BlackPainted"
    })
    $("[name='Ecoboost']").click(function() {
        car.wheel = "BlackPainted"
    })
    


    function updateCarObject(){

        var carDescription = car.cardescription;
        
        var engine =car.engine;
        
         var suspension = car.suspension;

        var carstyle= car.carstyle;

        var carmodel= car.model;

        var colour= car.colour;

        var stripe= car.stripe;

        var spoiler= car.spoiler;

        var wheel= car.wheel;

        var angle="-front.png";
        var angle2="-side.png";
        var angle3="-back.png";
        var angle4="-front2.png";

        var transmission= car.transmission;

        var seat = car.seat;

        var angle="-front.png";
        var angle2="-side.png";
        var angle3="-back.png";
        var angle4="-front2.png";

        var view="-top.png";
        var view2="-inside.png";

        var folder ="./images/";
        var folder2 ="./images/accessories/";

        var total= folder+carstyle+carmodel+"-"+colour+spoiler+angle;
        var total2= folder+carstyle+carmodel+"-"+colour+spoiler+angle2;
        var total3= folder+carstyle+carmodel+"-"+colour+spoiler+angle3;
        var total4= folder+carstyle+carmodel+"-"+colour+spoiler+angle4;

        var overlay1= folder2+"wheel-"+wheel+angle;
        var overlay2= folder2+"wheel-"+wheel+angle2;
        var overlay3= folder2+"wheel-"+wheel+angle3;
        var overlay4= folder2+"wheel-"+wheel+angle4;

        var overlayStripe1= folder2+carstyle+stripe+spoiler+angle;
        var overlayStripe2= folder2+carstyle+stripe+spoiler+angle2;
        var overlayStripe3= folder2+carstyle+stripe+spoiler+angle3;
        var overlayStripe4= folder2+carstyle+stripe+spoiler+angle4;
   

        var interiorPic = folder2+transmission+seat+view;
        var interiorPic2 = folder2+transmission+seat+view2;


            $("#interiorPic1").attr("src",interiorPic);
            $("#interiorPic2").attr("src",interiorPic2);
            $("#carPic4").attr("src",total4);
            $("#carPic2").attr("src",total2);
            $("#carPic3").attr("src",total3);
            $("#carPic").attr("src",total);
            $("#wheel4").attr("src",overlay4);
            $("#wheel3").attr("src",overlay3);
            $("#wheel2").attr("src",overlay2);
            $("#wheel1").attr("src",overlay1);      
            $("#stripe1").attr("src",overlayStripe1);
            $("#stripe2").attr("src",overlayStripe2);
            $("#stripe3").attr("src",overlayStripe3);
            $("#stripe4").attr("src",overlayStripe4);
            $("#cardStyle").text(carstyle);
            $(".carStyle").text(carstyle);
            $(".carEngine").text(engine);
            $("#cardStyleHeader").text(carstyle);
            $("#summarySubtitle").text(carstyle);
            $("#cardModel").text(carmodel);
            $("#carModel").text(carmodel);
            $("#cardModelHeader").text(carmodel);
            $("#summaryTitle").text(carmodel);
            $("#cardColour").text(colour);
            $(".carColour").text(colour);
            $("#cardStripe").text(stripe);
            $("#carStripe").text(stripe);
            $("#cardSpoiler").text(spoiler);
            $("#carSpoiler").text(spoiler);
            $("#cardWheel").text(wheel);
            $("#carWheel").text(wheel);
            
             $("#cardSuspension").text(suspension);
            
            $("#cardTransmission").text(transmission);
            $(".carTransmission").text(transmission);
            $("#cardSeat").text(seat);
            $("#carSeat").text(seat);

            $("#summaryTitle").text(carmodel);
            $(".carOptions").text(car.optional);

        checkVar();
    }

    
    function grabData(){
        var grabdata = $(this).data("description");
        window.alert(grabdata);
    }
    
    $("[data='model']").click(function() {
        car.engine = $(this).attr("data-description");
    }) 
    
    $("[data-special='package']").click(function() {
           car.spoiler = "";
           car.stripe = "";
           car.optional = $(this).attr("data-description");
    })
    
    
    
    var transmissionDescription = "6 Speed Manual Transmission";
    
    $('.carTransmission2').text(transmissionDescription);
    
    $("[data='transmission']").click(function() {
        transmissionDescription = $(this).attr("data-description");
        $('.carTransmission2').text(transmissionDescription);
    })

    $('.attribute').click(function() {

        var data = $(this).attr("data");
        var value = $(this).attr("name");
        

        car[data]=value;

        updateCarObject();
        checkVar();
         $(".attribute ").removeClass("highlighted");
        $(this).addClass("highlighted");
        $('#borderContainer [data-slide="next"] .page-link').addClass("redBtn");
        
    })
    
    $('#borderContainer [data-slide="next"]').click(function() {
        $('#borderContainer [data-slide="next"] .page-link').removeClass("redBtn");
    })

    $('#borderContainer [data-slide="prev"]').click(function() {
        $('#borderContainer [data-slide="next"] .page-link').removeClass("redBtn");
    })


    $('#content-slider2').carousel({
          wrap: false
        }).on('slid.bs.carousel', function () {
            curSlide = $('.active');
          if(curSlide.is( ':first-child' )) {
             $('.left').hide();
             return;
          } else {
             $('.left').show();
          }
          if (curSlide.is( ':last-child' )) {
             $('.right').hide();
             return;
          } else {
             $('.right').show();
          }
        });


   $(function() {
        $('.carousel').each(function(){
            $(this).carousel({
                interval: false
            });
        });
    });



     var extraFeatures =[];


     function toggleArrayItem(a, v) {
        var i = a.indexOf(v);
        if (i === -1)
            a.push(v);
        else
            a.splice(i,1);
    };

    function updateFeatureSummary(){

    }

    function writeFeatureSummary(){
        var items = document.getElementById("addedFeatures");

        $("#addedFeatures").empty();

        for (var i = 0; i < extraFeatures.length; i++ ) {
            var item = document.createElement("li");
            item.innerHTML = extraFeatures[i];
            items.appendChild(item);
        }
    }

    $(".image-checkbox").on("click", function(){

        var value = $(this).attr('value');
        toggleArrayItem(extraFeatures, value)
        writeFeatureSummary();
    } );
    
    


    // image gallery
    // init the state from the input
    $(".image-checkbox").each(function () {
      if ($(this).find('input[type="checkbox"]').first().attr("checked")) {


        $(this).addClass('image-checkbox-checked');


      }
      else {
        $(this).removeClass('image-checkbox-checked');
      }
    });

    // sync the state to the input
    $(".image-checkbox").on("click", function (e) {
      $(this).toggleClass('image-checkbox-checked');
      var $checkbox = $(this).find('input[type="checkbox"]');
      $checkbox.prop("checked",!$checkbox.prop("checked"))




      e.preventDefault();
    });


    $("#submit").click(function(){
      $("#features").val(JSON.stringify(car, null, '\t'));
      $("#options").val(JSON.stringify(extraFeatures, null, '\t'));
      
      
      
      
    })
    
    $(document).ready(function(){
        $('#submit').attr('disabled',true);
        
        
        $('.quoteForm .form-control').keyup(function(){
          
            
            if($("#name").val() !=""  && $("#email").val() !="" && $("#message").val() !="" && $("#human").val() !="" && $("#phone").val() !=""){
                $('#submit').attr('disabled', false);
                $('.submitAlert').hide();
            }else{
                $('#submit').attr('disabled',true);
                $('.submitAlert').show().text("Fill in All the box to enable Submit");
            };

           
        })
        
         $('.quoteForm .form-control').click(function(){
          
            
            if($("#name").val() !=""  && $("#email").val() !="" && $("#message").val() !="" && $("#human").val() !="" && $("#phone").val() !=""){
                $('#submit').attr('disabled', false);
                $('.submitAlert').hide();
            }else{
                $('#submit').attr('disabled',true);
                $('.submitAlert').show().text("Fill in All the box to enable Submit");
            };

           
        })
        
        
    });
    
    
  
    
        
});
