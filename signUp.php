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
   
<!--Include statement-->
<?php
include_once('./PHP/header.php');

?>
    

<div class="logIn"> 
    <p><h2>Sign Up</h2></p>   
<form>
 <div class="field-group">
    <input type="text" name="name" class="input-field" placeholder="Enter First Name" autocomplete="off">
    <div class="icon"><!--for adding the name icon-->
        <i class="user" aria-hidden="true"></i>
    </div>
    <input type="text" name="name" class="input-field" placeholder="Enter Second Name" autocomplete="off">

    <input type="text" class="input-field" placeholder="Enter Email Address">
    <input type="text" class="input-field-last" placeholder="Enter Phone Number">
 </div> 
 </form>   
</div> 

<footer>
    <p>STALOZRAN COMPANY LTD</p>
    <p><a href="mailto:oduorstanleyotieno04e@gmail.com">oduorstanleyotieno04@gmail.com</a></p>
</footer>  


</body>
</html>