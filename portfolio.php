<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Comments=$_POST['Comments'];

// database conection
$conn= new mysqli('localhost','root','','Portflio_contact_info');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into contact(Name,Email,Any comments) values(?,?,?)");
    $stmt->bind_param("sss",$Name,$Email,$Comments);
    $stmt->execute();
    echo "Submitted successfully...";
    $stmt->close();
    $conn->close();
}
?>