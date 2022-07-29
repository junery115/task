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

    $query = "select * from task";
    
    $data = mysqli_query( $conn,$query);
    
    while($row=mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['text']; ?></td>
      </tr>
      <?php
    }


?>
      <div class="container" >
       <h1> Task App </h1>
       <form class="form-inline" method= "get" action="handle.php" >
          <div class="form-group ">
            <label for="title">Title</label>
            <input type="text" class="form-control" name = "title" id="title" placeholder="title">
          </div>
          <div class="form-group space">
            <label for="text">text</label>
            <textarea class="form-control" name="text" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-default space" name = "submit">submit</button>
        </form>
        <div class="table-styled">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Text</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
    <?php 

    $query = "select * from task";
    
    $data = mysqli_query( $conn,$query);
    
    while($row=mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['text']; ?></td>
              <form method="post" action= "index.php"> 
                <td> 
                 <a href ="view.php?id=<?php echo $row['id']; ?>" > <span class =  "glyphicon glyphicon-eye-open tab" ></span> </a>
                  <a href ="edit.php?id=<?php echo $row['id']; ?>" ><span class =  "glyphicon glyphicon-pencil tab"></span></a>
                  <button type="submit"  name = "delete" value= "<?php  echo $row['id']; ?> " class="btn btn-info tab">
                   <span class="glyphicon glyphicon-trash" ></span> 
                  </button>
                </td>
              </form
      </tr>
      <?php
    }

    if(isset($_POST['delete'])){
      $id = $_POST['delete'];
      $query = "delete from `task` where `id`='$id'";
      

      if(mysqli_query($conn, $query)){
        header("Location: index.php");
        echo "Record deleted successfully";
      }
        echo "Unable to delete record";

    }

?>


              <!-- <tr>
                <td>1</td>
                <td>eat</td>
                <td>beans</td> 
              </tr>-->
            </tbody>
          </table>

        </div>
        </div>
      <script src="js/jquery-1.9.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>

</html>
