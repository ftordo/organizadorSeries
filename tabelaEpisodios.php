<?php
require_once "pesquisador.php";
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Url</th>";
    echo "<th>Temporada</th>";
    echo "<th>Episodio</th>";
    echo "<th>Visto</th>";
   	echo "</tr>";

$epPorVerDaSerie = selectPorVer("Vikings");
for($i = 0; $i < count($epPorVerDaSerie); $i++){
	echo "<tr>";
		echo "<td>" . $epPorVerDaSerie[$i][0] . "</td>";
    	echo "<td>" . $epPorVerDaSerie[$i][1] . "</td>";
		echo "<td>" . $epPorVerDaSerie[$i][2] . "</td>";
		echo "<td>" . $epPorVerDaSerie[$i][3] . "</td>";
		echo "<td><input type=\"button\"  class=\"btnX\"value=\"Visto\" onclick=\"location.href='minhasSeries.html'\">";
	echo "</tr>";
}

    echo "</table>";  