<?php 
    session_start();
    if(isset($_SESSION['name']) || isset($_SESSION['not_logged_in']))
    {
        unset($_SESSION['name']);
        unset($_SESSION['not_logged_in']);
        unset($_SESSION['cpass']);

    }
    if(isset($_SESSION['comment']))
    {
        unset($_SESSION['comment']);
    }
?>
<style>
.show_rate{
    margin-top:30px;
}
.show_rate i{
    font-size:28px;
    color:red;
    margin:3px 3px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.3.1-web/fontawesome-free-5.3.1-web/css/">
    <script src="../jquery-3.3.1.min.js"></script>
 
    <script>
        $(document).ready(function(){
        $("#sign-in").click(function()
        {
            $("#email_error").remove();
            $("#pass_error").remove();
            var email = $("#Email").val() ;
            var pass  = $("#password").val() ;
            if(email == "")
            {
                $("#Email").after("<p id='email_error'>Username is required.</p>");  
            }
            else{
                if(pass == "")
                {
                    $("#password").after("<p id='pass_error'>Password is required.</p>");
                }
                else{
                    $.ajax({
                        type: "POST",
                        url: "phpfiles/login.php",
                        data: 'username=' +email + '&password=' +pass,
                        success: function(data) {
                            if(data == "failed")
                            {
                               
                                $("#sign-in").after("<p id='pass_error'>Username or Password is incorrect.</p>");
                            }
                            else{
                                if(data == "Success")
                                {
                                 window.location.href = "phpfiles/compare.php"; 
                                }
                            }
                       },
                    });
                }
            }
        });
   
});
    </script>
    <title>DeviceRating | Welcome </title>
</head>

<body>
    <header class="header"> 
            <nav class="nav">
                <a href="firstpage.php"><img  src="images/comp.png" class="logo"></a> 
                <h1><a href="firstpage.php">Device<span style="color:#3d0280;">Rating</span></a></h1>
            <ul id="list">
                <li class="current"><a href="">Home</a></li>
                <li><a href="sign_up_page.php">Join us</a></li>
                <li><a href="phpfiles/compare.php">Rates & comments</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </nav>
    </header>
<div class="none" id="none">

    <!-- <div class="hide_sign_up">
        <input type="button" id="sign_up_in" value="Sign-in">
    </div> -->
    
  <h1 class="text-js">Look mum, I'm typing!</h1>
  

    <div class="container" id="container">
        <div class="about_content">
            <div class="type-js headline">
                <h1 class="text-js">Rate The Devices With Love.</h1>
            </div>
            <p>Here you can compare the latest devices & there features and <br> give your rating as feedback which will be useful for your other friend user.</p>
            <h2>Enjoy Comparing And Rating.</h2>
        </div>
        <div class="login-sign-buttons">
            <input type="button" id="login_button" value="Log in">
            <a href="sign_up_page.php"><input type="button" id="sign_button" value="Sign up"></a>
        </div>
    </div>

    <div class="form" id="forms">
        <input type="button" id="close_form" name="close_form" value= "X">
        <form id="signin" class="sign_in">
            <h3>Sign In</h3>
            <div class="inputArea">
                <input type="text"  name="Email" placeholder="Username" id="Email">
            </div>
           
            <div class="inputArea">
                <input type="Password" name="password" placeholder="Password" id="password">
            </div>
           
            <div class="submit_btn">
                <input type="button" class="button_input"  value="Sign in" name="submit-signin" id="sign-in">
            </div>
            <a href="sign_up_page.php"><input type="button" class="tosignup" name="signup" value="Not a member ? Sign Up"></a>
            <a href="" class="tosignin">Forgot password?</a>
        </form>
    </div>
</div>

<div class="information">
    <div class="info_head">
     <h1>Top Trending Brands With Greate Features...</h1>
    </div>
    <div class="main_info">

        <div class="box">
            <div class="img_part">
                <img src="images/googlepixel.jpg.png">
            </div>    
            <div class="card_data">
                    <h2>Google Pixel 2 XL</h2>
                    <h3>A camera so good it deserves unlimited smart storage.</h3>
                    <p>Capture every detail and access all your photos from any device.</p>
                    <p>Capture every detail and access all your photos from any device.</p>
                    <a href="#" class="card_data_a">Check out what user's says.</a>
            </div>
        </div>
    

        <div class="box">
            <div class="img_part">
                <img src="images/iphonexplus.jpg">
            </div>
            <div class="card_data">
                <h2>iPhone X Plus</h2>   
                <h3>The screen is gorgeous.</h3>
                <p>The iPhone X marks the first time that Apple has used an OLED panel on a smartphone, and the difference over the old LCD displays is clear.</p>
                <a href="#" class="card_data_a">Check out what user's says.</a>
            </div>
        </div>


        <div class="box">
            <div class="img_part">
                <img src="images/sam.jpg">
            </div>
            <div class="card_data">
                <h3>SAMSUNG GALAXY NOTE 9 FEATURE</h3>
                <ul>
                    <li>DISPLAYS- 6.4 inches dual curved display</li>
                    <li>PROCESSOR- snapdragon 850 CPU</li>
                    <li>RAM- 8GB/10GB DDR4</li>
                    <li>CAMERAS- (12MP+12MP) rear/(8MP+8MP) front</li>
                    <li>BATTERY- 3900mAh</li>
                    <li>STORAGE- 128GB/256GB</li>
                    <li>Sensor- In-display Fingerprint</li>
                </ul>  
                <a href="#" class="card_data_a">Check out what user's says.</a> 
            </div>
        </div>

        <div class="box">
            <div class="img_part">
                <img src="images/m2.jpg">
            </div>
            <div class="card_data">
                <h2>Blackberry</h2>
                <h3>Keypad Featured</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolor consectetur adipisicing consectetur adipisicing e elit dolor sit amet consectetur adipisicing elit temporibus.</p>
                <a href="#" class="card_data_a">Check out what user's says.</a>
            </div>      
        </div>

        <div class="box">
            <div class="img_part">
                <img src="images/m3.jpg">
            </div>
            <div class="card_data">
                <h2>Realme one</h2>
                <h3>Dual camera</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolor consectetur adipisicing consectetur adipisicing e elit dolor sit amet consectetur adipisicing elit temporibus.</p>
                <a href="#" class="card_data_a">Check out what user's says.</a>
            </div>      
        </div>

    </div>
</div>
    
<div class="about" id="about">
    <h3>About Us</h3>
    <p> I think that humans have a huge capacity to carry pain and sadness. <br>
        There are things that haunt us our entire lives; we are unable to let them go. 
        The good times seem almost effervescent and dreamlike in comparison with the times that didn't go so well.
    </p>
</div>
<footer class="footer">
    <h4>Connect with us on</h4>
    <div class="contact">
        <!-- <a href="https://api.whatsapp.com/send" data-action="share/whatsapp/share" target="_blank" title="Whatsapp"><img src="images/what.jpg"></a>
        <a href="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0" title="Facebook"><img src="images/face.jpg"></a>
        <a href="www.instagram.com" title="Instagram"><img src="images/insta.jpg"></a>
        <a href="www.google.com" title="Google"><img src="images/google.jpg"></a>  -->
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://plus.google.com/discover"><i class="fab fa-google-plus"></i></a></li>
        </ul>
    
    </div>
</footer>

<!-- <script type="text/javascript" src="header.js"></script> -->


<script>


    $('.form').hide();
    // $("#close_form").show();
    $(document).ready(function(){
        $('#login_button').click(function(){
            $('.form').toggle();
            // return false;
        });
        $('#close_form').click(function(){
            $('.form').hide();
            // return false;
        });
        $(".card_data_a").click(function(){
            alert("Please Log in");
        });
    });
    

    // $(document).click(function(){
    //         $('.form').hide();
    // });

//      if ($(window).width() < 1100)
//         {
//             $('.hide_sign_up').show();
//             $("#close_form").show();
//             // $('.form').hide();
//         } else 
//         {
//             $('.hide_sign_up').hide();
//             // $('.form').show();
//             $("#close_form").hide();
//         }
   
//     $(window).resize(function()
//      {
//         if ($(this).width() < 1100)
//         {
//             $('.hide_sign_up').show();
//             $("#close_form").show();
//             // $('.form').hide();
//         } else 
//         {
//             $('.hide_sign_up').hide();
//             // $('.form').show();
//             $("#close_form").hide();
//         }
//     });

// $("#close_form").on("click",function(){
//     $('.form').hide();
// });

// $("#sign_up_in").on("click",function(){
//     $(".form").show();
// });

window.onload = changeImage;
function popup() {
    alert("Please Sign Up.");
}

var i=0;
var images = [];
var time = 5000 ;

images[0] = "images/m3.jpg";
images[1] = "images/m2.jpg";
images[2] = "images/body.jpg";
images[3] = "images/googlepixel.jpg.png";
images[4] = "images/sam.jpg";

function changeImage() {
   
    document.getElementById("none").style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('"+images[i]+"')";
    document.getElementById("none").style.transition = ".5s ease-in infinite"
    if(i < images.length -1)
    {
        i++;
    }
    else{
        i=0;
    }
    setTimeout(" changeImage()",time);
}

$(document).ready(function(){
        $("#click").click(function(){
            $(".forms").slideToggle();
        });
       

    });

// 
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 70) {
            $(".header").children().addClass("active");
            // $("<li>").tagName().css('color':'black');

        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").children().removeClass("active");
        }
    });
});


function autoType(elementClass, typingSpeed){
  var thhis = $(elementClass);
  thhis.css({
    "position": "relative",
    "display": "inline-block"
  });
  thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
  thhis = thhis.find(".text-js");
  var text = thhis.text().trim().split('');
  var amntOfChars = text.length;
  var newString = "";
  thhis.text("|");
  setTimeout(function(){
    thhis.css("opacity",1);
    thhis.prev().removeAttr("style");
    thhis.text("");
    for(var i = 0; i < amntOfChars; i++){
      (function(i,char){
        setTimeout(function() {        
          newString += char;
          thhis.text(newString);
        },i*typingSpeed);
      })(i+1,text[i]);
    }
  },1500);
}

$(document).ready(function(){
  // Now to start autoTyping just call the autoType function with the 
  // class of outer div
  // The second paramter is the speed between each letter is typed.   
  autoType(".type-js",200);
});
</script>
</body>
</html>