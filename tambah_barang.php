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

<?php
	$koneksi = mysql_connect("localhost","root","") or die("Koneksi Gagal !" . mysql_error());
	$database = mysql_select_db("kasir");
	
	$kd = $_POST['kd'];
	$nama = $_POST['nama'];
	$hrg = $_POST['hrg'];
	$satuan = $_POST['satuan'];
	
	$simpan = mysql_query("insert into barang values('$kd','$nama','$hrg','$satuan')");
	$simpan_a = mysql_query("insert into stok values('$kd','$satuan')");
?>

<script type="text/javascript">
	var retVal = confirm("Data tersimpan dan Apa Anda Masih Ingin Menambah Pesanan ?");
	if( retVal == true){
      alert("Oke Silahkan Tambah Lagi");
	  document.location.href = "tambah_barang.html";
	  }
	  else{
      alert("Kembali ke daftar Pesanan!");
	  document.location.href = "index.php";
   }
</script>

	<!-- main ends --> </div><!-- footer-columns ends --> </div>
<div id="footer-bottom">
© 2018 <strong>Your Company</strong> | Design by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>