<?php 
$palabra1 =["com","put","lok","ador"];
$palabra2 =["tal","ma", "u", "golp","se"];
$palabra3 =["gol","te","cla","hopl","do"];
$palabra4 =["con","mdf","trol"];
$palabra5 = ["pen","nhgd","drive","jidi","pol"]
?>

<!DOCTYPE html>
<html lang="en">
<head>

<br>
    <meta charset="UTF-8">
    <br>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unir palabras</title>
</head>
<body>
<br>
computador : <? implode(',',$palabra1)?>
<br>
salida : <?php echo $palabra1[0] ?>,<?php echo $palabra1[1] ?>,<?php echo $palabra1[3] ?>
<br>
 <br>
mause : <? implode(',',$palabra2)?>
<br>
salida : <?php echo $palabra2[1] ?>,<?php echo $palabra2[2] ?>,<?php echo $palabra2[4] ?>
<br>
<br>
teclado : <? implode(',',$palabra3)?>
<br>
salida : <?php echo $palabra3[1] ?>,<?php echo $palabra3[2] ?>,<?php echo $palabra3[4] ?>
<br>
<br>
control : <? implode(',',$palabra4)?>
<br>
salida : <?php echo $palabra4[0] ?>,<?php echo $palabra4[2] ?>
<br>
<br>
pendrive : <? implode(',',$palabra5)?>
<br>
salida : <?php echo $palabra5[0] ?>,<?php echo $palabra5[2] ?>
 

</body>
</html>