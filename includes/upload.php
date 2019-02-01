<?php
include ("../db.php");

session_start();
 //  display  file  upload  form
if  (!isset($_POST['submit'])) {

$checker = 0;
}
  else {

//  check  uploaded  file  size
        $checker = 0;
    if ($_FILES['data']['size'] == 0) {

        $checker = 1;
        header("Refresh:0");
        echo "<script type='text/javascript'>alert('File size not allowed');</script>";;
    }

//  check  if  file  type  is  allowed  (optional)

    $allowedFileTypes = array("application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");

    if (!in_array($_FILES['data']['type'], $allowedFileTypes)) {
        $checker = 1;
        header("Refresh:0");
        echo "<script type='text/javascript'>alert('File type not allowed');</script>";

    }//  check  if  this  is  a  valid  upload
    $selected_val = $_POST['option'];  // Storing Selected Value In Variable
      if ($checker == 0) {
          if ($selected_val == "ap") {

              $row = $_SESSION["row"];

              $id = (int) $row ['id'];
              $newcount = (int) $row ['apcount'] + 1;


                echo $newcount." ";
                echo $id;
              $sql = "UPDATE users SET apcount=$newcount WHERE id=$id";

              
              if (!mysqli_query($con, $sql)){
                    echo("Error description: " . mysqli_error($con));
                }
              else
                  echo "APcount updated";

              $_SESSION["apcount"] = $_SESSION["apcount"] + 1;

              $uploadDir = "./uploads/" . $_SESSION["id"] . "/Incomplete/ActivityProposal/file" . $newcount ; //  copy  the  uploaded  file  to  the  directory
              mkdir($uploadDir, 0777);
              $uploadDir = $uploadDir . "/Version1" ; //  copy  the  uploaded  file  to  the  directory
              mkdir($uploadDir, 0777);
              $uploadDir = $uploadDir . "/";
              move_uploaded_file($_FILES['data']['tmp_name'], $uploadDir .$newcount.".docx");
                echo "File Uploaded";
          } else if ($selected_val == "pp")
              $uploadDir = "./uploads/incomplete/" . $_SESSION["id"] . "/ProjectProposal" . $_SESSION["ppcount"] . "/"; //  copy  the  uploaded  file  to  the  directory
          else if ($selected_val == "pmp")
              $uploadDir = "./uploads/incomplete/" . $_SESSION["id"] . "/PostMortem" . $_SESSION["pmcount"] . "/"; //  copy  the  uploaded  file  to  the  director


      }



}
?>