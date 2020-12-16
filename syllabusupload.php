<form action="#file" method='post' enctype="multipart/form-data">
Description of File: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>
<?php 
error_reporting(0);


$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

if (isset($name)) {

$path= 'syllabus/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}
}
?>

<?php
error_reporting(0);

include("dbcon.php");



if(!empty($description)){
	
$query="INSERT INTO syllabus (description, filename)
VALUES ('$description', '$name')";
$data=mysqli_query($conn,$query);
}


mysqli_close($conn);

?>