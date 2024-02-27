<!DOCTYPE html>
<?php
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>log in by employee</title>
<style type="text/css">
	.login{
		margin-top : 100px;
		margin-left: 800px;
	}
	
	.textname{
		margin-bottom: 5px;
		margin-top: 10px;
	}
	
	.textbox{
		margin-bottom: 5px;
		margin-top: 10px;
		padding: 5px 5px;
		font-size: 16px;
		border: thin;
	}
	
	.bts-cancle{
		margin: 10px 5px;
		padding: 7px 50px;
		color: #46352d;
		background-color: #FF6366;
		border: none;
		font-size: 15px;
	}
	
	.bts-login{
		margin: 10px 5px;
		padding: 7px 55px;
		color: #46352d;
		background-color:#A8FF8E; 
		border: none;
		font-size: 15px;
	}
	
	.error{
		color: red;
		margin: 10px;
		font-size: 20px;
		
	}
	
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E7D7CB;
}
</style>
</head>

<body>
<img src="picture/emp/Employee log in.jpg" width="1920" height="581" alt=""/>
<table width="1920" border="0" cellspacing="0" cellpadding="0">
	  <tbody>
	    <tr>
	      <td> 
			   <form class="login" action="loginEM.php" method="post">
				  <label for="userid"><font class="textname" face='Agency FB' color="#46352D" size="+3">USER ID : </font></label><input class="textbox" type="text" name="userid" required><br>
			  	<p></p>
			      <label for="password"><font class="textname" face='Agency FB' color="#46352D" size="+3">PASSWORD : </font></label><input class="textbox" type="password" name="password" required><br>
		  		<p></p>
		  		  <input class="bts-cancle" type="reset" value="cancle">
		  		  <input class="bts-login" type="submit" value="log in" name="login">
		  	</form>
				<?php if(isset($_SESSION['error'])) : ?>
			  	<div class="error" align="center" >
			  	<?php
				  echo $_SESSION['error'];
				  echo "<br/>";
				  echo "please reload this page before log in again"
				  ?>
			  	</div>
			  <?php endif ?>
		  </td>
        </tr>
  </tbody>
</table>
<img src="picture/admin/Admin log in foot.jpg" alt="" width="1920" height="148" usemap="#Map" border="0"/>
<map name="Map">
  <area shape="rect" coords="1719,53,1883,112" href="logout.php">
</map>
</body>
</html>s

<?php 
	if(isset($_SESSION['error'])){
		session_destroy();
	}
?>