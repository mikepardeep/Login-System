<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1><br>

     <nav class="home-nav">
          <a href="change-password.php">Change Password</a>
          <a href="logout.php">Logout</a>
     </nav>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}

?>