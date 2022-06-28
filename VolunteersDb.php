<?php
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$gender = $_POST['gender'];
    $ContactNo = $_POST['ContactNo'];
	$Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $VolunteerRole = $_POST['VolunteerRole'];
    $CurrentJobRole = $_POST['CurrentJobRole'];
    $CurrentCompany= $_POST['CurrentCompany'];
    $AadharNo= $_POST['AadharNo'];
    $WhatsAppNo= $_POST['WhatsAppNo'];
    $DOB = $_POST['DOB'];	
    $VolunteerImage  = $_POST['VolunteerImage'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];

	//Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO users (FirstName, LastName, gender, ContactNo, Email, Address, VolunteerRole, CurrentJobRole, CurrentCompany, AadharNo, WhatsAppNo, DOB, VolunteerImage, Password, ConfirmPassword) 
        VALUES(?, ?, ?, ?, ?, ?,?,?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisssssiidiss", $FirstName, $LastName, $gender, $ContactNo, $Email, $Address, $VolunteerRole, $CurrentJobRole, $CurrentCompany, $AadharNo, $WhatsAppNo, $DOB, $VolunteerImage, $Password, $ConfirmPassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
 ?>
