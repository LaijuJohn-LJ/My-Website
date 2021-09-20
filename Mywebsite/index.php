<?php
    $host = "localhost";
    $user =  "root";
    $pass =  "";
    $database = "db1";
     
    $connection = mysqli_connect($host,$user,$pass, $database);
      

    if($connection){

       // echo "successfully connected<br><br>";
    }else{
        echo "not";
    }

 //collect form data
 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $sql = "INSERT INTO form (name,email,phone,subject,message) VALUES (' $name','$email','$phone','$subject','$message')";

  if(mysqli_query($connection,$sql))
  {
     //echo " record inserted";
  }else{
      echo "no";
  }

 mysqli_close($connection);
