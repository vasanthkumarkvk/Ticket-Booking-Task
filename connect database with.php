<?php

$username    = $_POST['username'];
$phnumber    = $_POST['phnumber'];
$age         = $_POST['age'];
$email       = $_POST['email'];
$actualprice = $_POST['actualprice'];
$password1    = $_POST['password1'];




if (!empty($username ) || !empty($phnumber ) || !empty($age) || !empty($email ) || !empty($actualprice) || !empty($password1))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "vasanth";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From ticket Where email = ? Limit 1"; // set the limit
  // value insert
  $INSERT = "INSERT Into ticket (username , phnumber ,age, email, actualprice , password1)values(?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email); // number =i , character='s'
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("siisis", $username,$phnumber,$age,$email,$actualprice,$password1  );
      $stmt->execute();
      echo "your login sucessfully";
     } else {
      echo "Your login already,register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
