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
<div class="main-container">


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

<div class="about-div">
<p class="what-is-stalozran"><b style="color:rgb(226,135,67);">WHAT IS STALOZRAN ?</b></p>

<p><img class="about-image" src="Images/1stano.jpg"alt="otiss" ></p>
<p>Stanley Otieno,"I have a great passion in expressing my inner thoughts to the public."</p>
<p>Stalozran is a company that deals in solving problems with great masterpieces. We not only believe that art can make our surrounding beautiful,</p>
<p> but we also believe that it can act as great utility to the society. </p>
<p>For instance, art can play a therapeutic purpose in our lives today. </p>
<p>For many years, many people have found solace in their hearts by looking at artworks or taking part in one.</p>
<p>As an organization and a community at large, we aim at producing efficient products to all and sundry hence we will not relent.</p>
<p> The company is owned by Stanley Otieno Oduor, who has been a passionate artist.</p>
<p>He has a wide interest in all artistic fields (drawing, painting, sculpting, designing of outfits, poetry, dance etc).</p>  
<p>It started as a smaller business than it is, and everything was run by a single person.</p>
<p> With time the company grew and started producing multiple products such as paintings, drawings, outfits, wall hangings and many decorations. </p>
<p>This is a company that sells beautiful artworks of any kind.</p>
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
</div>
</body>
</html>