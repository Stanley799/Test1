<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css"> <!--link to the css stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- for proper response of bootsatrap code-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"><!--CDN links -->
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


<div class="hotdeals-div">
<div class="image-div">    
    <div class="image-1"><p><img src="Images/denim10.jpg" alt="deim10" width="300" height="475"> </p></div>
        <div class="image-2"><p><img src="Images/denim2.jpg" alt="denim2" width="300" height="300"></p></div>
        <div class="image-3"><p><img src="Images/denim3.jpg" alt="denim3" width="300" height="300"></p></div>
        <div class="image-4"><p><img src="Images/denim4.jpg" alt="denim4" width="300" height="300"></p> </div>
        <div class="image-5"> <p><img src="Images/denim5.webp" alt="denim5" width="300" height="300"></p></div> 
        <div class="image-6"><p><img src="Images/denim6.webp" alt="denim6" width="300" height="300"></p> </div>
        <div class="image-7"><p><img src="Images/denim7.webp" alt="denim7" width="300" height="300"></p></div>
        <div class="image-8"><p><img src="Images/denim8.avif" alt="denim8" width="300" height="300"></p></div>
        <div class="image-9"><p><img src="Images/denim9.jpg" alt="denim9" width="300" height="300"></p></div>
        <div class="image-10"><p><img src="Images/denim10.jpg" alt="denim10" width="300" height="300"></p></div>
        <div class="image-11"><p><img src="Images/denim11.jpg" alt="denim11" width="300" height="300"></p></div>
        <div class="image-12"><p><img src="Images/denim12.jpg" alt="denim12" width="300" height="300"></p></div>
        <div class="image-13"><p><img src="Images/denim13.jpg" alt="denim13" width="300" height="300"></p></div>
        <div class="image-14"><p><img src="Images/denim14.jpeg" alt="denim14" width="300" height="300"></p></div>
        <div class="image-15"><p><img src="Images/denim15.jpeg" alt="denim15" width="300" height="300"></p></div>

</div>

</div>

<footer>
    <p>STALOZRAN COMPANY LTD</p>
    <p><a href="mailto:oduorstanleyotieno04e@gmail.com">oduorstanleyotieno04@gmail.com</a></p>
</footer>  


</body>
</html>