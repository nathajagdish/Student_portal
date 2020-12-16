<?php
//change files to result
include("dbcon.php");


$query=  "SELECT description, filename FROM result ORDER BY ID desc" 
or die("SELECT Error: ".mysqli_error()); 
$data=mysqli_query($conn,$query);

print "<table align=center style=font-size:60px  border=1>\n"; 
while ($row = mysqli_fetch_array($data)){ 
$files_field= $row['filename'];
$files_show= "result/$files_field";
$descriptionvalue= $row['description'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 

?> 
