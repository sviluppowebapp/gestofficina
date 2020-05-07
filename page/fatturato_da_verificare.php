<?php

/*SCRIVO LA QUERY per GENNAIO*/ 
$gennaio16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-01-01') AND ('2016-12-31')";
$rs_gennaio16 = $mysqli->query($gennaio16);
$fatt_gennaio16 = mysqli_fetch_assoc($rs_gennaio16);

$gennaio17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-01-01') AND ('2017-12-31')";
$rs_gennaio17 = $mysqli->query($gennaio17);
$fatt_gennaio17 = mysqli_fetch_assoc($rs_gennaio17);

$gennaio18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-01-01') AND ('2018-12-31')";
$rs_gennaio18 = $mysqli->query($gennaio18);
$fatt_gennaio18 = mysqli_fetch_assoc($rs_gennaio18);

$gennaio19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-01-01') AND ('2019-12-31')";
$rs_gennaio19 = $mysqli->query($gennaio19);
$fatt_gennaio19 = mysqli_fetch_assoc($rs_gennaio19);

$gennaio20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-01-01') AND ('2020-12-31')";
$rs_gennaio20 = $mysqli->query($gennaio20);
$fatt_gennaio20 = mysqli_fetch_assoc($rs_gennaio20);

/*SCRIVO LA QUERY per FEBBRAIO*/ 
$febbraio16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-02-01') AND ('2016-12-31')";
$rs_febbraio16 = $mysqli->query($febbraio16);
$fatt_febbraio16 = mysqli_fetch_assoc($rs_febbraio16);

$febbraio17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-02-01') AND ('2017-12-31')";
$rs_febbraio17 = $mysqli->query($febbraio17);
$fatt_febbraio17 = mysqli_fetch_assoc($rs_febbraio17);

$febbraio18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-02-01') AND ('2018-12-31')";
$rs_febbraio18 = $mysqli->query($febbraio18);
$fatt_febbraio18 = mysqli_fetch_assoc($rs_febbraio18);

$febbraio19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-02-01') AND ('2019-12-31')";
$rs_febbraio19 = $mysqli->query($febbraio19);
$fatt_febbraio19 = mysqli_fetch_assoc($rs_febbraio19);

$febbraio20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-02-01') AND ('2020-12-31')";
$rs_febbraio20 = $mysqli->query($febbraio20);
$fatt_febbraio20 = mysqli_fetch_assoc($rs_febbraio20);

/*SCRIVO LA QUERY per MARZO*/ 
$marzo16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-03-01') AND ('2016-12-31')";
$rs_marzo16 = $mysqli->query($marzo16);
$fatt_marzo16 = mysqli_fetch_assoc($rs_marzo16);

$marzo17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-03-01') AND ('2017-12-31')";
$rs_marzo17 = $mysqli->query($marzo17);
$fatt_marzo17 = mysqli_fetch_assoc($rs_marzo17);

$marzo18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-03-01') AND ('2018-12-31')";
$rs_marzo18 = $mysqli->query($marzo18);
$fatt_marzo18 = mysqli_fetch_assoc($rs_marzo18);

$marzo19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-03-01') AND ('2019-12-31')";
$rs_marzo19 = $mysqli->query($marzo19);
$fatt_marzo19 = mysqli_fetch_assoc($rs_marzo19);

$marzo20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-03-01') AND ('2020-12-31')";
$rs_marzo20 = $mysqli->query($marzo20);
$fatt_marzo20 = mysqli_fetch_assoc($rs_marzo20);

/*SCRIVO LA QUERY per APRILE*/ 
$aprile16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-04-01') AND ('2016-12-31')";
$rs_aprile16 = $mysqli->query($aprile16);
$fatt_aprile16 = mysqli_fetch_assoc($rs_aprile16);

$aprile17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-04-01') AND ('2017-12-31')";
$rs_aprile17 = $mysqli->query($aprile17);
$fatt_aprile17 = mysqli_fetch_assoc($rs_aprile17);

$aprile18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-04-01') AND ('2018-12-31')";
$rs_aprile18 = $mysqli->query($aprile18);
$fatt_aprile18 = mysqli_fetch_assoc($rs_aprile18);

$aprile19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-04-01') AND ('2019-12-31')";
$rs_aprile19 = $mysqli->query($aprile19);
$fatt_aprile19 = mysqli_fetch_assoc($rs_aprile19);

$aprile20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-04-01') AND ('2020-12-31')";
$rs_aprile20 = $mysqli->query($aprile20);
$fatt_aprile20 = mysqli_fetch_assoc($rs_aprile20);

/*SCRIVO LA QUERY per MAGGIO*/ 
$maggio16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-05-01') AND ('2016-12-31')";
$rs_maggio16 = $mysqli->query($maggio16);
$fatt_maggio16 = mysqli_fetch_assoc($rs_maggio16);

$maggio17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-05-01') AND ('2017-12-31')";
$rs_maggio17 = $mysqli->query($maggio17);
$fatt_maggio17 = mysqli_fetch_assoc($rs_maggio17);

$maggio18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-05-01') AND ('2018-12-31')";
$rs_maggio18 = $mysqli->query($maggio18);
$fatt_maggio18 = mysqli_fetch_assoc($rs_maggio18);

$maggio19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-05-01') AND ('2019-12-31')";
$rs_maggio19 = $mysqli->query($maggio19);
$fatt_maggio19 = mysqli_fetch_assoc($rs_maggio19);

$maggio20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-05-01') AND ('2020-12-31')";
$rs_maggio20 = $mysqli->query($maggio20);
$fatt_maggio20 = mysqli_fetch_assoc($rs_maggio20);

/*SCRIVO LA QUERY per GIUGNO*/ 
$giugno16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-06-01') AND ('2016-12-31')";
$rs_giugno16 = $mysqli->query($giugno16);
$fatt_giugno16 = mysqli_fetch_assoc($rs_giugno16);

$giugno17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-06-01') AND ('2017-12-31')";
$rs_giugno17 = $mysqli->query($giugno17);
$fatt_giugno17 = mysqli_fetch_assoc($rs_giugno17);

$giugno18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-06-01') AND ('2018-12-31')";
$rs_giugno18 = $mysqli->query($giugno18);
$fatt_giugno18 = mysqli_fetch_assoc($rs_giugno18);

$giugno19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-06-01') AND ('2019-12-31')";
$rs_giugno19 = $mysqli->query($giugno19);
$fatt_giugno19 = mysqli_fetch_assoc($rs_giugno19);

$giugno20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-06-01') AND ('2020-12-31')";
$rs_giugno20 = $mysqli->query($giugno20);
$fatt_giugno20 = mysqli_fetch_assoc($rs_giugno20);

/*SCRIVO LA QUERY per LUGLIO*/ 
$luglio16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-07-01') AND ('2016-12-31')";
$rs_luglio16 = $mysqli->query($luglio16);
$fatt_luglio16 = mysqli_fetch_assoc($rs_luglio16);

$luglio17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-07-01') AND ('2017-12-31')";
$rs_luglio17 = $mysqli->query($luglio17);
$fatt_luglio17 = mysqli_fetch_assoc($rs_luglio17);

$luglio18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-07-01') AND ('2018-12-31')";
$rs_luglio18 = $mysqli->query($luglio18);
$fatt_luglio18 = mysqli_fetch_assoc($rs_luglio18);

$luglio19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-07-01') AND ('2019-12-31')";
$rs_luglio19 = $mysqli->query($luglio19);
$fatt_luglio19 = mysqli_fetch_assoc($rs_luglio19);

$luglio20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-07-01') AND ('2020-12-31')";
$rs_luglio20 = $mysqli->query($luglio20);
$fatt_luglio20 = mysqli_fetch_assoc($rs_luglio20);

/*SCRIVO LA QUERY per AGOSTO*/ 
$agosto16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-08-01') AND ('2016-12-31')";
$rs_agosto16 = $mysqli->query($agosto16);
$fatt_agosto16 = mysqli_fetch_assoc($rs_agosto16);

$agosto17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-08-01') AND ('2017-12-31')";
$rs_agosto17 = $mysqli->query($agosto17);
$fatt_agosto17 = mysqli_fetch_assoc($rs_agosto17);

$agosto18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-08-01') AND ('2018-12-31')";
$rs_agosto18 = $mysqli->query($agosto18);
$fatt_agosto18 = mysqli_fetch_assoc($rs_agosto18);

$agosto19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-08-01') AND ('2019-12-31')";
$rs_agosto19 = $mysqli->query($agosto19);
$fatt_agosto19 = mysqli_fetch_assoc($rs_agosto19);

$agosto20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-08-01') AND ('2020-12-31')";
$rs_agosto20 = $mysqli->query($agosto20);
$fatt_agosto20 = mysqli_fetch_assoc($rs_agosto20);

/*SCRIVO LA QUERY per SETTEMBRE*/ 
$settembre16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-09-01') AND ('2016-12-31')";
$rs_settembre16 = $mysqli->query($settembre16);
$fatt_settembre16 = mysqli_fetch_assoc($rs_settembre16);

$settembre17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-09-01') AND ('2017-12-31')";
$rs_settembre17 = $mysqli->query($settembre17);
$fatt_settembre17 = mysqli_fetch_assoc($rs_settembre17);

$settembre18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-09-01') AND ('2018-12-31')";
$rs_settembre18 = $mysqli->query($settembre18);
$fatt_settembre18 = mysqli_fetch_assoc($rs_settembre18);

$settembre19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-09-01') AND ('2019-12-31')";
$rs_settembre19 = $mysqli->query($settembre19);
$fatt_settembre19 = mysqli_fetch_assoc($rs_settembre19);

$settembre20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-09-01') AND ('2020-12-31')";
$rs_settembre20 = $mysqli->query($settembre20);
$fatt_settembre20 = mysqli_fetch_assoc($rs_settembre20);

/*SCRIVO LA QUERY per OTTOBRE*/ 
$ottobre16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-10-01') AND ('2016-12-31')";
$rs_ottobre16 = $mysqli->query($ottobre16);
$fatt_ottobre16 = mysqli_fetch_assoc($rs_ottobre16);

$ottobre17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-10-01') AND ('2017-12-31')";
$rs_ottobre17 = $mysqli->query($ottobre17);
$fatt_ottobre17 = mysqli_fetch_assoc($rs_ottobre17);

$ottobre18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-10-01') AND ('2018-12-31')";
$rs_ottobre18 = $mysqli->query($ottobre18);
$fatt_ottobre18 = mysqli_fetch_assoc($rs_ottobre18);

$ottobre19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-10-01') AND ('2019-12-31')";
$rs_ottobre19 = $mysqli->query($ottobre19);
$fatt_ottobre19 = mysqli_fetch_assoc($rs_ottobre19);

$ottobre20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-10-01') AND ('2020-12-31')";
$rs_ottobre20 = $mysqli->query($ottobre20);
$fatt_ottobre20 = mysqli_fetch_assoc($rs_ottobre20);

/*SCRIVO LA QUERY per NOVEMBRE*/ 
$novembre16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-11-01') AND ('2016-12-31')";
$rs_novembre16 = $mysqli->query($novembre16);
$fatt_novembre16 = mysqli_fetch_assoc($rs_novembre16);

$novembre17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-11-01') AND ('2017-12-31')";
$rs_novembre17 = $mysqli->query($novembre17);
$fatt_novembre17 = mysqli_fetch_assoc($rs_novembre17);

$novembre18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-11-01') AND ('2018-12-31')";
$rs_novembre18 = $mysqli->query($novembre18);
$fatt_novembre18 = mysqli_fetch_assoc($rs_novembre18);

$novembre19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-11-01') AND ('2019-12-31')";
$rs_novembre19 = $mysqli->query($novembre19);
$fatt_novembre19 = mysqli_fetch_assoc($rs_novembre19);

$novembre20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-11-01') AND ('2020-12-31')";
$rs_novembre20 = $mysqli->query($novembre20);
$fatt_novembre20 = mysqli_fetch_assoc($rs_novembre20);

/*SCRIVO LA QUERY per DICEMBRE*/ 
$dicembre16 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2016-12-01') AND ('2016-12-31')";
$rs_dicembre16 = $mysqli->query($dicembre16);
$fatt_dicembre16 = mysqli_fetch_assoc($rs_dicembre16);

$dicembre17 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2017-12-01') AND ('2017-12-31')";
$rs_dicembre17 = $mysqli->query($dicembre17);
$fatt_dicembre17 = mysqli_fetch_assoc($rs_dicembre17);

$dicembre18 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2018-12-01') AND ('2018-12-31')";
$rs_dicembre18 = $mysqli->query($dicembre18);
$fatt_dicembre18 = mysqli_fetch_assoc($rs_dicembre18);

$dicembre19 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2019-12-01') AND ('2019-12-31')";
$rs_dicembre19 = $mysqli->query($dicembre19);
$fatt_dicembre19 = mysqli_fetch_assoc($rs_dicembre19);

$dicembre20 = "SELECT SUM(totale) FROM commesse WHERE data BETWEEN ('2020-12-01') AND ('2020-12-31')";
$rs_dicembre20 = $mysqli->query($dicembre20);
$fatt_dicembre20 = mysqli_fetch_assoc($rs_dicembre20);

?>

<!--Apro html ed inserisco i bottoni Nuovo Appuntamento | Nuova Commessa | Stampa Modulo Privacy | Aggiorna Pagina-->
<style>
.container-menu-superiore{
	background-color:#F2F2F2;
	padding: 10px;
	text-align:center;
  width: 100%;
  margin:15px;
}
</style>

<div class = "container-menu-superiore">
	<div class ="row">
  	<div class="col-sm-3">
			
		</div>

		<div class="col-sm-3">
			
		</div>
		
		<div class="col-sm-3">
			
		</div>
		
		<div class="col-sm-3">
			<button onclick="window.location.reload();" class="btn btn-outline-warning">Aggiorna la pagina</button>
		</div>
	</div>
</div>


<?php

echo"
<table class='table table-striped > fatturato'>
  <thead>
    <tr>
      <th scope='col'></th>
      <th class='text-center > intestazione_fatturato' scope='col'>
        Incasso<br>
        2016
      </th>

      <th class='text-center > intestazione_fatturato' scope='col'>
        Incasso<br>
        2017
      </th>

      <th class='text-center > intestazione_fatturato' scope='col'>
        Incasso<br>
        2018
      </th>

      <th class='text-center > intestazione_fatturato' scope='col'>
        Incasso<br>
        2019
      </th>

      <th class='text-center > intestazione_fatturato' scope='col'>
        Incasso<br>
        2020
      </th>
    </tr>
  </thead>

  <tbody>

    <tr>
      <th class='text-nowrap' scope='row'>Gennaio</th>
      <td>€ {$fatt_gennaio16['SUM(totale)']}</td>
      <td>€ {$fatt_gennaio17['SUM(totale)']}</td>
      <td>€ {$fatt_gennaio18['SUM(totale)']}</td>
      <td>€ {$fatt_gennaio19['SUM(totale)']}</td>
      <td>€ {$fatt_gennaio20['SUM(totale)']}</td>
    </tr>

    <tr>
      <th class='text-nowrap' scope='row'>Febbraio</th>
      <td>€ {$fatt_febbraio16['SUM(totale)']}</td>
      <td>€ {$fatt_febbraio17['SUM(totale)']}</td>
      <td>€ {$fatt_febbraio18['SUM(totale)']}</td>
      <td>€ {$fatt_febbraio19['SUM(totale)']}</td>
      <td>€ {$fatt_febbraio20['SUM(totale)']}</td>
    </tr>

    <tr>
      <th class='text-nowrap' scope='row'>Marzo</th>
      <td>€ {$fatt_marzo16['SUM(totale)']}</td>
      <td>€ {$fatt_marzo17['SUM(totale)']}</td>
      <td>€ {$fatt_marzo18['SUM(totale)']}</td>
      <td>€ {$fatt_marzo19['SUM(totale)']}</td>
      <td>€ {$fatt_marzo20['SUM(totale)']}</td>
    </tr>

    <tr>
      <th class='text-nowrap' scope='row'>Aprile</th>
      <td>€ {$fatt_aprile16['SUM(totale)']}</td>
      <td>€ {$fatt_aprile17['SUM(totale)']}</td>
      <td>€ {$fatt_aprile18['SUM(totale)']}</td>
      <td>€ {$fatt_aprile19['SUM(totale)']}</td>
      <td>€ {$fatt_aprile20['SUM(totale)']}</td>
    </tr>

    <tr>
      <th class='text-nowrap' scope='row'>Maggio</th>
      <td>€ {$fatt_maggio16['SUM(totale)']}</td>
      <td>€ {$fatt_maggio17['SUM(totale)']}</td>
      <td>€ {$fatt_maggio18['SUM(totale)']}</td>
      <td>€ {$fatt_maggio19['SUM(totale)']}</td>
      <td>€ {$fatt_maggio20['SUM(totale)']}</td>
    </tr>

    <tr>
      <th class='text-nowrap' scope='row'>Giugno</th>
      <td>€ {$fatt_giugno16['SUM(totale)']}</td>
      <td>€ {$fatt_giugno17['SUM(totale)']}</td>
      <td>€ {$fatt_giugno18['SUM(totale)']}</td>
      <td>€ {$fatt_giugno19['SUM(totale)']}</td>
      <td>€ {$fatt_giugno20['SUM(totale)']}</td>
    </tr>

    <tr>
    <th class='text-nowrap' scope='row'>Luglio</th>
      <td>€ {$fatt_luglio16['SUM(totale)']}</td>
      <td>€ {$fatt_luglio17['SUM(totale)']}</td>
      <td>€ {$fatt_luglio18['SUM(totale)']}</td>
      <td>€ {$fatt_luglio19['SUM(totale)']}</td>
      <td>€ {$fatt_luglio20['SUM(totale)']}</td>
    </tr>

    <th class='text-nowrap' scope='row'>Agosto</th>
      <td>€ {$fatt_agosto16['SUM(totale)']}</td>
      <td>€ {$fatt_agosto17['SUM(totale)']}</td>
      <td>€ {$fatt_agosto18['SUM(totale)']}</td>
      <td>€ {$fatt_agosto19['SUM(totale)']}</td>
      <td>€ {$fatt_agosto20['SUM(totale)']}</td>
    </tr>

    <th class='text-nowrap' scope='row'>Settembre</th>
      <td>€ {$fatt_settembre16['SUM(totale)']}</td>
      <td>€ {$fatt_settembre17['SUM(totale)']}</td>
      <td>€ {$fatt_settembre18['SUM(totale)']}</td>
      <td>€ {$fatt_settembre19['SUM(totale)']}</td>
      <td>€ {$fatt_settembre20['SUM(totale)']}</td>
    </tr>

    <th class='text-nowrap' scope='row'>Ottobre</th>
      <td>€ {$fatt_ottobre16['SUM(totale)']}</td>
      <td>€ {$fatt_ottobre17['SUM(totale)']}</td>
      <td>€ {$fatt_ottobre18['SUM(totale)']}</td>
      <td>€ {$fatt_ottobre19['SUM(totale)']}</td>
      <td>€ {$fatt_ottobre20['SUM(totale)']}</td>
    </tr>

    <th class='text-nowrap' scope='row'>Novembre</th>
      <td>€ {$fatt_novembre16['SUM(totale)']}</td>
      <td>€ {$fatt_novembre17['SUM(totale)']}</td>
      <td>€ {$fatt_novembre18['SUM(totale)']}</td>
      <td>€ {$fatt_novembre19['SUM(totale)']}</td>
      <td>€ {$fatt_novembre20['SUM(totale)']}</td>
    </tr>

    <th class='text-nowrap' scope='row'>Dicembre</th>
      <td>€ {$fatt_dicembre16['SUM(totale)']}</td>
      <td>€ {$fatt_dicembre17['SUM(totale)']}</td>
      <td>€ {$fatt_dicembre18['SUM(totale)']}</td>
      <td>€ {$fatt_dicembre19['SUM(totale)']}</td>
      <td>€ {$fatt_dicembre20['SUM(totale)']}</td>
    </tr>
  </tbody>";
echo"</table>";  
?>