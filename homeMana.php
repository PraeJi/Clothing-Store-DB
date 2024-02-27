<!DOCTYPE html>
<?php 
	session_start();
	include 'condb.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>MANAGER</title>
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
	
	.nav ul{
		list-style: none;
		
		text-align: center;
		padding: 0;
		margin: 0;
	}
	
	.nav li{
		text-align: left;
		font-size: 1.2em;
		line-height: 40px;
		background: #F8E9E9;
	}
	
	.nav li ul li{
		padding: 0;
	}
	
	.nav a{
		text-decoration: none;
		color: #2f190e;
		display: block;
		padding-left: 15px;
		border-bottom: 1px solid #D0CDCA;
		transition: .3s
	}
	
	.nav a:hover{
		background: #FFEFCD;
	}
	
	.nav a.active{
		background-color: antiquewhite;
		color: #362218;
		cursor: default;
	}
	
	
	.nav li li{
		font-size: .8em;
	}
	
	@media screen and (min-width: 650px){
		.nav li {
			width: 130px;
			border-bottom: none;
			height: 50px;
			line-height: 50px;
			display: inline-block
		}
		
		.nav a{
			border-bottom: none;
		}
		
		.nav > ul > li{
			text-align: center;
		}
		
		.nav > ul > li > a{
			padding: 1px 0;
		}
		
		.nav li ul{
			position: absolute;
			display: none;
			width: inherit;
		}
		
		.nav li:hover ul{
			display: block;
		}
		
		.nav li ul li{
			display: block;
		}
		
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
  		<font class="amhead" face='Agency FB' color="#46352D" size="+3" >MANAGER : <?php echo $_SESSION['userid']?></font>
	</div></td>
      <td class="exit" align="right"><a href="logout.php"><img src="picture/admin/home foot.jpg" width="178" height="52" alt=""/></a></td>
    </tr>
  </tbody>
</table>
<div class="menu" align="center"><font class="menu" face='Agency FB' color="#46352D" size="+2" > MENU </font></div>
	<div class="dropdown">
		<div class="nav">
			<ul>
			  <li class="pd"><a href="#"><font face="Agency FB" color="#2f190e" size="+1">PRODUCT</font></a>
				<ul>
				  <li><a href="pd_add_mn.php"><font face="Agency FB" color="#2f190e" size="+1">ADD</font></a></li>
			      <li><a href="pd_edit_mn.php"><font face="Agency FB" color="#2f190e" size="+1">EDIT</font></a></li>
				  <li><a href="pd_delete_mn.php"><font face="Agency FB" color="#2f190e" size="+1">DELETE</font></a></li>
				  <li><a href="pd_view_mn.php"><font face="Agency FB" color="#2f190e" size="+1">VIEW</font></a></li>
				  </ul>
				</li>
				<li class="brand"><a href="#"><font face="Agency FB" color="#2f190e" size="+1">BRAND</font></a>
				  <ul>
				  <li><a href="b_add_mn.php"><font face="Agency FB" color="#2f190e" size="+1">ADD</font></a></li>
			      <li><a href="b_edit_mn.php"><font face="Agency FB" color="#2f190e" size="+1">EDIT</font></a></li>
				  <li><a href="b_delete_mn.php"><font face="Agency FB" color="#2f190e" size="+1">DELETE</font></a></li>
				  <li><a href="b_view_mn.php"><font face="Agency FB" color="#2f190e" size="+1">VIEW</font></a></li>
				  </ul>
				</li>
				<li class="cate"><a href="#"><font face="Agency FB" color="#2f190e" size="+1">CATEGORY</font></a>
				<ul>
				  <li><a href="c_add_mn.php"><font face="Agency FB" color="#2f190e" size="+1">ADD</font></a></li>
			      <li><a href="c_edit_mn.php"><font face="Agency FB" color="#2f190e" size="+1">EDIT</font></a></li>
				  <li><a href="c_delete_mn.php"><font face="Agency FB" color="#2f190e" size="+1">DELETE</font></a></li>
				  <li><a href="c_view_mn.php"><font face="Agency FB" color="#2f190e" size="+1">VIEW</font></a></li>
				  </ul></li>
				<li class="po"><a href="#"><font face="Agency FB" color="#2f190e" size="+1">PURCHASE ORDER</font></a>
				<ul>
				  <li><a href="po_add_mn.php"><font face="Agency FB" color="#2f190e" size="+1">ADD</font></a></li>
			      <li><a href="po_edit_mn.php"><font face="Agency FB" color="#2f190e" size="+1">EDIT</font></a></li>
				  <li><a href="po_delete_mn.php"><font face="Agency FB" color="#2f190e" size="+1">DELETE</font></a></li>
				  <li><a href="po_view_mn.php"><font face="Agency FB" color="#2f190e" size="+1">VIEW</font></a></li>
				  </ul>
				</li>
				<li class="sb"><a href="#"><font face="Agency FB" color="#2f190e" size="+1">SALE BILL</font></a>
				<ul>
				  <li><a href="sb_add_mn.php"><font face="Agency FB" color="#2f190e" size="+1">ADD</font></a></li>
			      <li><a href="sb_edit_mn.php"><font face="Agency FB" color="#2f190e" size="+1">EDIT</font></a></li>
				  <li><a href="sb_delete_mn.php"><font face="Agency FB" color="#2f190e" size="+1">DELETE</font></a></li>
				  <li><a href="sb_view_mn.php"><font face="Agency FB" color="#2f190e" size="+1">VIEW</font></a></li>
				  </ul>
				</li>
			  </ul>
			</div>
	</div>
</body>
</html>