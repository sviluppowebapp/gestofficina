<?php
date_default_timezone_set('Europe/Rome');
require_once('function/date_day.php');

$numero_operai=5;
$oggi = date('Y-m-d');
$totale=0;
$orar=" ore <br>";
$minuti=" minuti";
$congiunzione="&";


if (isset($_GET['id_app'])) {
$id_app = (int)$_GET['id_app'];
$sq2 = "SELECT * FROM appuntamenti WHERE id_app = '$id_app'";
$rs2 = $mysqli->query($sq2);

}else{

$sq2 = "SELECT * FROM appuntamenti ORDER BY data";
$rs2 = $mysqli->query($sq2);
}

echo "<br />";

echo "<div class ='container-appuntamento'>";
echo "<table class='table table-striped table-responsive'>";
echo "<tr>";
echo "<th style='color:green'>Data <br>Appuntamento</th>";
echo "<th style='color:green'>Ora <br>Appuntamento</th>";
echo "<th style='color:green'>Cliente</th>";
echo "<th style='color:green'>Tempi di lavorazione<br>previsti</th>";
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

while ($row = $rs2->fetch_array(MYSQLI_ASSOC)) {
$id_app = mysqli_real_escape_string($mysqli, $row['id_app']);
$cliente = mysqli_real_escape_string($mysqli, $row['cliente']);
$data = mysqli_real_escape_string($mysqli, $row['data']);
$ora = mysqli_real_escape_string($mysqli, $row['ora']);
$gestore = mysqli_real_escape_string($mysqli, $row['gestore']);
$veicolo = mysqli_real_escape_string($mysqli, $row['veicolo']);
$tlav = mysqli_real_escape_string($mysqli,$row['tlav']);
$stato_pren = mysqli_real_escape_string($mysqli, $row['stato_pren']);
$tipo_pren = mysqli_real_escape_string($mysqli, $row['tipo_pren']);
$tipo_lavorazione = mysqli_real_escape_string($mysqli, $row['tipo_lavorazione']);
$telefono = mysqli_real_escape_string($mysqli, $row['telefono']);
$note = mysqli_real_escape_string($mysqli, $row['note']);

/* FILTRI e CONVERSIONI SULLE VARIABILI POST */
$cliente = trim(strip_tags(stripslashes($cliente)));
$veicolo = trim(strip_tags(stripslashes($veicolo)));
$note = str_replace('\r\n' , '<br>', $note);
$note = stripslashes($note);
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

if ($tipo_pren == 'NOLEGGIO') { $tnol = 'tip-pren-noleggio'; }
if ($tipo_pren == 'PRIVATO') { $tnol = 'tip-pren-privato'; }

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
<td class='<?= $stylecliente='stylecliente'; ?>'><?php echo $cliente; ?></td>
<td class='<?= $tlavcss='tlavcss'; ?>'><?php echo ($tlav == 0 ? "N.D" : $ore. "".$orar. " ".$minuto. "" .$minuti); ?></td>
<td><?php echo $telefono; ?></td>
<td><?php echo $gestore; ?></td>
<td><?php echo $veicolo; ?></td>
<td class='<?= $tnol; ?>'><?php echo $tipo_pren; ?></td>
<td class='<?= $lav; ?>'><?php echo $tipo_lavorazione; ?></td>
<td class='<?= $classe; ?>'><?php echo $stato_pren; ?></td>
<td><?php echo $note; ?></td>
<td><?php echo "<a href='index.php?page=aggiorna_appuntamento&id_app=$id_app' target='_blank'><img src='images/edit.png' alt=''></a>"; ?></td>
<td><?php echo "<a href='pdf_appuntamento.php?id_app=$id_app' target='_blank'><img src='images/print.png' alt='Stampa'></a>"; ?></td>
</tr>

<?php
$totale+=$tlav;
}
echo "</table>";
echo "</div>";

$tempo_totale = floor($totale / 60)."h ".($totale % 60)."m ";
$ore_operai = round(($totale/$numero_operai)/60, 2). " h";


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
?>
