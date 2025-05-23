
<?php
//CONNECTION WITH THE CLIENT TO THE SERVER
    $oldpassword=$_POST ['oldPassword'];
    $newpassword=$_POST['newPassword'];
    $confirmationPassword=$_POST['confirmationPassword'];

//CONNECTION OF THE SERVER WITH THE DATABASE
$conn = mysqli_connect("localhost", "root", "", "prey");

//check connection
if ($conn->connect_error) {
    die("Connection to the database failed: " . $conn->connect_error);
} else {
    echo "connected successfully";
}

//prepare and bind
$sql = "INSERT INTO clienta (old_password,new_password_1,new_password_2) VALUES ('$oldpassword','$newpassword','$confirmationPassword')";
$result=mysqli_query($conn,$sql);


// Close the connection
mysqli_close($conn);
?>


