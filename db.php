<?php
include ("./Private/indexinfo.php");
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","$DB_USERNAME","$DB_PASSWORD","intimafinal");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$projectproposalcon = mysqli_connect("localhost","root","","intimafinal");
