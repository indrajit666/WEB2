<? 
$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "artikel_db"; 
//lakukan koneksi dengan mysql 
$connection = mysql_connect($dbhost,$dbuser,$dbpass); 
if(!$connection) 
{ 
 echo "Tidak dapat terhubung dengan database"; 
 exit; 
} 
//pilih database 
$pilih_db = mysql_select_db($dbname); 
if(!$pilih_db) 
{ 
 echo "Tidak dapat memilih database"; 
 exit; 
} 
?>
