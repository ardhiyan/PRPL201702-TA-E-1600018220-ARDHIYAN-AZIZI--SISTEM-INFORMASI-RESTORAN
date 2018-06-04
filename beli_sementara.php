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
<body  background="fdl.png">
<div align="center"><table align="center" width="600">
			<tr>
            	<td align="center" colspan="2"><h2>SIMPAN DAN CETAK</h2></td>
            </tr>
			<form method='post' enctype="multipart/form-data" action='proses.php' id='form2'>
                <tr>
                	<td>Kode Pesanan</td>
                    <td>Jumlah</td>
                </tr>
            <?php 
			$jumlah = $_POST['jlh_brg'];
			
			for($a = 1; $a <= $jumlah; $a++)
			{
				$b[$a] = $_POST['id'];
				$c[$a] = $_POST['tgl'];
			}
			
			
			for($i = 1; $i <= $jumlah; $i++)
			{
               echo "<tr>
                	<td><select name='kd".$i."'>";
				$lihat = mysql_query("select * from Barang");
				while($data = mysql_fetch_array($lihat))
				{
					echo "<option value=".$data['kd_brg'].">".$data['kd_brg']."<option>";
				}
			
        	echo "</select></td>
				<td><input type='text' name='satuan".$i."' /><input type='hidden' name='jlh_angka' value='".$jumlah."' /><input type='hidden' name='id_pembeli".$i."' value='$b[$i]' /><input type='hidden' name='tgl_beli".$i."' value='$c[$i]' /></td>
                </tr>";
			}
			?>
            <tr>
            	<td colspan="2"><br><input type="submit" value="Kirim" /></td>
            </tr>
            </form>
</table>
</div></div>


	<!-- main ends --> </div><!-- footer-columns ends --> </div>
<div id="footer-bottom">
<p> © 2018 <strong>Your Company</strong> | Design
by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>