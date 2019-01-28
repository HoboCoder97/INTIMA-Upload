<?php


 //  display  file  upload  form
date_default_timezone_set('Singapore');
if  (!isset($_POST['submit']))  { ?>


<?php

}  else  {
$checker = 0;
//  check  uploaded  file  size

if  ($_FILES['data']['size']  ==  0)  {

$checker = 1;
header ("Refresh:0");
 echo "<script type='text/javascript'>alert('File size not allowed');</script>";;
}

//  check  if  file  type  is  allowed  (optional)

$allowedFileTypes  =  array("application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");

if  (!in_array($_FILES['data']['type'],  $allowedFileTypes)) {
$checker = 1;
header ("Refresh:0");
echo "<script type='text/javascript'>alert('File type not allowed');</script>";

}//  check  if  this  is  a  valid  upload
$selected_val = $_POST['option'];  // Storing Selected Value In Variable
if ($selected_val == "ap")
    $uploadDir  =  "./uploads/incomplete/activityproposal/"; //  copy  the  uploaded  file  to  the  directory
else if ($selected_val == "pp")
    $uploadDir  =  "./uploads/incomplete/projectproposal/"; //  copy  the  uploaded  file  to  the  directory
else if ($selected_val== "pmp")
    $uploadDir  =  "./uploads/incomplete/"; //  copy  the  uploaded  file  to  the  directory
$date = date('m/d/Y h:i:s a', time());
if  (!is_uploaded_file($_FILES['data']['tmp_name']))   {

die("ERROR:  Not  a  valid  file  upload"); } //  set  the  name  of  the  target  directory


if ($checker == 0){
$date =  date('m/d/Y h:i:s a', time());
$name = $_SESSION["username"].$date;
move_uploaded_file($_FILES['data']['tmp_name'],  $uploadDir  .  $_FILES['data']['name'])  or  die("Cannot  copy  uploaded  file"); 
    //  display  success  message

echo  "File  successfully  uploaded  to INTIMA Database "; 
}

} ?>