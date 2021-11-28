<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
?>
<?php
$conn = mysqli_connect('localhost:3307','root','','pesan');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }else{
    
  }

$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

$meseage="INSERT INTO `Pesan` VALUES ('$nama','$email','$pesan')";
mysqli_query($conn,$meseage);
header('Refresh: 0.0; URL=contact.html');
?>