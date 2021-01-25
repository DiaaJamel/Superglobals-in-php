<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobal</title>
</head>
<body>
<!-- 1- create a form and send email and password , in the action page you will determine if the data
is sent by get or post -->
<?php echo $_GET["name"];
echo $_GET['password']; ?>
<form action="Superglobals-php.php" method="get">
    <label for="name">Enter Your Name</label>
    <input type="text" name="name">
    <label for="password">Enter Your Password</label>
    <input type="text" name="password">
    <input type="submit" value="SignIn">
</form> <br/>
<?php echo $_POST["name"];
echo $_POST['password']; ?>
<form action="Superglobals-php.php" method="post">
    <label for="name">Enter Your Name</label>
    <input type="text" name="name">
    <label for="password">Enter Your Password</label>
    <input type="text" name="password">
    <input type="submit" value="SignIn">
</form> <hr/><br/>

<!-- --------------------------------------------- -->
<!-- 2- make a search engine website that contain URL as input text and button
named (GO) if you click on Go will redirect you to the written URL -->
<?php ?>
<form action="">
    <input type="text" placeholder="what's in your mind?">
    <input type="submit" value="GO">
</form><hr/><br/>
<!-- --------------------------------------------- -->
<!-- 3- make a Calculator that contain Basic Mathematical operations(+,-,*,/) -->
<!-- action="Superglobals-php.php" method="GET" -->
<!-- id="" -->
<form>
    <input type="text" name="number1">
    <input type="text" name="number2">
    <select name="operator">
        <option>none</option>
        <option>Add</option>
        <option>Sub</option>
        <option>Mul</option>
        <option>Div</option>
    </select>
    <button type="submit" name="submit" value="submit">Calculate</button>
    <!-- <input type="submit" name="submit" value="calculate"> -->
</form>
<p>The Result is: </p>
<?php
if(isset($_GET['submit'])){
$res1 = $_GET['number1'];
$res2 = $_GET['number2'];
$operator = $_GET['operator'];
// $res = '';
switch ($operator){
    case "none" :
        echo  "Something wrong";
        break;
    case "Add" :
        echo  $res1 + $res2;
        break;
    case "Sub" :
        echo  $res1 - $res2;
        break;
    case "Mul" :
        echo  $res1 * $res2;
        break;
    case "Div" :
        echo  $res1 / $res2;
        break;

}
}



?>

</body>
</html>