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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Barang</title>

	
</style>
</head>
<h1 align="center">Searching</h1>
<div style="width:100%">
	<div align="center">
    	<div style="width:600px;">
        	<div style="width:600px; float:left">
            <table align="center" border="1" width="600">
            <tr id="td">
                <td>No.</td>
                <td>Kode Pemesan</td>
                <td>Nama Pesanan</td>
                <td>Harga</td>
                <td>Jumlah</td>
            </tr>
            <?php
            
            $kd_brg = $_POST['kd_brg'];
				if($kd_brg !=''){
			
			$lihat = mysql_query("select *,format(harga,0) as 'harga' from barang where kd_brg = '$kd_brg' or nama_brg like '%$kd_brg%' or harga = '$kd_brg' or stok = '$kd_brg'");
				}
				else {
				
			$lihat = mysql_query("select * from barang ");
				}
				$no = 1;	
			while($hasil = mysql_fetch_array($lihat))
            {
                echo "<tr>
                        <td>".$no."</td>
                        <td>".$hasil['kd_brg']."</td>
                        <td>".$hasil['nama_brg']."</td>
                        <td>Rp.".$hasil['harga']."</td>
                        <td>".$hasil['stok']."</td>
                      </tr>
                ";
                $no ++;
            }
				
				
            ?>
			
	        </table>
            </div>
        </div>
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