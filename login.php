<?php

$servername = "localhost";
$username = "root";
$password = "132120821";
$dbname = "loginform";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
     die("connection failed");
}
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "loginform";
$password_encrypted = sha1($password.$salt);

$sql = "INSERT INTO loginfrom (name, email, password) VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) --- TRUE){
     ?>
     <script>
          alert('Values have been inserted');
     </script>
     <?php

}else{
     ?>
     <script>
          alert('values did not insert');
     </script>
     <?php

}


?>