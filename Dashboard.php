<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <title>title</title>
<head>
<style>
body
{
background-color:#FFFFFF;
}
.button {
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}

.dropbtn {
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>
</head>
<body>
<?php
error_reporting(0);
if($_SESSION["name"]) {
?>


<center>
<h1>WELCOME TO MMDU MULLANA<br>
NAAC ACCREDITED GRADE 'A' UNIVERSITY<br></h1>
<h1>Dashboard <br> You can see and download timetable, Notice, Result and Syllabus from here<br>

<a href="timetableupload.php" target="blank" class="button">Upload_Timetable</a>
<a href="timetabledisplay.php" target="blank" class="button">Display_Timetable</a>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Upload_Notice</button>
   
  <div id="myDropdown" class="dropdown-content">
    <a href="noticeupload_Acadamic.php">Acadamic</a>
    <a href="noticeupload_events.php">Events</a>
    <a href="noticeupload_transportation.php">Transportation</a>
    <a href="noticeupload_festival.php">Festival</a>
    <a href="noticeupload_placements.php">Placement</a>
    <a href="noticeupload_mess.php" >Mess</a>
	
  </div>
  
  <div class="dropdown">
  <button onclick="myFunctionn()" class="dropbtn">Display_Notice</button>
  <div id="myDropdownn" class="dropdown-content">
    <a href="noticedisplay_Acadamic.php">Acadamic</a>
    <a href="noticedisplay_events.php">Events</a>
    <a href="noticedisplay_transportation.php">Transportation</a>
    <a href="noticedisplay_festival.php">Festival</a>
    <a href="noticedisplay_placements.php">Placement</a>
    <a href="noticedisplay_mess.php">Mess</a>
  </div>
</div>

  
  
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionn() {
  document.getElementById("myDropdownn").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<br>
<a href="resultupload.php" target="blank" class="button">Upload_Result</a>
<a href="resultdisplay.php" target="blank" class="button">Display_Result</a>
<a href="syllabusupload.php" target="blank" class="button">Upload_Syllabus</a>
<a href="syllabusdisplay.php" target="blank" class="button">Display_Syllabus</a><br>

 <?php echo $_SESSION["name"]; ?> <h1>Click here to<a href="logout.php" class="button">logout.</a>
<?php
}else echo "<h1>Please login first .</h1>";
?>



<center>
</body>
</html>
