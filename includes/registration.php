<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);

	$password = mysqli_real_escape_string($con,$password);
   $sql="select * from `users` where (username='$username' or email='$email');";
        $res=mysqli_query($con,$sql);
            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($username==$row['username'])
            {
               echo "<script type='text/javascript'>alert('Username already exits');</script>";
            }
            elseif($email==$row['email'])
            {
                echo "<script type='text/javascript'>alert('Email already exists');</script>";
            }
        }else { //here you need to add else condition
                     $query = "INSERT into `users` (username, password, email)
VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
     if($result){
            echo "<script type='text/javascript'>alert('Successful Registration');</script>";
               $sql="select * from `users` where (username='$username' or email='$email');";
                    $res=mysqli_query($con,$sql);
                        if (mysqli_num_rows($res) > 0) {
                            $row = mysqli_fetch_assoc($res);
                            $dir = (string)$row['id'];
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir ;
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Complete";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Complete/ActivityProposal";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Complete/ProjectProposal";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Complete/PostMortem";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Incomplete";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Incomplete/ActivityProposal";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Incomplete/ProjectProposal";
                            mkdir($uploaddir, 0777);
                            $uploaddir = "/var/www/html/INTIMA-Upload/uploads/" . $dir . "/Incomplete/PostMortem";
                            mkdir($uploaddir, 0777);
                        }
                }
    else{
            }
        }
      
        
   
     
       

}

?>