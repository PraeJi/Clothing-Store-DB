<!DOCTYPE html>
<?php 
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>CATEGORY : VIEW</title>
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
		margin-right: auto;
		font: bolder;
		margin-bottom: 5px;
		font-size: 20px;
	}
	
	.textbox{
		background: #FFFFFF;
		border: 1px;
		font-size: 20px;
		margin-bottom: 5px;
		margin-top: 5px;
		margin-left: 5px;
		margin-right: 10px;
		height: 20px;
	}
	
	.bts-submit{
		margin-left:  25px;
		margin-bottom: 5px;
		background: #FFFFFF;
		color: #46352D;
		border-color: #46352D;
	}
	
	.back{
		margin-left: 1650px;
		
	}
	
	.from{
		margin-top: 20px;
		margin-bottom: 40px;
		width: 1920px;
	}
	
	label{
		display: inline-block;
		width: 90px;
		margin-top: 10px;
		margin-bottom: 10px;
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
	
.back1 {		
	margin-left: 300px;
	margin-right: 20px;
}
	
.menu1 {		
		margin-left: 40px;
		margin-top: 20px;
		margin-right: 50px;
		margin-bottom: 20px;
		background-color:#FFFFFF;
		padding: 5px 5px;
		width: 150px;
}
</style>
</head>

<body>
<table width="1920" border="0" cellspacing="0" cellpadding="0">
  	<tbody>
    	<tr>
      		<td><div class="showid">
  				<font class="amhead" face='Agency FB' color="#46352D" size="+3" >MANAGER : <?php echo $_SESSION['userid']?> </font>
			</div></td>
      		<td class="exit" align="right"><a href="logout.php"><img src="picture/admin/home foot.jpg" width="178" height="52" alt=""/></a></td>
	  </tr>
  </tbody>
	</table>
<table width="1920">
    <td width="491"><div class="menu1" align="center"><font class="menu1" face='Agency FB' color="#46352D" size="+2" > CATEGORY </font></div></td>
    <td width="1417" ><div align="right" class="back1"><a href="homeMana.php"><img src="picture/admin/Adminback.jpg" width="226" height="60" alt=""/></a></div></td>
</table>
<table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="1920"><table width="1920" height="auto" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="1920"><table width="1000" border="1" bordercolor="#F3F1EE" bgcolor="#FFFFFF" cellpadding="5" align="center">
              <thead>
                <tr>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">CATEGORY ID</font></th>
                  <th><font class="text" face="Agency FB" color="#46352d" size="+2">CATEGORY TYPE</font></th>
                  
                </tr>
              </thead>
              <tbody align="center">
                 <?php
						$value = $_POST['id'];
						$query = "SELECT cate_id,cate_type FROM category WHERE cate_id = '$value'";
						$result = mysqli_query($conn,$query) or die("Error in sql : $query".mysqli_error($query));
						?>
                <?php foreach ($result as $row){ ?>
                <tr>
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['cate_id'];?></font></td>
                  
                  <td><font class="text" face="Agency FB" color="#46352d" size="-4"><?php echo $row['cate_type'];?></font></td>
                  
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