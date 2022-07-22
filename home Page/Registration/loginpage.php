<?php
    
    session_start();
    $errors = array();

    echo $email=$_POST['Email'];
    echo $password=$_POST['Password'];

    $db=mysqli_connect('localhost','root','','registration');


   if (isset($_POST['Email'])) {
     echo  $email = mysqli_real_escape_string($db, $_POST['Email']);
     echo  $password = mysqli_real_escape_string($db, $_POST['Password']);

         if (empty($email)) {
            array_push($errors, "Email is required");
            echo "empty";
         }
         if (empty($password)) {
            array_push($errors, "Password is required");
            echo "p";
         }

         if (count($errors) == 0) {
            
            echo $password;
            $query = "SELECT * FROM users WHERE email='$email' AND Password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results)) {
               echo "ho gya";
               $_SESSION['email'] = $email;
               $_SESSION['success'] = "You are now logged in";
               header('location: ../index.php');
            }
             else {
               echo "nhi";
               array_push($errors, "Wrong username/password combination");
         }
         }
   }
 





?>
