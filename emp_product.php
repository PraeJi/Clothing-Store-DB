<!DOCTYPE html>
<?php 
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>EMPLOYEE : PRODUCT</title>
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
	
		
	.text{
		font: bolder;
		font-size: 26px;
		align-self: center;
	}
	
	.containers{
		font-size: 16px;
		margin-left: 35px;
		margin-top: 20px;
		margin-bottom: 20px;
		padding-top: 25px;
		padding-bottom: 30px;
		padding-left: 10px;
	}
	
	.bts-submit{
		margin-left:  20px;
		background: #FFFFFF;
		color: #46352D;
		border-color: #46352D;
	}
	
	.tb{
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.back{
		margin-left: 300px;
		margin-right: 20px;
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
	<table width="1920">
	<td width="491"><div class="menu" align="center"><font class="menu" face='Agency FB' color="#46352D" size="+2" > PRODUCT </font></div></td>
	<td width="1417" ><div align="right" class="back"><a href="homeEmp.php"><img src="picture/admin/Adminback.jpg" width="226" height="60" alt=""/></a></div>
		</td>
	</table>
<table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="1920"><table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="1920"><table width="1700" border="1" bordercolor="#F3F1EE" bgcolor="#FFFFFF" cellpadding="5" align="center">
              <thead>
                <tr>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">PRODUCT ID</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">SIZE</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">COLOUR</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">PRICE</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">BRAND</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">CATEGORY</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">QUALTITY</font></th>
                </tr>
              </thead>
              <tbody align="center">
                <?php
						$query = " SELECT pro_id,pro_size,pro_color,pro_price,brand_name,cate_type,pro_qualtity FROM product,brand,category WHERE product.brand_id = brand.brand_id AND product.cate_id = category.cate_id";
						$result = mysqli_query($conn,$query) or die("Error in sql : $query".mysqli_error($query));
						?>
                <?php foreach ($result as $row){ ?>
                <tr>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_id'];?></font></td>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_size'];?></font></td>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_color'];?></font></td>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_price'];?></font></td>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['brand_name'];?></font></td>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['cate_type'];?></font></td>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['pro_qualtity'];?></font></td>
                </tr>
                <?php } ?>
              </tbody>
            </table></td>
            <?php mysqli_close($conn); ?>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>