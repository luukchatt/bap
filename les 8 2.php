<!doctype html>
<html>
<head>
</head>
<body>
<form method="post" action="">
    Getal <input type="text" name="getal"><br>
    <input type="submit" value="Verwerk">
</form>
<style>
    body{text-align: center}
</style>
<?php
$getal = $_POST['getal'];

if ($getal > 0 && $getal <=10) {
    echo '<body style="background-color:#fa0c28">';
}
elseif ($getal > 10 && $getal <=20) {
    echo '<body style="background-color:#3f9ffe">';
}
elseif ($getal > 20 && $getal <=30) {
    echo '<body style="background-color:#ff22e1">';
}
elseif ($getal > 30 && $getal <=40) {
    echo '<body style="background-color:#00ed25">';
}
elseif ($getal > 40 && $getal <=50) {
    echo '<body style="background-color:#CEC943">';
}
elseif ($getal > 50 && $getal <=60) {
    echo '<body style="background-color:#ff7a08">';
}
elseif ($getal > 60 && $getal <=70) {
    echo '<body style="background-color:#00f9ec">';
}
elseif ($getal <=0) {
    echo "je moet een getal boven de 0 invullen";
}
elseif ($getal > 70) {
    echo "je moet een getal onder de 70 invullen";
}

?>
</body>
</html>
