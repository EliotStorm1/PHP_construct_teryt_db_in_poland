<?php
$host = "localhost";
$database = "teryt";
$table = "wmrodz";
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

$rekordy = simplexml_load_file('../teryt/WMRODZ.xml');
echo "<br>Listing:<br>\n";

for ($i=0;$i<count($rekordy->catalog->row); ++$i)
{
	$query = "insert into ".$database.".".$table." set ".
	    "rm='".$rekordy->catalog->row[$i]->RM."'".
	    ",nazwa_rm='".$rekordy->catalog->row[$i]->NAZWA_RM."'".
	    ",stan_na='".$rekordy->catalog->row[$i]->STAN_NA."'";
	    
	$result = mysqli_query($connection, $query);
	if (!$result) {
	    die('Invalid query: ' . mysqli_error());
	}

	//print("$query <br>\n");

}
?>