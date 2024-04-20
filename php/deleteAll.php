<?php

$severName="localhost";
    $username="root";
    $password="";
    $databaseName="myDB";
    
    $conn=mysqli_connect($severName,$username,$password,$databaseName);
    if(!$conn){
        echo "Not Connected";
    }
    $sql = "DELETE from marks";
    $result = ($conn->query($sql)); 


?>
<script>
    window.location = "/sms/html/index.php";

</script>