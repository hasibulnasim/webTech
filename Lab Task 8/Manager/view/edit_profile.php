<?php
require_once '../controller/view_info_controller.php';
 session_start();
    if(!isset($_SESSION["username"])){
        header("Location:Login.php");
    }
$tpc = fetchUsers($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
    
	<title></title>
</head>
<body>
<div align=right>
<?php include 'C:/xampp/htdocs/project/Final Project/Manager/Navigation/header.php';?>
</div>


 <form class="box" style="border:2px;  padding: 1em;" action="../controller/update_tree_controller.php" method="POST" enctype="multipart/form-data">
  <input value="<?php echo $tpc['id'] ?>" type="text" id="id" name="id" class="form-control">
  <input value="<?php echo $tpc['name'] ?>" type="text" id="name" name="name" class="form-control">
  <input value="<?php echo $tpc['email'] ?>" type="text" id="email" name="email" class="form-control">
  <input value="<?php echo $tpc['contact'] ?>" type="text" id="contact" name="contact" class="form-control">
  <input value="<?php echo $tpc['username'] ?>" type="text" id="username" name="username" class="form-control">
 
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "editprofile" value="edit" class="btn btn-info">
  <input type="reset" class="btn btn-primary">
</form>

</body>
</html>