<?php
include('config.php');
if(isset($_GET['id'])){
$cheese_id = $_GET['id'];
$fetch = "SELECT * FROM `cheese_info` WHERE `cheese_id`= '$cheese_id'";
$result = $conn->query($fetch);
$row = $result->fetch_assoc();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container">
<form action="update.php" method="post">
<div class = "form-group">
<label for="">Cheese Name</label>
<input type="text" value = "<?php echo $row['cheese_name']; ?>" class = "form-control"  name = "cheese name">

<label for="">Cheese Type</label>
<input type="hidden" value = "<?php echo $row['cheese_id'];?>" class = "form-control"  name = "id">
<input type="text" value = "<?php echo $row['cheese_type'];?>" class = "form-control"  name = "cheese type">

<label for="">Cheese Used</label>
<input type="text" value = "<?php echo $row['cheese_used'];?>" class = "form-control"  name = "cheese used">
<br>
<input type="submit" value = "update" class = "btn btn-success" name="submit" >

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
    $cheese_id = $_POST['id'];
    $update = "UPDATE `cheese_info` SET `cheese_id`='$cheese_id',`cheese_name`='$cheese_name',`cheese_type`='$cheese_type',`cheese_used`='$cheese_used' WHERE `cheese_id`='$cheese_id'";
    $result = $conn->query($update);
    
    if($result == true ){
        ?>
        <script>
            window.alert("Record is added");
            window.location.assign('index.php');
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert("Record not added");
            window.location.assign('index.php')
        </script>
<?php    }
}
?>