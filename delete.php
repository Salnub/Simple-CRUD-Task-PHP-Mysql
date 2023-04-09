<?php
include('config.php');
if(isset($_GET['cheese_id'])){
$cheese_id = $_GET['cheese_id'];
$delete = "DELETE FROM `cheese_info` WHERE 'cheese_id = $cheese_id'";
$result = $conn->query($delete);
if(result == true){
    ?>
    <script>
        window.alert("Your record is successfully added");
        window.location.assign('index.php');
    </script>
    <?php
} else{
    ?>
    <script>
        window.alert("Your record is not deleted");
        window.location.assign('index.php');
    </script>
    <?php
}
}
?>