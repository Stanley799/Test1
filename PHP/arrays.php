<h1>Numeric Array</h1>
<?php
//Index array or Numeric array
$color = array("Black","Green","White","Red","Black",34,58,6,23.5) ;
$item = [45,78,45,'Book','Pen','Ruler'];
?>

<pre>
    <?php print_r($color); ?>
</pre>

<pre>
    <?php var_dump($color);?>
</pre>




<?php
<h1>Associative Array </h1>
$user_emails = array(
    "Alex" =>"aokama@yahoo.com",
    "Stano" =>"stano@yahoo.com",
    "Ben" =>"ben@yahoo.com"
);
?>

<pre>
    <?php print_r(@user_emails); ?>
</pre>



<h1>Multidimensional Arrays </h1>
<?php

$user_details =[
    "Director" => [
        "Fullname" => "Stanley Otieno",
        "Email" => "stano@yahoo.com",
        "Address" => "Mada",
        "Phone"=>[
            "Cell"=> "+254746464468",
            "Mobile"=> "+254794857779"

        ],
    ],

    "Manager" => [
        "Fullname" => "Ben Otieno",
        "Email" => "ben@yahoo.com",
        "Address" => "Kangemi",
        "Phone"=>[
            "Cell"=> "+254710136384",
            "Mobile"=> "+254723776256"

        ],
    ],




];

?>
<pre>
<?php 
print_r($user_details);?>
</pre>
<?php print $user_details ["Director" || "Manager"]?>;



 
 <?php
 $call["fname"]="Alex";
 $call["lname"]="Okama";
 $call["email"]="AOkama@yahoo.com";

?>

 <pre>
    <? print_r($call);?>


</pre>