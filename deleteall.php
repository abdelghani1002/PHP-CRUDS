
<?php
require './connexion.php';

$sql = "DELETE from employees;";
$res = mysqli_query($conn, $sql);

if($res){
    mysqli_close($conn);
    header("location:index.php");
}
?>