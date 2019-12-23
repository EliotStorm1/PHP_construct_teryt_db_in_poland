<?php
$host = "localhost";
$database = "teryt";
$table = "terc";
$user = "root";
$password = "";

$connection = mysqli_connect($host,$user,$password);
//mysqli_select_db($database);
$result = mysqli_query($connection, "SET CHARACTER SET utf8;");
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}
$result = mysqli_query($connection,"SET NAMES utf8;");
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}

$rekordy = simplexml_load_file('../teryt/TERC.xml');
echo "<br>Listing:<br>\n";

for ($i=0;$i<count($rekordy->catalog->row); ++$i)
{
	$query = "insert into ".$database.".".$table." set ".
	    "woj='".$rekordy->catalog->row[$i]->WOJ."'".
	    ",pow='".$rekordy->catalog->row[$i]->POW."'".
	    ",gmi='".$rekordy->catalog->row[$i]->GMI."'".
	    ",rodz='".$rekordy->catalog->row[$i]->RODZ."'".
	    ",nazwa='".$rekordy->catalog->row[$i]->NAZWA."'".
	    ",nazdod='".$rekordy->catalog->row[$i]->NAZWA_DOD."'".
	    ",stan_na='".$rekordy->catalog->row[$i]->STAN_NA."'";
	$result = mysqli_query($connection, $query);
	if (!$result) {
	    die('Invalid query: ' . mysqli_error());
	}

	//print("$query <br>\n");

}
?>