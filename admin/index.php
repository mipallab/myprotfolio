<?php
	session_start();
	include_once("config.php");

	if(!(isset($_SESSION['login']))) {
		$user_sql = "SELECT * FROM users";
		$user_result = mysqli_query($connect_admin, $user_sql) or die("Query Failed!");
		$user_row = mysqli_fetch_assoc($user_result);

		

		if(isset($_POST['login'])) {
			$user_name = $_POST['username'];
			$user_password = $_POST['pass'];

			if($user_name == $user_row['uname']) {
				 



				if($user_password == $user_row['pass']) {

					$_SESSION['login'] = "login";
					header("Location: http://localhost/website/Class48/myprotfolio/admin_page/index.php");
					 
				}else{

					 $error['pass'] = "password doesn't match";
				}
			
			}else {

				 $error['email'] = "email doesn't match";
			}
		}
	}else {
		header("Location: http://localhost/website/Class48/myprotfolio/admin_page/index.php");
	}
	



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<style>
	.w-35 {
		width: 35% !important;
	}
	.error {

	}
</style>
<body>
		
	<div class="container">
		<div class="card w-35 my-5 mx-auto">
			<div class="card-header">
				<h2>Admin Panel</h2>
			</div>
			<div class="card-body">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" id="username" type="text" name="username" value="<?php echo $_POST['username'] ?? ' '?>">
                            <div class="error text-danger">
	                          	<?php 
	                          		if(isset($error['email'])) {
	                          			echo "<p>".  $error['email'] . "</p>";
	                          		}
	                          	?>
                          	</div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input class="form-control" id="pass" type="password" name="pass" value="<?php echo $_POST['pass'] ?? '' ?>">
	                          <div class="error text-danger">
	                          	<?php 
	                          		if(isset($error['pass'])) {
	                          			echo "<p>".  $error['pass'] . "</p>";
	                          		}
	                          	?>
	                          </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-outline-warning" type="submit" value="Login" name="login">
                        </div>
                   </form>
			</div>
			
		</div>
	</div>

</body>
</html>