<?php
$host = "localhost";
$database = "teryt";
$table = "simc";
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

//$rekordy = simplexml_load_file('SIMC.xml');
$rekordy = simplexml_load_file('../teryt/SIMC.xml');
echo "<br>Listing:<br>\n";

for ($i=0;$i<count($rekordy->catalog->row); ++$i)
{
	$query = "insert into ".$database.".".$table." set ".
	    "woj='".$rekordy->catalog->row[$i]->WOJ."'".
	    ",pow='".$rekordy->catalog->row[$i]->POW."'".
	    ",gmi='".$rekordy->catalog->row[$i]->GMI."'".
	    ",rodz_gmi=".$rekordy->catalog->row[$i]->RODZ_GMI.
	    ",rm='".$rekordy->catalog->row[$i]->RM."'".
	    ",mz=".$rekordy->catalog->row[$i]->MZ.
	    ",nazwa='".$rekordy->catalog->row[$i]->NAZWA."'".
	    ",sym='".$rekordy->catalog->row[$i]->SYM."'".
	    ",sympod='".$rekordy->catalog->row[$i]->SYMPOD."'".
	    ",stan_na='".$rekordy->catalog->row[$i]->STAN_NA."'";
	    
	$result = mysqli_query($connection, $query);
	if (!$result) {
	    die('Invalid query: ' . mysqli_error());
	}

	//print("$query <br>\n");

}
?>