
<?php
require './connexion.php';

$id = $_GET['id'];

$sql = "DELETE from employees where employee_id = $id";
$res = mysqli_query($conn, $sql);

if($res){
    mysqli_close($conn);
    header("location:index.php");
}

?>