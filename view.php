
<?php include "connection.php"; ?>
<!Doctype html>
<html>
    <head>
      <title> task </title>
        <meta nam="viewport" content="width=device-width, initial-scale=1">

      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
      <link type="text/css" rel="stylesheet" href="css/style.css" />

    </head>
    <body>
    <?php 
          $id = $_GET["id"];
          echo $id;
          $query = "Select * from `task` where `id` ='$id'";

          $row = mysqli_query($conn, $query);
          $item = mysqli_fetch_array($row);
          echo $item['id'];

          ?>
      <div class="container" >
       <h1>Details for task <?php echo $item['id']; ?></h1>
       <ul class="list-group">
        <li class="list-group-item  align-items-center " >
           ID : <?php echo $item['id']; ?>
        </li>
        <li class="list-group-item">
           TITLE : <?php echo  $item['title']; ?>
        </li>
        <li class="list-group-item">
           TEXT : <?php  echo $item['text']; ?>
        </li>
       </ul>

       <a href="index.php">Return to Index Page</a>

</div>
</body> 
    </html>