<!DOCTYPE html>
<?php 
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>EMPLOYEE</title>
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
		width: 150px;
	}
	
	.selectmenu{
		margin-left: 40px;
		margin-top: 20px;
		margin-right: 50px;
		margin-bottom: 10px;
		background-color:#FFFFFF;
		width: 250px;
	}
	.bts-manu1{
		font-size: 16px;
		color: #46352d;
		padding: 10px 10px;
		background-color: #FFFFFF;
		font: bold;
		border:none;
	}
	
	.text{
		font: bolder;
		font-size: 26px;
		align-self: center;
	}
	.bts-manu2{
		font-size: 16px;
		color: #46352d;
		padding: 10px 10px;
		background-color: #FFFFFF;
		font: bold;
		border:none;
	}
	
	.bts-manu3{
		font-size: 16px;
		color: #46352d;
		padding: 10px 10px;
		background-color: #FFFFFF;
		font: bold;
		border:none;
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
  		<font class="amhead" face='Agency FB' color="#46352D" size="+3" >EMPLOYEE : <?php echo $_SESSION['userid']?></font>
	</div></td>
      <td class="exit" align="right"><a href="logout.php"><img src="picture/admin/home foot.jpg" width="178" height="52" alt=""/></a></td>
    </tr>
  </tbody>
</table>
<table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="361">
		 <div class="menu" align="center"><font class="menu" face='Agency FB' color="#46352D" size="+2" > MENU </font></div>
		 <div class="selectmenu" align="center">
			  <form><a href="emp_product.php"><input class="bts-manu1" type="button" id="PRODUCT" value="PRODUCT" ></a></form></div>
				  <p></p>
  		<div class="selectmenu" align="center"><form><a href="emp_brand.php"><input class="bts-manu2" type="button" id="BRAND" value="BRAND"></a></form></div>
				  <p></p>
  		<div class="selectmenu" align="center"><form><a href="emp_cate.php"><input class="bts-manu3" type="button" id="CATEGORY" value="CATEGORY"></a></form></div>
		  			<p></p>
		  <div class="selectmenu" align="center"><form><a href="emp_po.php"><input class="bts-manu2" type="button" id="PURCHASE_ORDER" value="PURCHASE ORDER"></a></form></div>
				  <p></p>
  		<div class="selectmenu" align="center"><form><a href="emp_sb.php"><input class="bts-manu3" type="button" id="SALE_BILL" value="SALE BILL"></a></form></div>

	  </td>
		<td width="1559">
		 <table width="1200" border="1" bordercolor="#F3F1EE" bgcolor="#FFFFFF" cellpadding="5" align="center">
		  		<thead>
		  			<tr>
						<th><font class="text" face="Agency FB" color="#46352d" size="+2">PRODUCT ID</font></th>
						<th><font class="text" face="Agency FB" color="#46352d" size="+2">COLOR</font></th>
						<th><font class="text" face="Agency FB" color="#46352d" size="+2">SIZE</font></th>
						<th><font class="text" face="Agency FB" color="#46352d" size="+2">QUALTITY</font></th>
						<th><font class="text" face="Agency FB" color="#46352d" size="+2">PRICE</font></th>
					</tr>
		  		</thead>
		  		<tbody align="center">
					<?php
						$query = "SELECT * FROM product";
						$result = mysqli_query($conn,$query) or die("Error in sql : $query".mysqli_error($query));
						?>
					<?php foreach ($result as $row){ ?>
		  			<tr>
						<td>
							<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_id'];?></font></td>
						<td>
							<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_color'];?></font></td>
						<td>
							<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_size'];?></font></td> 
						<td>
							<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_qualtity'];?></font></td> 
						<td>
							<font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_price'];?></font></td> 
					</tr>
					<?php } ?>
		  		</tbody>
		  </table>
	  </td>
	 <?php mysqli_close($conn); ?>
    </tr>
  </tbody>
</table>

</body>
</html>