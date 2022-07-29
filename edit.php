
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
       <h1> Edit Item <?php $item['id']; ?></h1>
       <form class="form-inline" method= "get" action="update.php" >
          <div class="form-group ">

      
            <label for="title">Title</label>
            <input type="text" class="form-control" name = "title" id="title" value = "<?php echo $item['title']; ?>">
          </div>
          <div class="form-group space">
            <label for="text">text</label>
            <textarea class="form-control" name="text" rows="3" ><?php echo $item['text']; ?> </textarea>
          </div>
            <input type="text" name="id" hidden  value = "<?php echo $item['id']; ?>" />
          <button type="submit" class="btn btn-default space" name = "submit">submit</button>
        </form>

</div>