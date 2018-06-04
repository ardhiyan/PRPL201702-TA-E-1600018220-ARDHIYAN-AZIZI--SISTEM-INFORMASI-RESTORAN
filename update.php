<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="images/HigherGround.css" type="text/css" /><title>RESTORAN MASA KINI</title>

</head>


<body>
<!-- wrap starts here -->
<div id="wrap">
<div id="top-bg"></div>
<!--header -->
<div id="header">
<h1 id="logo-text"><a href="#" title="">ARDHIYAN<span>AZIZI</span></a></h1>
<p id="slogan">1600018220</p>
<div id="header-links">
</div>
<!--header ends--> </div>
<div id="header-photo"></div>
<!-- navigation starts-->
<div id="nav">
<ul>
<li id="current"><a href="index.php">Home</a></li>
<li><a href="order.php">Order</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="galery.php">Galerry</a></li>

</ul>
<!-- navigation ends--> </div>
<!-- content-wrap starts -->
<div id="content-wrap">
<div id="main"> <a name="TemplateInfo"></a>
<h2><a href="index.html" title=""></a></h2>
<p class="post-info">Boss <a href="index.php">Ardhiyan Azizi</a></p><br>
    <meta charset="utf-8">
    <title>PRPL AZIZI</title>
  </head>
  <body>

<?php
	$koneksi = mysql_connect("localhost","root","") or die("Koneksi Gagal !" . mysql_error());
	$database = mysql_select_db("kasir");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Barang</title>
<style>
	a {
		color:#FFF;
	}
</style>
</head>

<body background="fdl.png">
<h1 align="center">Update Barang</h1>
<div align="center">
<form action="proses_update.php" method="post" enctype="multipart/form-data">
<table width="600" align="center" cellpadding="6">
	<tr>
    	<td>Kode Pemesan</td>   <?php
		$kd = $_POST['kd'];
			$lihat_1 = mysql_query("select * from barang where barang.kd_brg = '$kd'");
			$arr_lihat1 = mysql_fetch_array($lihat_1);
		?><td><input type="text" value="<?php echo $arr_lihat1['kd_brg']; ?>" disabled="disabled" /><input type="hidden" name="kd_brg" value="<?php echo $arr_lihat1['kd_brg']; ?>" /></td>
		</tr>
      
           
		<tr><td>Nama Pesanan</td> <td><input type="text" name="name" value="<?php echo $arr_lihat1['nama_brg']; ?>" /></td>
   </tr>
        <tr><td>Harga</td><td><input type="text" name="hrg" value="<?php echo $arr_lihat1['harga']; ?>"  /></td>
     </td></tr>
        <tr><td>Jumlah</td> <td><input type="text" name="satuan" value="<?php echo $arr_lihat1['stok']; ?>" /></td>
 </tr>
    
    
    <tr>
    	<td colspan="4" align="center"><input type="submit" value="Update" /> &nbsp;&nbsp; <input type="reset" value="Hapus" />&nbsp;&nbsp;<a href="index.php"><br><br>&lt;&lt; Back TO INDEX</a></td>
    </tr>
</table>
</form>
</div>
</div>

	<!-- main ends --> </div><!-- footer-columns ends --> </div>
<div id="footer-bottom">
<p> © 2018 <strong>Your Company</strong> | Design
by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>