<?php
$fname=$lname=$dob=$email=$contact=$gender=$password=$cpassword=$cname="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $dob = $_POST["dob"];      
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $gender = $_POST["gender"];
    $cname = $_POST["cname"];
  }
 if($password===$cpassword)
 {
                            $servername = "localhost";
                            $username = "root";
                            $pass = "actscdac";
                            $dbname = "test";
                            $conn = new mysqli($servername,$username,$pass,$dbname);
                            if($conn->connect_error)
                            {
                                die("Connection failed".$conn->connect_error);
                            }
                            else
                            {
                                echo "Connection successful<br>";
                            }
                            $sql = "insert into employee values('$fname','$lname','$email','$contact','$dob','$password','$cpassword','$gender','$cname')";
                            $result=$conn->query($sql);
                            if($result)
                            {
                            echo "Registration successful...";
                            }
}
else{
    echo "Passwords do not match..";
}
echo "Hello world";
#$conn->close(); 
