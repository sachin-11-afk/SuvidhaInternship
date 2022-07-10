<?php
    
    session_start();
    $errors = array();

    $email="";
    $password="";

    $db=mysqli_connect('localhost','root','','registration');


   if (isset($_POST['email'])) {
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $password = mysqli_real_escape_string($db, $_POST['Password']);

         if (empty($email)) {
            array_push($errors, "Email is required");
         }
         if (empty($password)) {
            array_push($errors, "Password is required");
         }

         if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$email' AND Password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
               $_SESSION['email'] = $email;
               $_SESSION['success'] = "You are now logged in";
               header('location: index.html');
            }
             else {
               array_push($errors, "Wrong username/password combination");
         }
         }
   }
   else{
      array_push($errors,"Email is not registered. Register yourself first!")
   }
  




?>
