<?php
$host = "localhost";
$database = "teryt";
$table = "ulic";
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

$rekordy = simplexml_load_file('../teryt/ULIC.xml');
echo "<br>Started:<br>\n";

for ($i=0;$i<count($rekordy->catalog->row); ++$i)
{
	$query = "insert into ".$database.".".$table." set ".
	    "woj='".$rekordy->catalog->row[$i]->WOJ."'".
	    ",pow='".$rekordy->catalog->row[$i]->POW."'".
	    ",gmi='".$rekordy->catalog->row[$i]->GMI."'".
	    ",rodz_gmi='".$rekordy->catalog->row[$i]->RODZ_GMI."'".
	    ",sym='".$rekordy->catalog->row[$i]->SYM."'".
	    ",sym_ul='".$rekordy->catalog->row[$i]->SYM_UL."'".
	    ",cecha='".$rekordy->catalog->row[$i]->CECHA."'".
	    ",nazwa_1='".addslashes($rekordy->catalog->row[$i]->NAZWA_1)."'".
	    ",nazwa_2='".addslashes($rekordy->catalog->row[$i]->NAZWA_2)."'".
	    ",stan_na='".$rekordy->catalog->row[$i]->STAN_NA."'";
	    
	$result = mysqli_query($connection, $query);
	if (!$result) {
	    die('Invalid query: ' . mysqli_error());
	}

	//print("$query <br>\n");

}
print("Succeesfully completed<br>\n");
?>