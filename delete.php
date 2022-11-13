<?php

include("config.php");

$id = $_GET['id'];
$sql = "DELETE FROM pengguna WHERE id=$id";

$result = mysqli_query($conn,$sql);


if($result)
	header("location: user_data.php");
?>