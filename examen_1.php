<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .estilo1{
        color:red;

    }
</style>
<body>
    
</body>
</html>

<?php 
error_reporting(0);
$texto=$_POST["texto"];
$palabra1=$_POST["palabra1"];
$palabra2=$_POST["palabra2"];
$array=preg_split("/[\s]+/", $texto);


foreach($array as $valor){
    if($valor==$palabra1){
        echo "<span class='estilo1'>$valor </span>";
    }
    elseif($valor==$palabra2){
        
        echo "<span><strong>$valor </strong></span>";
    
    }
    else{
        echo "$valor ";
    }

}
?>

<h1>La fumada de PedroPa</h1>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<textarea name="texto" id="" cols="30" rows="10"><?php echo $texto;?> </textarea><br><br>
Palabra 1
<input type="text" name="palabra1" value="<?php echo $palabra1;?>"><br>
Palabra 2
<input type="text" name="palabra2" value="<?php echo $palabra2;?>"><br>
<input type="submit" name="enviar">
</form>


