<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="registration";

    mysql_connect($host,$user,$password);
    mysql_select_db($db);

    if(isset($_POST['Email'])){

      $email=$_POST['Email'];
      $password=$_POST['password'];

      $sql="select * from users where email=".$email."AND Password=".$password."limit 1";

      $result=mysql_query($sql);

      if(mysql_num_rows($result==1)){
         echo "You have successfully logged in";
         exit();
      }
      else{
         echo "You have entered an incorrect password";
         exit();
      }




    }

?>