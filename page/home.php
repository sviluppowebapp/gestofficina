<?php
date_default_timezone_set('Europe/Rome');
$today = date("Y-m-d");
?>

<br />

<?php
$sq1 = "SELECT * FROM appuntamenti WHERE data = '$today' AND stato_pren = 'ATTESA ACCETTAZIONE' and tipo_pren = 'PRIVATO' ORDER BY id_app ASC";
$rs1 = $mysqli->query($sq1);
$cnt1 = mysqli_num_rows($rs1);

$sq2 = "SELECT * FROM appuntamenti WHERE data = '$today' AND stato_pren = 'LAVORAZIONE' and tipo_pren = 'PRIVATO' ORDER BY id_app ASC";
$rs2 = $mysqli->query($sq2);
$cnt2 = mysqli_num_rows($rs2);

$sq3 = "SELECT * FROM appuntamenti WHERE data = '$today' AND stato_pren = 'TERMINATO' and tipo_pren = 'PRIVATO' ORDER BY id_app ASC";
$rs3 = $mysqli->query($sq3);
$cnt3 = mysqli_num_rows($rs3);
?>

<div class="container-home">

<div class="row">
	  <div class="col-sm-3">
			<div class="card">
			  <div class="card-block">
			  	<div class="box-interventi">
					<div class="alert alert-success-home" role="alert"><h2><b>PRIVATI APPUNTAMENTI OGGI</b></h2></div>
					<ul class="list-group">
						<li class="list-group-item justify-content-between">Attesa Accettazione: <a href="index.php?page=lista_appuntamenti_oggi&tipo=accettazione&cliente=privato"><span class="badge-home badge-default badge-pill"><?= $cnt1 ?></span></a></li>
						<li class="list-group-item justify-content-between">In lavorazione: <a href="index.php?page=lista_appuntamenti_oggi&tipo=lavorazione&cliente=privato"><span class="badge-home badge-default badge-pill"><?= $cnt2 ?></span></a></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

<?php
$sq4 = "SELECT * FROM appuntamenti WHERE data = '$today' AND stato_pren = 'ATTESA ACCETTAZIONE' and tipo_pren = 'noleggio' ORDER BY id_app ASC";
$rs4 = $mysqli->query($sq4);
$cnt4 = mysqli_num_rows($rs4);

$sq5 = "SELECT * FROM appuntamenti WHERE data = '$today' AND stato_pren = 'LAVORAZIONE' and tipo_pren = 'noleggio' ORDER BY id_app ASC";
$rs5 = $mysqli->query($sq5);
$cnt5 = mysqli_num_rows($rs5);

$sq6 = "SELECT * FROM appuntamenti WHERE data = '$today' AND stato_pren = 'TERMINATO' and tipo_pren = 'noleggio' ORDER BY id_app ASC";
$rs6 = $mysqli->query($sq6);
$cnt6 = mysqli_num_rows($rs6);

?>
		<div class="col-sm-3">
			<div class="card">
      			<div class="card-block">
	  				<div class="box-interventi">
        				<div class="alert alert-success-home" role="alert"><h2><b>NOLEGGIO APPUNTAMENTI OGGI</b></h2></div>
						<ul class="list-group">
							<li class="list-group-item justify-content-between">Attesa Accettazione: <a href="index.php?page=lista_appuntamenti_oggi&tipo=accettazione&cliente=noleggio"><span class="badge-home badge-default badge-pill"><?= $cnt4 ?></span></a></li>
							<li class="list-group-item justify-content-between">In lavorazione: <a href="index.php?page=lista_appuntamenti_oggi&tipo=lavorazione&cliente=noleggio"><span class="badge-home badge-default badge-pill"><?= $cnt5 ?></span></a></li>
						</ul>
      				</div>
    			</div>
			</div>
		</div>

<?php
$sq7 = "SELECT * FROM appuntamenti WHERE stato_pren = 'ATTESA ACCETTAZIONE' and tipo_pren = 'privato' ORDER BY id_app ASC";
$rs7 = $mysqli->query($sq7);
$cnt7 = mysqli_num_rows($rs7);

$sq8 = "SELECT * FROM appuntamenti WHERE stato_pren = 'LAVORAZIONE' and tipo_pren = 'privato' ORDER BY id_app ASC";
$rs8 = $mysqli->query($sq8);
$cnt8 = mysqli_num_rows($rs8);

$sq9 = "SELECT * FROM appuntamenti WHERE stato_pren = 'TERMINATO' and tipo_pren = 'privato' ORDER BY id_app ASC";
$rs9 = $mysqli->query($sq9);
$cnt9 = mysqli_num_rows($rs9);

?>

		<div class="col-sm-3">
			<div class="card">
		  		<div class="card-block">
		  			<div class="box-interventi">
					<div class="alert alert-warning-home" role="alert"><h2><b>PRIVATI APPUNTAMENTI TOTALI</b></h2></div>
					<ul class="list-group">
						<li class="list-group-item justify-content-between">Attesa Accettazione: <a href="index.php?page=appuntamenti_privati&tipo=accettazione"><span class="badge-home badge-default badge-pill"><?= $cnt7 ?></span></a></li>
						<li class="list-group-item justify-content-between">In lavorazione: <a href="index.php?page=appuntamenti_privati&tipo=lavorazione"><span class="badge-home badge-default badge-pill"><?= $cnt8 ?></span></a></li>
					</ul>
					</div>
				</div>
			</div>
		</div>

<?php
$sq10 = "SELECT * FROM appuntamenti WHERE stato_pren = 'ATTESA ACCETTAZIONE' and tipo_pren = 'noleggio' ORDER BY id_app ASC";
$rs10 = $mysqli->query($sq10);
$cnt10 = mysqli_num_rows($rs10);

$sq11 = "SELECT * FROM appuntamenti WHERE stato_pren = 'LAVORAZIONE' and tipo_pren = 'noleggio' ORDER BY id_app ASC";
$rs11 = $mysqli->query($sq11);
$cnt11 = mysqli_num_rows($rs11);

$sq12 = "SELECT * FROM appuntamenti WHERE stato_pren = 'TERMINATO' and tipo_pren = 'noleggio' ORDER BY id_app ASC";
$rs12 = $mysqli->query($sq12);
$cnt12 = mysqli_num_rows($rs12);
?>

		<div class="col-sm-3">
			<div class="card">
		  		<div class="card-block">
		  			<div class="box-interventi">
					<div class="alert alert-warning-home" role="alert"><h2><b>NOLEGGIO APPUNTAMENTI TOTALI</b></h2></div>
				<ul class="list-group">
				<li class="list-group-item justify-content-between">Attesa Accettazione: <a href="index.php?page=appuntamenti_noleggio&tipo=accettazione"><span class="badge-home badge-default badge-pill"><?= $cnt10 ?></span></a></li>
				<li class="list-group-item justify-content-between">In lavorazione: <a href="index.php?page=appuntamenti_noleggio&tipo=lavorazione"><span class="badge-home badge-default badge-pill"><?= $cnt11 ?></span></a></li>
			</ul>
		  </div>
		</div>
	  </div>
</div>
	</div><!--Chiudo la prima Row-->



<div class="clear"></div>

        <hr>
		
		<div class="row">
      <div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>GESTIONE COMMESSE</b></div>
					<div class="card-block-home">
						<a href="index.php?page=home_commesse"><img src="icon/gest_comm_64.png"><br/></a>   
					</div>
				</div>
			</div>
			
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>GESTIONE APPUNTAMENTI</b></div>
					<div class="card-block-home">
						<a class="thumbnail" href="index.php?page=home_appuntamenti"><img src="icon/gest_app_64.png"><br/></a>   
					</div>
				</div>
			</div>
			
			
			 <div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>GESTIONE PREVENTIVI</b></div>
					<div class="card-block-home">
						<a href="index.php?page=home_preventivi"><img src="icon/nuovo_preventivo_55.png"><br/></a>  
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>GESTIONE SISTEMA</b></div>
					<div class="card-block-home">
						 <a class="thumbnail" href="index.php?page=home_sistema"><img src="icon/ricerca_commessa_55.png"><br/></a>  
					</div>
				</div>
			</div>
		</div><!--CHIUDO LA RIGA-->
		
		<div class="row">
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>RICERCA COMMESSA</b></div>
					<div class="card-block-home">
						 <a class="thumbnail" href="index.php?page=ricerca_commessa"><img src="icon/ricerca_commessa_55.png"><br/></a>  
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>APPUNTAMENTI OGGI</b></div>
					<div class="card-block-home">
						<a class="thumbnail" href="index.php?page=lista_appuntamenti_oggi&tipo=tutti"><img src="icon/appuntamenti_oggi_55.png"><br/></a>          
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>RICERCA INTERVENTO</b></div>
					<div class="card-block-home">
						<a class="thumbnail" href="index.php?page=ricerca_intervento"><img src="icon/ricerca_intervento_55.png"><br/></a>     
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>REGISTRA PROMEMORIA</b></div>
					<div class="card-block-home">
						<a class="thumbnail" href="http://www.salzanosrl.com/reminders" target="_blank"><img src="icon/promemoria_55.png"><br/></a>        
					</div>
				</div>
			</div>
		</div><!--CHIUDO LA RIGA-->		
		
		<div class="row">
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>LINK DISPOSITIVI ASSICURATIVI</b></div>
					<div class="card-block-home">
						<a class="thumbnail" href="index.php?page=home_dispositivi" target="_blank"><img src="icon/web_55.png"><br/></a>       
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>LINK GESTIONE FLOTTE</b></div>
					<div class="card-block-home">
						<a href="index.php?page=home_flotte" target="_blank"><img width="55" heigth="55" src="icon/noleggio.jpeg" class="img-responsive"><br/></a>       
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>LINK GESTIONE PNEUMATICI</b></div>
					<div class="card-block-home">
						<a href="index.php?page=home_pneus" target="_blank"><img width="55" heigth="55" src="icon/pneusico.png" class="img-responsive"><br/></a>       
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>NOLEGGIO</b></div>
					<div class="card-block-home">
						<a href="index.php?page=home_noleggio" target="_blank"><img width="55" heigth="55" src="icon/scnoleggio.jpg" class="img-responsive"><br/></a>       
					</div>
				</div>
			</div>	
			</div><!--CHIUDO LA RIGA-->

			<div class="row">
			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>RUBRICA</b></div>
					<div class="card-block-home">
						<a href="../gos/rubrica/index.php" target="_blank"><img width="55" heigth="55" src="icon/rubrica.jpg" class="img-responsive"><br/></a>       
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-home">
				<div class="card-header-home"><b>ESCI</b></div>
					<div class="card-block-home">
						<a class="thumbnail" href="logout.php" onclick="return confirm('Confermi di voler uscire dal sistema ?')"><img src="icon/logout_55.png"><br/></a>       
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
			</div>
			
			<div class="col-sm-3">
			</div>	
			</div><!--CHIUDO LA RIGA-->
			</div><!--CHIUDO IL CONTAINER-->