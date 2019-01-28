<?php

if ($result){
     $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";]
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $id =  $row['ID'];
        mkdir ("uploads/incomeple/.$id",0777,true);
}
?>