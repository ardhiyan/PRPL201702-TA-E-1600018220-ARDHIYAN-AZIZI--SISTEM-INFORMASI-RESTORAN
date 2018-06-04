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
<p class="post-info">Boss <a href="index.php"> Ardhiyan Azizi</a></p><br>
    <meta charset="utf-8">
	<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","reszi");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$id_karyawan=$_POST['id_karyawan'];
$pass_karyawan=$_POST['pass_karyawan'];
$user_karyawan=$_POST['user_karyawan'];
$nama_karyawan=$_POST['nama_karyawan'];
$gmail=$_POST['gmail'];


$sql = "INSERT INTO karyawan(id_karyawan, pass_karyawan, user_karyawan, nama_karyawan, gmail) VALUES ('$id_karyawan','$pass_karyawan','$user_karyawan','$nama_karyawan','$gmail')";

if($konek->query($sql)){
  echo "data karyawan BERHASIL dibuat!<br/>";
}else{
  echo "data karyawan GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tampil_karyawan.php'>Daftar Karyawan</a>";
?>

<br><a href="order.php">Kembali Ke Menu</a>
<!-- main ends --> </div>
<div id="sidebar">
<h3>Search Box</h3>
<form action="#" class="searchform">
<p> <input name="search_query" class="textbox" type="text" /> <input name="search" class="button" value="Search" type="submit" /> </p>
</form>
<h3>Sidebar Menu</h3>
<ul class="sidemenu">
<li><a href="index.html">Home</a></li>
<li><a href="index.php">Order</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="galery.php">Galery</a></li>
</ul>
<h3>Links</h3>
<ul class="sidemenu">
<li><a href="http://www.pdphoto.org/">Tutorial Photoshop</a></li>
<li><a href="http://www.squidfingers.com/patterns/">Turorial CorelDraw</a></li>
<li><a href="http://www.alistapart.com">Tutorial C++</a></li>
<li><a href="http://www.cssremix.com">Tutorial Java</a></li>
<li><a href="http://www.cssmania.com">Seni Teknik Hacking</a></li>
</ul>
<!-- footer-columns ends --> </div>
<div id="footer-bottom">
<p> © 2018 <strong>Your Company</strong> | Design
by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>