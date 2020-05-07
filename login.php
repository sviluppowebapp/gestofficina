<?php 
session_start();
include('inc/db.php'); 
 
if (isset($_POST['submit'])) {
/* Protezione da SQL injection */
$username = mysqli_real_escape_string($mysqli, $_POST['username']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);
 
$sql = "SELECT * FROM utenti WHERE username = '$username' AND password = MD5('$password')";
$res = $mysqli->query($sql);
$count = mysqli_num_rows($res);
 
/* Prelevo l'identificativo dell'utente */
$row=$_POST['username'];
$username = mysqli_real_escape_string($mysqli, $_POST['username']);
 
/* Effettuo il controllo */
if ($count == 0) {

/* Username e password errati, stampo un messaggio di errore */
$messaggio = "Username o Password non corretti. Riprova.";

}else{
 
/* Registro la sessione */
$_SESSION["logged"] = true;
$_SESSION["admin"] = true; 

/* Redirect alla pagina riservata */
echo '<script language=javascript>document.location.href="index.php?page=home"</script>'; 
 
 }
}

?>

<!DOCTYPE html>
<html>
<head> 
<!-- ... INIZIO METATAG ... -->
<title>CMS GESTIONALE 2016 v. 1.0</title>     
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="icon" type="image/png" href="images/favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet" />
<link href="css/normalize.css" rel="stylesheet" />
<link href="css/form.css" rel="stylesheet" />
</head>

<body>
<img class="bg" src="images/bkg_login_n.jpg" width="1680" height="1050" />
<div class="wrapper">
<div class="content">

<?php $messaggio='' ?>
<?php echo "<p class='messaggio'>$messaggio</p>"; ?>

<div class="login-block">
<h1>GESTIONE OFFICINA AMMINISTRAZIONE</h1>
<p align="center"> Non riesci ad accedere?<br><a href="reset.php"><b>Recupera Password</b></a></p><br>
<form action="" method="post">
<input type="text" name="username" placeholder="Username" id="username" value="admin" />
<input type="password" name="password" placeholder="Password" id="password" value="admin" />
<input type="submit" name="submit" class="bottone" value="LOGIN" id=submit" />
</form>
</div>

</div><!-- ... END CONTENT ... -->
</div><!-- ... END WRAPPER ... -->
</body><!-- ... END BODY ... -->
</html><!-- ... END HTML ... -->