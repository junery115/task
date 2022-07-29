<?php 
require "connection.php";

if(isset($_GET["submit"])){

    $title = $_GET["title"];
    $text = $_GET["text"];

$sql = "INSERT INTO `task` (title, text)
				VALUES ('$title', '$text');";
}
if (mysqli_query($conn, $sql)) {
           header("Location: index.php");
					 } else {
				
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
 
				mysqli_close($conn);