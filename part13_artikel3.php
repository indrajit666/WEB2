<?php 
$connection = mysqli_connect("localhost", "root", "", "artikel_db");

$perintah = mysqli_query($connection, "SELECT * FROM articles ORDER BY judul DESC"); 
 
echo(" 
<h2>List Artikel</h2> 
<br><UL> 
"); 

while ($row = mysqli_fetch_array($perintah)) 
{ 
$id = $row['id'];
echo(" 
 <LI>
 $row[1] &nbsp;
 $row[2] &nbsp;
 $row[3] &nbsp;
 $row[waktu] &nbsp;
 
<a href=\"Pert13_Artikel4.php?id=$id\">Edit</a>
 &nbsp
 
<a href=\"Pert13_Artikel6.php?id=$id\">Hapus</a></LI><br>"); 
} 
echo("</table>"); 
echo "<br><a href=\"Pert13_Artikel1.php\">Tambah</a>"; 
echo "<br><a href=\"Pert13_Artikel1.php\">Admin Panel</a>"; 
?>
