<?php
date_default_timezone_set('Europe/Rome');
require_once('function/date_day.php');

//var_dump($_GET['tipo']);
//var_dump($_GET['data']);
//var_dump($_GET['cliente']);

$numero_operai=5;
$oggi = date('Y-m-d');
$totale=0;
$orar=" ore <br>";
$minuti=" minuti";
// $congiunzione="&";
$tipo='UNDEF';
$cliente='UNDEF';
$where='';
if(isset($_GET['tipo']))$tipo = trim(strip_tags(stripslashes($_GET['tipo'])));
else echo 'errore';

if(isset($_GET['cliente']))$cliente = trim(strip_tags(stripslashes($_GET['cliente'])));


if ($tipo == "tutti")
{
    $where = "WHERE data = '$oggi'";

}elseif ($tipo == "accettazione" && $cliente == "") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'ATTESA ACCETTAZIONE' ";

}elseif ($tipo == "lavorazione" && $cliente == "") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'LAVORAZIONE' ";

}elseif ($tipo == "terminato" && $cliente == "") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'TERMINATO' ";

}elseif ($tipo == "accettazione" && $cliente == "privato") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'ATTESA ACCETTAZIONE' AND tipo_pren = 'PRIVATO'";

}elseif ($tipo == "lavorazione" && $cliente == "privato") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'LAVORAZIONE' AND tipo_pren = 'PRIVATO'";

}elseif ($tipo == "terminato" && $cliente == "privato") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'TERMINATO' AND tipo_pren = 'PRIVATO'";


}elseif ($tipo == "accettazione" && $cliente == "noleggio") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'ATTESA ACCETTAZIONE' AND tipo_pren = 'NOLEGGIO'";

}elseif ($tipo == "lavorazione" && $cliente == "noleggio") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'LAVORAZIONE' AND tipo_pren = 'NOLEGGIO'";

}elseif ($tipo == "terminato" && $cliente == "noleggio") {
    $where = "WHERE data = '$oggi' AND stato_pren = 'TERMINATO' AND tipo_pren = 'NOLEGGIO'";

}elseif ($tipo == "tutti" && $data == "oggi") {
    $where = "WHERE data = '$oggi' ";
}


$sql = "SELECT * FROM appuntamenti $where ORDER BY ora ASC";
//var_dump($sql);
$res = $mysqli->query($sql);
$count = mysqli_num_rows($res);

if ($count == 0) {

echo "<div class = 'container-ricerca-nulla'>";
echo "<div class ='row'><p class='btn btn-danger center-button'>Nessun appuntamento presente</p></div>";
echo "<br>";
echo "<div class ='row'><p class='btn btn-success center-button'><a href='index.php?page=inserisci_appuntamento'><b>CLICCA E INSERISCI NUOVO APPUNTAMENTO</b></a></p></div>";
echo "</div>";

}else{

echo "<div class ='container-appuntamento'>";
echo "<table class='table table-striped table-responsive'>";
echo "<tr>";
echo "<th style='color:blue' >Registrato<br>nel sistema</th>";	// Riga modificata 17-12-2019 per valorizzare Data Inserimento
echo "<th style='color:green'>Data <br>Appunt.</th>";
echo "<th style='color:green'>Ora <br>Appunt.</th>";
echo "<th style='color:green;text-align:left;'>Cliente</th>"; // Riga modificata 26-11-2019 per allineare a sx il testo nel campo Cliente
echo "<th style='color:green'>Tempi lavorazione<br>previsti</th>";
echo "<th style='color:green'>Telefono</th>";
echo "<th style='color:green'>Gestore</th>";
echo "<th style='color:green'>Veicolo</th>";
echo "<th style='color:green'>Tipo <br>Prenotazione</th>";
echo "<th style='color:green'>Tipo <br>Lavorazione</th>";
echo "<th style='color:green'>Stato <br>Prenotazione</th>";
echo "<th style='color:green'>Note</th>";
//echo "<th>Nuovo</th>";
echo "<th>Aggiorna</th>";
echo "<th>Stampa</th>";
//echo "<th>Mod.Privacy</th>";
echo "</tr>";

?>

<?php
date_default_timezone_set('Europe/Rome');
$today = date("Y-m-d");

$sq1 = "SELECT * FROM appuntamenti WHERE data = '$today' AND tipo_pren = 'PRIVATO' ORDER BY id_app ASC";
$rs1 = $mysqli->query($sq1);
$cnt1 = mysqli_num_rows($rs1);

$sq2 = "SELECT * FROM appuntamenti WHERE data = '$today' AND tipo_pren = 'NOLEGGIO' ORDER BY id_app ASC";
$rs2 = $mysqli->query($sq2);
$cnt2 = mysqli_num_rows($rs2);

$sq3 = "SELECT * FROM appuntamenti WHERE data = '$today' AND tlav = 0 ORDER BY id_app ASC";
$rs3 = $mysqli->query($sq3);
$cnt3 = mysqli_num_rows($rs3);

?>

<div class = "container-menu-superiore">
	<div class ="row">

		<div class="col-sm-3">
			<div class="alert alert-success alert-dismissible" role="alert">
			Ciao <strong>utente loggato</strong> questa la tua agenda di oggi !
			</div>
		</div>

		<div class="col-sm-3">
		<h3><span class="badge badge-primary"><?= $cnt1 ?> app. privati</span></h3>
		</div>

		<div class="col-sm-3">
		<h3><span class="badge badge-success"><?= $cnt2 ?> app. noleggio</span></h3>
		</div>

		<div class="col-sm-3">
		<h3><span class="badge badge-danger">di cui <?= $cnt3 ?> app. senza tempi</span></h3>
		</div>

	</div>
</div>

<div class = "container-menu-superiore">
	<div class ="row">

		<div class="col-sm-3">
			<a class="btn btn-outline-success" href="index.php?page=inserisci_appuntamento" role="button">Nuovo Appuntamento</a>
		</div>

		<div class="col-sm-3">
			<a class="btn btn-outline-success" href="index.php?page=ricerca_commessa" role="button">Ricerca Commessa</a>
		</div>
		
		<div class="col-sm-3">
			<a class="btn btn-outline-success" href="privacy/privacy.pdf" target="_blank" role="button">Stampa Privacy</a>
		</div>
		
		<div class="col-sm-3">
			<button onclick="window.location.reload();" class="btn btn-outline-warning">Aggiorna la pagina</button>
		</div>
	</div>
</div>

<?php

while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
$id_app = mysqli_real_escape_string($mysqli, $row['id_app']);
$cliente = mysqli_real_escape_string($mysqli, $row['cliente']);
$data = mysqli_real_escape_string($mysqli, $row['data']);
$ora = mysqli_real_escape_string($mysqli, $row['ora']);
$gestore = mysqli_real_escape_string($mysqli, $row['gestore']);
$veicolo = mysqli_real_escape_string($mysqli, $row['veicolo']);
$tlav = mysqli_real_escape_string($mysqli, $row['tlav']);
$stato_pren = mysqli_real_escape_string($mysqli, $row['stato_pren']);
$tipo_pren = mysqli_real_escape_string($mysqli, $row['tipo_pren']);
$tipo_lavorazione = mysqli_real_escape_string($mysqli, $row['tipo_lavorazione']);
$telefono = mysqli_real_escape_string($mysqli, $row['telefono']);
$note = mysqli_real_escape_string($mysqli, $row['note']);
$data_ins = mysqli_real_escape_string($mysqli, $row['data_ins']);

/* FILTRI e CONVERSIONI SULLE VARIABILI POST */
$cliente = trim(strip_tags(stripslashes($cliente)));
$veicolo = trim(strip_tags(stripslashes($veicolo)));
//$note = trim(strip_tags(stripslashes($note)));
$note = str_replace('\r\n' , '<br>', $note);
$note = stripslashes($note);
$note = wordwrap($note,32,"<br>"); //MANDO A CAPO OGNI 32 CARATTERI
$data = strtotime($data);
$data = date('d/m/Y', $data);

$data_ins = strtotime($data_ins); // DEDINISCO UNA VARIBILE PER CONTENERE LA DATA INSERIMENTO CHE E'IN FORMATO UNIX TIMESTAMP


/* FINE FILTRI e CONVERSIONI SULLE VARIABILI POST */

if ($stato_pren == 'ATTESA ACCETTAZIONE') { $classe = 'table-danger-rs'; }
if ($stato_pren == 'LAVORAZIONE') { $classe = 'table-warning-rs'; }
if ($stato_pren == 'TERMINATO') { $classe = 'table-success-rs'; }
if ($stato_pren == 'MAI ESEGUITO') { $classe = 'table-danger-maieseguito'; }

if ($tipo_lavorazione == 'MECCANICA') { $lav = 'table-warning-mec'; }
if ($tipo_lavorazione == 'CARROZZERIA') { $lav = 'table-warning-car'; }
if ($tipo_lavorazione == 'PNEUMATICI') { $lav = 'table-warning-pneus'; }

if ($tipo_pren == 'NOLEGGIO') { $tnol = 'tip-pren-noleggio'; $stylecliente = 'tip-pren-noleggio'; }
if ($tipo_pren == 'PRIVATO') { $tnol  = 'tip-pren-privato'; $stylecliente = 'tip-pren-privato';}
?>


<?php
$tempo = $tlav;  // tempo in minuti
$ore = floor($tempo / 60);
$minuto = $tempo % 60;
//echo "$ore:$minuto";
?>

<tr>
<td style="color:yellow; background-color:black;"><b><?php echo strftime("Ore " . '%X <br> %d/%m/%y', date($data_ins));?></td>  <!--Mando a capo Data e Ora-->
<td><b><?php echo data_it($data); ?></b></td>
<td><?php echo $ora; ?></td>
<td class='<?= $stylecliente; ?>'><?php echo $cliente; ?></td>
<td class='<?= $tlavcss='tlavcss'; ?>'><?php echo ($tlav == 0 ? "N.D" : $ore. "".$orar. " ".$minuto. "" .$minuti); ?></td>
<td><?php echo $telefono; ?></td>
<td><?php echo $gestore; ?></td>
<td><?php echo $veicolo; ?></td>
<td class='<?= $tnol; ?>'><?php echo $tipo_pren; ?></td>
<td class='<?= $lav; ?>'><?php echo $tipo_lavorazione; ?></td>
<td class='<?= $classe; ?>'><? echo $stato_pren; ?></td>
<td><?php echo $note; ?></td>
<!--<td><?php //echo "<a href='index.php?page=inserisci_appuntamento' target='_blank'><img src='images/add_32.png' alt=''></a>"; ?></td>-->
<td><?php echo "<a href='index.php?page=aggiorna_appuntamento&id_app=$id_app' target='_blank'><img src='images/edit.png' alt=''></a>"; ?></td>
<td><?php echo "<a href='pdf_appuntamento.php?id_app=$id_app' target='_blank'><img src='images/print.png' alt='Stampa'></a>"; ?></td>
<!--td><?php //echo "<a href='../gos/privacy/privacy.pdf' target='_blank'><img src='images/gdpr.png' alt='Privacy' height='32' width='32'></a>"; ?></td>-->
</tr>


<?php
$totale+=$tlav;
 }
echo "</table>";
echo "</div>";
}
$tempo_totale = floor($totale / 60)."h ".($totale % 60)."m ";
$ore_operai = round(($totale/$numero_operai)/60, 2). " h";

echo " 	<div class = 'container-badge-footer'>";
echo "	<div class='box-record'>";
echo "	<div class='testata-ore'>Record Estratti</div>";
echo "	<div class='totale-ore'><span class='badge-home-ore badge-default-ore badge-pill-ore'>$count</span></div>";
echo "	</div>";

echo "	<div class='box-tlav'>";
echo "	<div class='testata-ore'>Totale Ore Vendute</div>";
echo "	<div class='totale-ore'><span class='badge-home-ore badge-default-ore badge-pill-ore'>$tempo_totale</span></div>";
echo "	</div>";

echo "	<div class='box-oreoperai'>";
echo "	<div class='testata-ore'>Ore Vendute per 5 operai</div>";
echo "	<div class='totale-ore'><span class='badge-home-ore badge-default-ore badge-pill-ore'>$ore_operai</span></div>";
echo "	</div>";
echo "  </div>";
?>