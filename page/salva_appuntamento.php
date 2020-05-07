<?php

if (isset($_POST['submit'])) {

/* RECUPERO I DATI DAL FORM INSERIMENTO COMMESSA */
$veicolo = filter_input(INPUT_POST, 'veicolo', FILTER_SANITIZE_STRING);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
$tlav = filter_input(INPUT_POST, 'tlav', FILTER_SANITIZE_STRING);
$note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);


if(isset($_POST['data'])){$data = mysqli_real_escape_string($mysqli, $_POST['data']);}else{$data ="";}
if(isset($_POST['ora'])){$ora = mysqli_real_escape_string($mysqli, $_POST['ora']);}else{$ora ="";}
if(isset($_POST['gestore'])){$gestore = mysqli_real_escape_string($mysqli, $_POST['gestore']);}else{$gestore ="";}
if(isset($_POST['tipo_pren'])){$tipo_pren = mysqli_real_escape_string($mysqli, $_POST['tipo_pren']);}else{$tipo_pren ="";}
if(isset($_POST['stato_pren'])){$stato_pren = mysqli_real_escape_string($mysqli, $_POST['stato_pren']);}else{$stato_pren ="";}
if(isset($_POST['tipo_lavorazione'])){$tipo_lavorazione = mysqli_real_escape_string($mysqli, $_POST['tipo_lavorazione']);}else{$tipo_lavorazione ="";}
if(isset($_POST['tlav'])){$tlav = mysqli_real_escape_string($mysqli, $_POST['tlav']);}else{$tlav ="";}
if(isset($_POST['email'])){$email = mysqli_real_escape_string($mysqli, $_POST['email']);}else{$email ="";}

/* SETTO I MAIUSCOLI */
$veicolo = strtoupper($veicolo);
$cliente = strtoupper($cliente);
$note = strtoupper($note);

/*EVITO LA STAMPA DEL CARATTERE RN*/
$note = trim(str_replace("\r\n",' ', $note));

/* FILTRO LE ALTRE VARIABILI */
$data = trim(strip_tags(stripslashes($data)));
$ora = trim(strip_tags(stripslashes($ora)));
$telefono = trim(strip_tags(stripslashes($telefono)));
$gestore = trim(strip_tags(stripslashes(strtoupper($gestore))));
$tipo_pren = trim(strip_tags(stripslashes(strtoupper($tipo_pren))));
$stato_pren = trim(strip_tags(stripslashes(strtoupper($stato_pren))));
$tipo_lavorazione = trim(strip_tags(stripslashes(strtoupper($tipo_lavorazione))));
$tlav = trim(strip_tags(stripslashes(strtoupper($tlav))));
$email = trim(strip_tags(stripslashes(strtoupper($email))));
/* FINE FILTRI e CONVERSIONI SULLE VARIABILI POST */

/* QUERY DI INSERIMENTO SENZA UPPER, L'UPPER E' DEMANDATO AL COMANDO FOREACH */
$sq1 = "INSERT INTO appuntamenti (id_app, cliente, gestore, veicolo, data, ora, tlav, stato_pren, tipo_pren, tipo_lavorazione, telefono, email, note) VALUES (NULL, '$cliente', '$gestore', '$veicolo', STR_TO_DATE('$data', '%d/%m/%Y'), '$ora', '$tlav', '$stato_pren', '$tipo_pren', '$tipo_lavorazione', '$telefono','$email', '$note')";

//INSERISCO TUTTO IN UNA VARIABILE CHE CHIAMO rs1
$rs1 = $mysqli->query($sq1);
//var_dump ($sq1);
//exit;

if (!$rs1) {
echo "<p style='margin-top: 40px;text-align:center;'>Ho trovato un errore nell'esecuzione della <b>QUERY</b></p>";
die("Errore nella query $sq1: " . mysqli_error());

}else{

/* Redirect alla pagina principale */
$messaggio = "<div class='success'>Appuntamento registrato con successo! Attendi..</div>";
echo "<meta http-equiv='refresh' content='2;url=index.php?page=lista_appuntamenti_oggi&tipo=tutti&data=oggi'>";

 }
}

?>

<?php echo $messaggio; ?>