<?php
$insert = false;
   $con=mysqli_connect("localhost","root","","registration");
   if($con)
   {
   	echo "connection ok";
   }
   
   	echo $FirstName = $_POST['FirstName'];
   	echo $LastName = $_POST['LastName'];
   	echo $gender = $_POST['gender'];
   	echo $ContactNo = $_POST['ContactNo'];
   	echo $Email = $_POST['Email'];
   	echo $Address = $_POST['Address'];
   	echo $VolunteerRole = $_POST['VolunteerRole'];
   $filename=$_FILES['file']['name'];
   $type=$_FILES['file']['type'];
   $size=$_FILES['file']['size'];
   $tmp_name=$_FILES['file']['tmp_name'];
   $location="volunteer/";
   	echo $CurrentJobRole = $_POST['CurrentJobRole'];
   	echo  $CurrentCompany= $_POST['CurrentCompany'];
   	echo $AadharNo= $_POST['AadharNo'];
   	echo $WhatsAppNo= $_POST['WhatsAppNo'];
   	echo $DOB = $_POST['DOB'];	
      
   	echo  $Password = $_POST['Password'];
   	echo $ConfirmPassword = $_POST['ConfirmPassword'];
   
   	
   
   $sql="INSERT INTO users(firstname, LastName, gender , ContactNo, email, addr, VolunteerRole,photo, CurrentJobRole, CurrentCompany, AadharNo, WhatsAppNo, DOB,  Password, ConfirmPassword ) 
   values('$FirstName', '$LastName', '$gender' ,'$ContactNo', '$Email', '$Address', '$VolunteerRole','$filename', '$CurrentJobRole', '$CurrentCompany', '$AadharNo', '$WhatsAppNo', '$DOB', '$Password', '$ConfirmPassword')";
   
   mysqli_query($con, $sql);
   move_uploaded_file($tmp_name,$location.$filename);
   
   
   
    ?>
