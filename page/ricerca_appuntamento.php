<?php
date_default_timezone_set('Europe/Rome');
require_once('function/date_day.php');


/*DICHIARO LE VARIABILI CHE UTILIZZERO'*/
$numero_operai=5;
$oggi = date('Y-m-d');
$totale=0;
$orar=" ore <br>";
$minuti=" minuti";
$congiunzione="&";


if (isset($_POST['submit'])) {

if(isset($_POST['veicolo'])){$veicolo = mysqli_real_escape_string($mysqli, $_POST['veicolo']);}else{$veicolo ="";}
if(isset($_POST['data'])){$data = mysqli_real_escape_string($mysqli, $_POST['data']);}else{$data ="";}
if(isset($_POST['ora'])){$ora = mysqli_real_escape_string($mysqli, $_POST['ora']);}else{$ora ="";}
if(isset($_POST['cliente'])){$cliente = mysqli_real_escape_string($mysqli, $_POST['cliente']);}else{$cliente ="";}
if(isset($_POST['tlav'])){$tlav = mysqli_real_escape_string($mysqli, $_POST['tlav']);}else{$tlav ="";}
if(isset($_POST['telefono'])){$telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);}else{$telefono ="";}
if(isset($_POST['gestore'])){$gestore = mysqli_real_escape_string($mysqli, $_POST['gestore']);}else{$gestore ="";}
if(isset($_POST['tipo_pren'])){$tipo_pren = mysqli_real_escape_string($mysqli, $_POST['tipo_pren']);}else{$tipo_pren ="";}
if(isset($_POST['tipo_lavorazione'])){$tipo_lavorazione = mysqli_real_escape_string($mysqli, $_POST['tipo_lavorazione']);}else{$tipo_lavorazione ="";}
if(isset($_POST['stato_pren'])){$stato_pren = mysqli_real_escape_string($mysqli, $_POST['stato_pren']);}else{$stato_pren ="";}
if(isset($_POST['note'])){$note = mysqli_real_escape_string($mysqli, $_POST['note']);}else{$note ="";}
if(isset($_POST['data_da'])){$data_da = mysqli_real_escape_string($mysqli, $_POST['data_da']);}else{$data_da ="";}
if(isset($_POST['data_a'])){$data_a = mysqli_real_escape_string($mysqli, $_POST['data_a']);}else{$data_a ="";}

$query = "SELECT *, DATE_FORMAT(appuntamenti.data,'%d/%m/%Y') as data_it FROM appuntamenti WHERE 1=1";

if (!empty($cliente)) {
    $query .= " AND `cliente` LIKE '%$cliente%'";
}

if (!empty($tlav)) {
    $query .= " AND `tlav` LIKE '%$tlav%'";
}

if (!empty($veicolo)) {
    $query .= " AND `veicolo` LIKE '%$veicolo%'";
}

if (!empty($gestore)) {
    $query .= " AND `gestore` LIKE '%$gestore%'";
}

if (!empty($data)) {
    $query .= " AND `data` = STR_TO_DATE('$data', '%d/%m/%Y') ";
}

if (!empty($ora)) {
    $query .= " AND `ora` = date('$ora', 'H:i')";
}

if (!empty($stato_pren)) {
    $query .= " AND `stato_pren` = '$stato_pren'";
}

if (!empty($tipo_pren)) {
    $query .= " AND `tipo_pren` = '$tipo_pren'";
}

if (!empty($tipo_lavorazione)) {
    $query .= " AND `tipo_lavorazione` = '$tipo_lavorazione'";
}

if (!empty($telefono)) {
    $query .= " AND `telefono` LIKE '%$telefono%'";
}

if (!empty($note)) {
    $query .= " AND `note` LIKE '%$note%'";
}

if (!empty($data_da)) {
    $query .= " AND `data` BETWEEN  STR_TO_DATE('$data_da', '%d/%m/%Y') AND STR_TO_DATE('$data_a', '%d/%m/%Y')";
}

$query .= " ORDER BY data ASC, ora ASC";
$rs = $mysqli->query($query);
$count = mysqli_num_rows($rs);

if (trim($_POST['cliente']) == '' && trim($_POST['veicolo']) == '' && trim($_POST['gestore']) == '' && trim($_POST['data']) == '' && trim($_POST['ora']) == '' && trim($_POST['stato_pren']) == '' && trim($_POST['tipo_pren']) == '' && trim($_POST['tipo_lavorazione']) == '' && trim($_POST['telefono']) == '' && trim($_POST['note']) == '' && trim($_POST['data_da']) == '')
{
    //REINDIRIZZO L'UTENTE AL MESSAGGIO DI ERRORE ATTENZIONE COMPILA ALMENO UN CAMPO
	echo "<div class = 'container-ricerca-nulla'>";
	echo "<div class ='row'><p class='btn btn-warning center-button'>Nessun valore di ricerca inserito</div>";
    echo "<br />";
    echo "<div class ='row'><p class='btn btn-success center-button'><a href='index.php?page=ricerca_appuntamento'>Effettua una nuova ricerca</a></p></div>";
    echo "</div>";
}

elseif ($count == 0) {

	echo "<div class = 'container-ricerca-nulla'>";
	echo "<div class ='row'><p class='btn btn-warning center-button'>Non ci sono appuntamenti con i criteri ricercati</p></div>";
	echo "</div>";

}else{

echo "<div class ='container-appuntamento'>";
echo "<table class='table table-striped table-responsive'>";
echo "<tr>";
echo "<th style='color:green'>Data</th>";
echo "<th style='color:green'>Ora</th>";
echo "<th style='color:green'>Cliente</th>";
echo "<th style='color:green'>Tempi di lavorazione<br>previsti</th>";
echo "<th style='color:green'>Telefono</th>";
echo "<th style='color:green'>Gestore</th>";
echo "<th style='color:green'>Veicolo</th>";
echo "<th style='color:green'>Tipo Pren.</th>";
echo "<th style='color:green'>Tipo Lav.</th>";
echo "<th style='color:green'>Stato Pren.</th>";
echo "<th style='color:green'>Note</th>";
// echo "<th>Nuovo</th>";
echo "<th>Aggiorna</th>";
echo "<th>Stampa</th>";
echo "</tr>";

?>

<!--Apro html ed inserisco i bottoni Nuovo Appuntamento | Nuova Commessa | Stampa Modulo Privacy | Aggiorna Pagina-->

<style>
.container-menu-superiore{
	background-color:#F2F2F2;
	padding: 10px;
	text-align:center;
	
}
</style>

<div class = "container-menu-superiore">
	<div class ="row">

		<div class="col-sm-3">
			<a class="btn btn-outline-success" href="http://192.168.10.30/gos/index.php?page=inserisci_appuntamento" role="button">Nuovo Appuntamento</a>
		</div>

		<div class="col-sm-3">
			<a class="btn btn-outline-success" href="http://192.168.10.30/gos/index.php?page=ricerca_commessa" role="button">Ricerca Commessa</a>
		</div>
		
		<div class="col-sm-3">
			<a class="btn btn-outline-success" href="http://192.168.10.30/gos/privacy/privacy.pdf" target="_blank" role="button">Stampa Privacy</a>
		</div>
		
		<div class="col-sm-3">
			<button onclick="window.location.reload();" class="btn btn-outline-warning">Aggiorna la pagina</button>
		</div>
	</div>
</div>


<?php

while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
$id_app = mysqli_real_escape_string($mysqli, $row['id_app']);
$cliente = mysqli_real_escape_string($mysqli, $row['cliente']);
$tlav = mysqli_real_escape_string($mysqli, $row['tlav']);
$data = mysqli_real_escape_string($mysqli, $row['data']);
$ora = mysqli_real_escape_string($mysqli, $row['ora']);
$gestore = mysqli_real_escape_string($mysqli, $row['gestore']);
$veicolo = mysqli_real_escape_string($mysqli, $row['veicolo']);
$stato_pren = mysqli_real_escape_string($mysqli, $row['stato_pren']);
$tipo_pren = mysqli_real_escape_string($mysqli, $row['tipo_pren']);
$tipo_lavorazione = mysqli_real_escape_string($mysqli, $row['tipo_lavorazione']);
$telefono = mysqli_real_escape_string($mysqli, $row['telefono']);
$note = mysqli_real_escape_string($mysqli, $row['note']);

/* FILTRI e CONVERSIONI SULLE VARIABILI POST */
$cliente = trim(strip_tags(stripslashes($cliente)));
$veicolo = trim(strip_tags(stripslashes($veicolo)));
$note = trim(strip_tags(stripslashes($note)));
$data = strtotime($data);
$data = date('d/m/Y', $data);
/* FINE FILTRI e CONVERSIONI SULLE VARIABILI POST */

if ($stato_pren == 'ATTESA ACCETTAZIONE') { $classe = 'table-danger-rs'; }
if ($stato_pren == 'LAVORAZIONE') { $classe = 'table-warning-rs'; }
if ($stato_pren == 'TERMINATO') { $classe = 'table-success-rs'; }
if ($stato_pren == 'MAI ESEGUITO') { $classe = 'table-danger-maieseguito'; }


if ($tipo_lavorazione == 'MECCANICA') { $lav = 'table-warning-mec'; }
if ($tipo_lavorazione == 'CARROZZERIA') { $lav = 'table-warning-car'; }
if ($tipo_lavorazione == 'PNEUMATICI') { $lav = 'table-warning-pneus'; }

//if ($tipo_pren == 'NOLEGGIO') { $tnol = 'tip-pren-noleggio'; } // Dichiaro la classe 'tip-pren-noleggio' nel file table.css   
//if ($tipo_pren == 'PRIVATO') { $tnol = 'tip-pren-privato'; } // Dichiaro la classe 'tip-pren-privato' nel file table.css

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
<td><b><?php echo data_it($data); ?></b></td>
<td><?php echo $ora; ?></td>
<td class='<?= $stylecliente; ?>'><?php echo $cliente; ?></td>
<td class='<?= $tlavcss='tlavcss'; ?>'><?php echo ($tlav == 0 ? "N.D" : $ore. "".$orar. " ".$minuto. "" .$minuti); ?></td>
<td><?php echo $telefono; ?></td>
<td><?php echo $gestore; ?></td>
<td><?php echo $veicolo; ?></td>
<td class='<?= $tnol; ?>'><?php echo $tipo_pren; ?></td><!--Inserisco la variabile $tnol valorizzata nell'if alla riga 191-->
<td class='<?= $lav; ?>'><?php echo $tipo_lavorazione; ?></td><!--Inserisco la variabile $tnol valorizzata nell'if alla riga 192-->
<td class='<?= $classe; ?>'><?php echo $stato_pren; ?></td><!--Inserisco la variabile $tnol valorizzata nell'if alla riga 181/183-->
<td><?php echo $note; ?></td>
<!--td><?php // echo "<a href='index.php?page=inserisci_appuntamento' target='_blank'><img src='images/add_32.png' alt=''></a>"; ?></td-->
<td><?php echo "<a href='index.php?page=aggiorna_appuntamento&id_app=$id_app' target='_blank'><img src='images/edit.png' alt=''></a>"; ?></td>
<td><?php echo "<a href='pdf_appuntamento.php?id_app=$id_app' target='_blank'><img src='images/print.png' alt='Stampa'></a>"; ?></td>
</tr>

<?php
$totale+=$tlav;
 }
echo "</table>";
echo "</div>";
}
$tempo_totale = floor($totale / 60)."h ".($totale % 60)."m ";
$ore_operai = round(($totale/$numero_operai)/60, 2). " h";

/*Se ci sono appuntamenti mostro il div del totale altrimenti lo nascondo nell'else*/
if (!$count == 0){

echo " 	<div class = 'container-badge-footer'>";
echo "	<div class='box-tlav'>";
echo "	<div class='testata-ore'>Totale Ore Vendute</div>";
echo "	<div class='totale-ore'><span class='badge-home-ore badge-default-ore badge-pill-ore'>$tempo_totale</span></div>";
echo "	</div>";

echo "	<div class='box-oreoperai'>";
echo "	<div class='testata-ore'>Ore Vendute per 5 operai</div>";
echo "	<div class='totale-ore'><span class='badge-home-ore badge-default-ore badge-pill-ore'>$ore_operai</span></div>";
echo "	</div>";
echo "	</div>";
}

elseif ($count == 0){

	/* In questo spazio potrei gestire un box da mostrare nel caso in cui non ci fossero appuntamenti

	echo "	<div class='box-oreoperai'>";
	echo "	<div class='testata-ore'>Esegui una nuova ricerca</div>";
	echo "	<div class='totale-ore'><span class='badge-home-ore badge-default-ore badge-pill-ore'>$ore_operai</span></div>";
	echo "	</div>";
*/
	}
}

else{

?>

<form class="form-inline" method="post" action="">
<div class="form-container">

<div class="card">
  <div class="card-header"><h3><center>RICERCA APPUNTAMENTI NEL DBMS</center></h3></div>
  <div class="card-block">

 <h6><b>Effettua la ricerca in un intervallo di date (Attenzione i campi devono essere entrambi valorizzati)</b></h6>
 <div class="row">

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
				<input type="text" class="form-control" id="datepicker1" name="data_da" placeholder="Intervallo da Data ... ">
			  </div>
		</div>

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
				<input type="text" class="form-control" id="datepicker2" name="data_a" placeholder="A Data ... ">
			  </div>
		</div>

 </div>

 <hr>
 <h6><b>Effettua la ricerca per: Data Appuntamento | Ora Appuntamento | Veicolo</b></h6>
 <div class="row">

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
				<input type="text" class="form-control" id="datepicker" placeholder="Data Appuntamento" name="data">
			  </div>
		</div>

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
				<input type="text" class="form-control timepicker" name="ora" id="timepicker" placeholder="Ora Appuntamento ...">
			  </div>
		</div>

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="veicolo" id="veicolo" placeholder="Veicolo ...">
			  </div>
		</div>

 </div>

 <hr>
 
 <h6><b>Altri parametri utili alla tua ricerca</b></h6>
 <div class="row">

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
				<input type="text" class="form-control" id="cliente" name="cliente" placeholder="Cliente ... " >
			  </div>
		</div>

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
				<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono ...">
			  </div>
		</div>

		<div class="col-md-4">
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
				<input type="text" class="form-control" id="note" name="note" placeholder="Note ...">
			  </div>
		</div>


 </div>

	<div class="row">

		<div class="col-md-4">
			<label class="sr-only" for="stato_pren">Gestore</label>
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
					<select class="form-control" select name="gestore" id="gestore">
						<?php
							$sq1 = "SELECT * FROM gestore ORDER BY gestore ASC";
							$rs1 = $mysqli->query($sq1);
							echo "<option value=''> Gestore </option>";
							while ($row = $rs1->fetch_array(MYSQLI_ASSOC)) {
							$gestore = mysqli_real_escape_string($mysqli, strtoupper($row['gestore']));
							echo "<option value='$gestore'>$gestore</option>";
							}
						?>
						</select>
				</div>

		</div>


		<div class="col-md-4">
			<label class="sr-only" for="stato_pren">Stato Prenotazione</label>
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
					<select class="form-control" select name="stato_pren" id="stato_pren">
						<?php
						$sq3 = "SELECT * FROM stato_prenotazione ORDER BY stato_pren ASC";
								$rs3 = $mysqli->query($sq3);
								echo "<option value=''> Stato Prenotazione ... </option>";
								while ($row = $rs3->fetch_array(MYSQLI_ASSOC)) {
								$stato_pren = mysqli_real_escape_string($mysqli, $row['stato_pren']);
								echo "<option value='$stato_pren'>$stato_pren</option>";
								}
							?>
						</select>
				</div>
		</div>

		<div class="col-md-4">
			<label class="sr-only" for="stato_pren">Tipo Prenotazione</label>
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
					<select class="form-control" select name="tipo_pren" id="tipo_pren">
						<?php
						$sq3 = "SELECT * FROM tipo_prenotazione ORDER BY tipo_pren ASC";
								$rs3 = $mysqli->query($sq3);
								echo "<option value=''> Tipo Prenotazione ... </option>";
								while ($row = $rs3->fetch_array(MYSQLI_ASSOC)) {
								$tipo_pren = mysqli_real_escape_string($mysqli, $row['tipo_pren']);
								echo "<option value='$tipo_pren'>$tipo_pren</option>";
								}
							?>
						</select>
				</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-4">
			<label class="sr-only" for="tipo_lavorazione">Tipo Lavorazione</label>
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
					<select class="form-control" select name="tipo_lavorazione" id="tipo_lavorazione">
						<?php
							$sq4 = "SELECT * FROM tipo_lavorazione ORDER BY tipo_lav ASC";
							$rs4 = $mysqli->query($sq4);
							echo "<option value=''> Tipo lavorazione ... </option>";
							while ($row = $rs4->fetch_array(MYSQLI_ASSOC)) {
							$tipo_lavorazione = mysqli_real_escape_string($mysqli, strtoupper($row['tipo_lav']));
							echo "<option value='$tipo_lavorazione'>$tipo_lavorazione</option>";
							}
						?>
						</select>
				</div>

		</div>

	</div>


</div><!--Close Class Card-->
</div><!--Close Class CardBlock-->

 <div class="text-right">
  <button type="submit" name="submit" class="btn btn-success right">Ricerca Appuntamenti</button>
 </div>

</div><!--Close Container-->
</form><!--Close Form-->

<?php
}
?>
