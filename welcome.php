<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>

    <title>
        Registration
    </title>
</head>

<body>
<h1>Welcome here....<br/>Click Below to See your assignments...<br/></h1><br>
<?php
echo $_SESSION['email'];
?>


<h1><a href="logout.php">Logout here</a> </h1>

<br/><br/><br/><center><br>
<form>
<input type="button" value = "Click here to submit your issues" onclick="window.location.href='textarea2.php'" STYLE="background-color:#66ffff"/>
</form>
</center>
</body>

</html>

