<?php 
$cookieName= "username";
$cookieValue = "diaa";
setcookie($cookieName, $cookieValue, time() + 86400, "/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobals2</title>
</head>
<body>
<!-- 5- determine the project name, and script name . -->
<?php
$phpself = $_SERVER['PHP_SELF'];
$projectName =strrchr($phpself, "/");
echo "The project name is $projectName "."and the script name is".$_SERVER['SCRIPT_NAME'];
?> <hr/><br/>


<!-- ---------------------------------------- -->
<!-- 6- Determine page requested time -->
<?php 
// $reqTime = $_SERVER['REQUEST_TIME'];
$reqTime= date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
echo "The page requested time is $reqTime";
?><hr/><br/>
<!-- ---------------------------------------- -->
<!-- 7- make a website counter on refresh ? -->
<!-- 8- Number of visitors ? -->
<?php 
session_start();

if(isset($_SESSION['refresh'])){
    $_SESSION['refresh'] = $_SESSION['refresh'] + 1;
}else {
    $_SESSION['refresh'] =1;
};
echo "You refresh the page ".$_SESSION['refresh']." times";
?><hr/><br/>
<!-- ---------------------------------------- -->






<!-- ---------------------------------------- -->
<!-- 9-Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain],
[secure], [httponly] . Then Retrieve all cookies value after that delete the cookies . ? -->
<?php
if(isset($_COOKIE[$cookieName])){
    echo $cookieValue;
    setcookie($cookieName, $cookieValue, time() - 3600, "/");
}

?>

</body>
</html>