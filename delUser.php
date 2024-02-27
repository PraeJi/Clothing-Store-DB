<!DOCTYPE html>
<?php 
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN : DELETE</title>
<style type="text/css">
	.showid{
		margin-top: 20px;
		margin-left: 15px;
	}
	
	.amhead{
		margin-left: 15px;
		margin-top: 20px;
		margin-right: 10px;
		margin-bottom: 20px;
		background-color:#FFFFFF;
		padding: 10px 10px;
	}
	
	.exit{
		padding: 20px 20px;
	}
	
	.menu{
		margin-left: 35px;
		margin-top: 20px;
		margin-right: 50px;
		margin-bottom: 20px;
		background-color:#FFFFFF;
		padding: 5px 5px;
		border: 1px;
		border-color: #46352d;
	}
	
	.text{
		font: bolder;
		font-size: 26px;
		align-self: center;
	}
	
	.containers{
		background-color: #FFFFFF;
		border-color: #46352D;
		font-size: 16px;
		margin-left: 35px;
		margin-top: 20px;
		margin-right: 50px;
		margin-bottom: 20px;
		padding-top: 25px;
		padding-bottom: 30px;
		padding-left: 10px;
	}
	
	.head{
		margin-top: 5px;
		margin-bottom: 5px;
		font: bolder;
	}
	
	.textbox{
		background: #ECECEC;
		border: 1px;
		font-size: 16px;
	}
	
	.bts-submit{
		margin-left:  250px;
		background: #FFFFFF;
		color: #46352D;
		border-color: #46352D;
	}
	
	label{
		display: inline-block;
		width: 90px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.back{
		margin-left: 1650px;
	}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E7D7CA;
}
body,td,th {
	color: #46352d;
}
</style>
</head>

<body>
	<table width="1920" border="0" cellspacing="0" cellpadding="0">
  	<tbody>
    	<tr>
      		<td><div class="showid">
  				<font class="amhead" face='Agency FB' color="#46352D" size="+3" >ADMIN : <?php echo $_SESSION['userid']?> </font>
			</div></td>
      		<td class="exit" align="right"><a href="logout.php"><img src="picture/admin/home foot.jpg" width="178" height="52" alt=""/></a></td>
	  </tr>
	  </tbody>
	</table>
<table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
  	<tbody>
    	<tr>
			<td width="440">
				<div class="menu" align="center"><font class="menu" face='Agency FB' color="#46352D" size="+2"> - EDIT - </font></div>
				<div class="containers"><form action="delUser.php" method="post">
					<label><font class="head" face='Agency FB' color="#46352D" size="+1">USER ID : </font></label>
					<input class="textbox" type="text" name="id"><br>
					<label><font class="head" face='Agency FB' color="#46352D" size="+1">PASSWORD : </font></label>
					<input class="textbox" type="text" name="psw"><br>
					<input class="bts-submit" type="submit" value="DELETE">
					<?php 
						

						$id = $_POST['id'];
						$psw = $_POST['psw'];
					
						$delete = mysqli_query($conn,"DELETE FROM `user_system` WHERE user_id='$id' AND user_system.password = '$psw';");
						if(mysqli_affected_rows($conn)>0){
						}
						else{
							echo mysqli_error($delete);
						}
					?>
				</form></div>
			</td>
		  	<td width="1480" align="center">
		  		<table width="1300" border="1" bordercolor="#F3F1EE" bgcolor="#FFFFFF" cellpadding="5" align="center">
		  			<thead>
		  				<tr>
							<th><font class="text" face="Agency FB" color="#46352d" size="+2">USER ID</font></th>
							<th><font class="text" face="Agency FB" color="#46352d" size="+2">NAME</font></th>
							<th><font class="text" face="Agency FB" color="#46352d" size="+2">PASSWORD</font></th>
							<th><font class="text" face="Agency FB" color="#46352d" size="+2">POSITION</font></th>
						</tr>
		  			</thead>
		  			<tbody align="center">
						<?php
							include 'condb.php';
							$query = "SELECT * FROM user_system";
							$result = mysqli_query($conn,$query) or die("Error in sql : $query".mysqli_error($query));
							?>
						<?php foreach ($result as $row){ ?>
		  				<tr>
							<td>
								<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['user_id'];?></font></td>
							<td>
								<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['name'];?></font></td>
							<td>
								<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['password'];?></font></td>
							<td>
								<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['position'];?></font></td> 
						</tr>
						<?php } ?>
		  			</tbody>
		  		</table>
		  		<?php mysqli_close($conn); ?>
				</div></td>
   			 </tr>
  		</tbody>
	</table>
	<div align="center" class="back"><a href="homeAdmin.php"><img src="picture/admin/Adminback.jpg" width="226" height="60" alt=""/></a></div>
</body>
</html>