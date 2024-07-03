<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="CSS/style.css"> <!--link to the css stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- for proper response of bootsatrap code-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"><!--CDN links for bootstrap -->
    <script src="JavaS/navigation.js" defer></script><!--link to my javascript file-->

</head>


<body class="back-color">

<header class="primary-header flex">
    <div>
        <h4 class="logo">STALOZAN </h4>

    </div>


    <button class="mobile-nav-toggle" aria-controls="sidebar" aria-expanded="false">
        <span class="sr-only">Menu</span>
    </button>





    <nav class="main-bar" ><!--navigation tag to create a bar-->

        
        <!--NAVIGATION BAR-->
     <ul id="sidebar" 
     data-visible="false" class="sidebar flex"> <!--this code develops a list that contains link to all the 7 pages-->
         <li> <a href='index.php'>Home </a>  </li><!--Link that leads you to the about,contact,gallery,orders,login and hotdeals pages -->
         <li> <a href='about.php'>About </a>  </li>
         <li> <a href='contact.php'>Contact </a>  </li>
         <li> <a href='gallery.php'>Gallery </a>  </li>
         <li> <a href='orders.php'>Orders </a>  </li>
         <li> <a href='shop.php'>Shop </a>  </li>
         <li><button><a href="login.php">LogIn</a></button></li>
         <li><button><a href="signUp.php">SignUp</a></button></li>
     </ul>       
 </nav> 




</header>

<div class="contact-div">
    <div class="to-contact-us"><h1><b>To contact us</b></h1></div>

    <div class="call">
    <p><b>Call:</b> +254746464468
    <!--call button--> <button>Call</button></p>
    </div>
        
    <div>
    <p><b>Email:</b> oduorstanleyotieno04@gmail.com
    <!--Email button--> <button>Email</button></p>
    </div>
    
</div> 

<footer>
        <p>STALOZRAN COMPANY LTD</p>
        <p><a href="mailto:oduorstanleyotieno04e@gmail.com">oduorstanleyotieno04@gmail.com</a></p>
</footer>  

</body>

</html>