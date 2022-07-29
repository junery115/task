
<?php 
require "connection.php";

if(isset($_GET["submit"])){

    $id = $_GET["id"];
    $title = $_GET["title"];
    $text = $_GET["text"];

// $sql = "INSERT INTO `task` (title, text)
// 				VALUES ('$title', '$text')";

// }
$update = "UPDATE `task` set  `title`= '$title', `text`= '$text' WHERE `id` = $id;";
if (mysqli_query($conn, $update)) {
           header("Location: index.php");
					 } else {
				
					echo "Error: " . $update . "<br>" . mysqli_error($conn);
				}
 
				mysqli_close($conn);
            }