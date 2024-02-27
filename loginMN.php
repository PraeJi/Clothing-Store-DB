<!doctype html>
<?php 
	session_start();
	include 'condb.php';
	
	if(isset($_POST['login'])){
		$userid = $_POST['userid'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM user_system WHERE user_id='$userid' AND password='$password'";
		
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) == 1){
			
			$row = mysqli_fetch_array($result);
			
			$_SESSION['userid'] = $row['user_id'];
			$_SESSION['position'] = $row['position'];
			
			if($_SESSION['position'] == 'manager'){
				header("Location: homeMana.php");
			}else{
				$_SESSION['error'] = "you can't log in to manager position";
				header("Location: loginAdmin.php");
			}
		}else{
			$_SESSION['error'] = "user id/password incorrect";
			header("Location: loginAdmin.php");
		}
	}
?>