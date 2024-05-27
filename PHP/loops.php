<h1>Loops</h1>

<h4>while loop</h4>
<?php
//while loop
$max = 0;
while($max <10){
    print $min . "<br>";
    $max++;
}


?>
<h4>do-while loop</h4>
<?php

//do while loop
$x=14;
do{
    print $x . "<br>";
    $x++;
}while ($x < 7);

?>
<h4>for loop</h4>
<?php
//for loop

for($r=3; $r<12; $r++){
    print $r . "<br>";
}
?>

<h4>another for-loop</h4>
<?php
//write a code for a for loop to produce even number between 14 and 24
for($n=14; $n<24; $n+=2){
    print $n . "<br>";
}
?>



<h4>foreach loop</h4>
<?php
//foreach
$months=["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sept","Oct","Nov","Dec"];

foreach($months AS $month){
    print $month . "<br>";
?>
<select name="" id="">
<option value=""><?php print $month; ?></option>
<?php

}
?>
</select>


<select name="" id="">
<?php
//while loop
$y = 2014;
while($y<2030){
    $y++;
?>
<option value=""><?php print $y; ?></option>
<?php
}
?>
</select>