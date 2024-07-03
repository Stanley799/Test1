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


<div class="image-div">    
        <div class="image-1"><p><img src="Images/WhatsApp Image 2024-03-08 at 14.39.01_49d4d72a.jpg" alt="ARTWORKS" width="300" height="475"> </p></div>
            <div class="image-2"><p><img src="Images/Lui.jpg"alt="LUI" width="300" height="300"></p></div>
                <div class="image-3"><p><img src="Images/gallery2.jpg" alt="gallery2" width="300" height="300"></p></div>
                    <div class="image-4"><p><img src="Images/gallery5.jpg" alt="gallery5" width="300" height="300"></p> </div>
                        <div class="image-5"> <p><img src="Images/gallery7.jpg" alt="gallery7" width="300" height="300"></p></div> 
                            <div class="image-6"><p><img src="Images/ndai.jpg" alt="ndai" width="300" height="300"></p> </div>
                                <div class="image-7"><p><img src="Images/WhatsApp Image 2024-05-13 at 23.04.27_3ee308e7.jpg" alt="gallery" width="300" height="300"></p></div>
</div>
<section class="paintbrush-img"></section> 

<style>/*css code for background image*/
    .paintbrush-img{
        width: 100%;
        height: 100vh;/* 100 viewport height*/
        background-image:url(Images/ai4.avif);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;/*this makes the image fixed*/
    
    
    }
</style>

<footer>
    <p>STALOZRAN COMPANY LTD</p>
    <p><a href="mailto:oduorstanleyotieno04e@gmail.com">oduorstanleyotieno04@gmail.com</a></p>
</footer>  



</body>
</html>