<?php

echo"
<table class='table table-bordered table-striped'>
  <thead>
    <tr>
      <th scope='col'></th>
      <th class='text-center' scope='col'>
        Incasso<br>
        2016
      </th>
      <th class='text-center' scope='col'>
        Incasso<br>
        2017
      </th>
      <th class='text-center' scope='col'>
        Incasso<br>
        2018
      </th>
      <th class='text-center' scope='col'>
        Incasso<br>
        2019
      </th>
      <th class='text-center' scope='col'>
        Incasso<br>
        2020
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class='text-nowrap' scope='row'>Gennaio</th>
      <td>Qua deve valorizzare Gennaio 2016</td>
    </tr>
    <tr>
      <th class='text-nowrap' scope='row'>Febbraio</th>
      <td>Qua deve valorizzare Febbraio 2016</td>
    </tr>
    <tr>
      <th class='text-nowrap' scope='row'>Marzo</th>
	  <td>Qua deve valorizzare Marzo 2016</td>
    </tr>
    <tr>
      <th class='text-nowrap' scope='row'>Aprile</th>
      <td>Qua deve valorizzare Aprile 2016</td>
    </tr>
    <tr>
      <th class='text-nowrap' scope='row'>Maggio</th>
	  <td>Qua deve valorizzare Maggio 2016</td>
    </tr>
    <tr>
      <th class='text-nowrap' scope='row'>Giugno</th>
	  <td>Qua deve valorizzare Giugno 2016</td>
	</tr>
	<tr>
	<th class='text-nowrap' scope='row'>Luglio</th>
	<td>Qua deve valorizzare Luglio 2016</td>
	</tr>
	<th class='text-nowrap' scope='row'>Agosto</th>
	<td>Qua deve valorizzare Agosto 2016</td>
	</tr>
	<th class='text-nowrap' scope='row'>Settembre</th>
	<td>Qua deve valorizzare Settembre 2016</td>
	</tr>
	<th class='text-nowrap' scope='row'>Ottobre</th>
	<td>Qua deve valorizzare Ottobre 2016</td>
	</tr>
	<th class='text-nowrap' scope='row'>Novembre</th>
	<td>Qua deve valorizzare Novembre 2016</td>
	</tr>
	<th class='text-nowrap' scope='row'>Dicembre</th>
	<td>Qua deve valorizzare Dicembre 2016</td>
	</tr>
  </tbody>";
echo"</table>";  
?>



<!--
$q="SELECT nome FROM utente";
$sql=@mysql_query($q);
while($record=@mysql_fetch_array($sql))
{
   $q_nome=$record['nome'];
   $i++;
   if($i<10)
   {
      echo"<td>$q_nome</td>";
   }
   else
   {
      $i=0;
      echo"<td>$q_nome</td>";
   }
}
-->