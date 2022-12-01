<?php
print_r($_GET);
// print_r($_POST);
if(isset($_GET['name']) && isset($_GET['surname'])){
    echo"Labas ". $_GET['name'] . " " .$_GET['surname']."!";
    // header("location: ./index.php");
    // die;

}
$luckynumber = "";
if(isset($_GET['luckyNumber'])){
    $luckynumber = $_GET['luckyNumber'];
}
// echo ($_SERVER['REQUEST_METHOD']);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    /*
        cia issaugau duomenis i serveri
    */
    header("location: ./index.php");
    die;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Web mechanics</h1>
    <h1>todays lucky number is: <?=($luckynumber!="") ? $luckynumber : 0 ?></h1>
    <form action="" method="POST">
        <!-- <label for="yard">su kiemu</label>
        <input type="checkbox" name="withYard" id="yard"> -->
        vardas: <input type="text" name="name" value="Jokubas"><br>
        pavarde: <input type="text" name="surname"><br>
        pasto adresas: <input type="text" name="email"><br>
        <button type="submit">touch me!</button>
    </form>

    <form action="" method="get">
        <input type="number" name="luckyNumber">
        <input type="checkbox" name="varneles[]" value="1" id="">
        <input type="checkbox" name="varneles[]" id="">
        <input type="checkbox" name="varneles[]" id="">
        <input type="checkbox" name="varneles[]" id="">
        <input type="checkbox" name="varneles[]" value="4"  id="">
        <input type="hidden" name="oKasGiCia" value="17">
        <button type="submit">try your luck</button>
    </form>
<a href="https://www.google.com?q=cookies">guglas</a>
<a href="?catSays=miau">tas pats page</a>
<a href="./index.php?catSays">tas pats page</a>

</body>
</html>