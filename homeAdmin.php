<!DOCTYPE html>
<?php 
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN</title>
<style type="text/css">
	.showid{
		margin-top: 20px;
		margin-left: 20px;
	}
	
	.amhead{
		margin-left: 20px;
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
		margin-left: 40px;
		margin-top: 20px;
		margin-right: 50px;
		margin-bottom: 20px;
		background-color:#FFFFFF;
		padding: 5px 5px;
	}
	
	.selectmenu{
		margin-left: 40px;
		margin-top: 20px;
		margin-right: 50px;
		margin-bottom: 10px;
		background-color:#FFFFFF;
		padding: 15px 5px;
		padding-left: 5px;
		padding-top: 15px;
	}
	.bts-manu1{
		font-size: 16px;
		color: #46352d;
		padding: 10px 30px;
		background-color: #FFFFFF;
		font: bold;
		border-bottom-color: #46352D;
		border-left: none;
		border-right: none;
		border-top: none;
	}
	
	.text{
		font: bolder;
		font-size: 26px;
		align-self: center;
	}
	.bts-manu2{
		font-size: 16px;
		color: #46352d;
		padding: 10px 30px;
		background-color: #FFFFFF;
		font: bold;
		border-bottom-color: #46352D;
		border-left: none;
		border-right: none;
		border-top: none;
	}
	
	.bts-manu3{
		font-size: 16px;
		color: #46352d;
		padding: 10px 20px;
		background-color: #FFFFFF;
		font: bold;
		border-bottom-color: #46352D;
		border-left: none;
		border-right: none;
		border-top: none;
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
  		<font class="amhead" face='Agency FB' color="#46352D" size="+3" >ADMIN : <?php echo $_SESSION['userid']?></font>
	</div></td>
      <td class="exit" align="right"><a href="logout.php"><img src="picture/admin/home foot.jpg" width="178" height="52" alt=""/></a></td>
    </tr>
  </tbody>
</table>
<table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="293">
		  <div class="menu" align="center"><font class="menu" face='Agency FB' color="#46352D" size="+2"> MENU </font>
		 </div>
		  <div class="selectmenu" align="center">
			  <form>
  				<a href="addUser.php"><input class="bts-manu1" type="button" id="add" value="ADD" ></a>
				  <p></p>
  				<a href="editUser.php"><input class="bts-manu2" type="button" id="edit" value="EDIT"></a>
				  <p></p>
  				<a href="delUser.php"><input class="bts-manu3" type="button" id="delete" value="DELETE"></a>
			  </form>
		  </div>
		</td>
      <td width="1627" align="center">
		  <table width="1550" border="1" bordercolor="#F3F1EE" bgcolor="#FFFFFF" cellpadding="5" align="center">
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

</body>
</html>