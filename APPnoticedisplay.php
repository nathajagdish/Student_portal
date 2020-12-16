<?php
error_reporting(0);
//change files to notice 
include("dbcon.php");


$query=  "SELECT description, filename FROM notice ORDER BY ID desc" 
or die("SELECT Error: ".mysqli_error()); 
$data=mysqli_query($conn,$query);

print "<table align=center  border=1>\n"; 
while ($row = mysqli_fetch_array($data)){ 
$files_field= $row['filename'];
$files_show= "notice/$files_field";
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
