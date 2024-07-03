<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>    Home- STALOZAN COMPANY </title>
    <link rel="stylesheet" href="CSS/style.css"> <!--link to the css stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- for proper response of bootsatrap code-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"><!--CDN links -->
    <script src="JavaS/navigation.js" defer></script><!--link to my javascript file-->

</head>

<body class="back-color">
<div class="main-container">

    <div class="background-image"></div><!--div elemnt for a backgorund image-->



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





 <div class="">

    <h1 class="Heading-1">MAKE YOUR WORLD BEAUTIFUL</h1> 

 </div>
    <h2 class="Heading-2">Stanley Otieno</h2>
    

    <section>
        <style> /* css for background image*/
            section
             {
            width: 100%;
            height: 100vh;/* 100 viewport height*/
            background-image:url(Images/ai1.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;/*this makes the image fixed*/
            
            }
            
            </style>


    </section>   
<footer>
        <p>STALOZRAN COMPANY LTD</p>
        <p><a href="mailto:oduorstanleyotieno04e@gmail.com">oduorstanleyotieno04@gmail.com</a></p>
</footer>

</div>


</body>
</html>