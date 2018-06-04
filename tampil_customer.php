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
<h2><a href="index.php" title=""></a></h2>
<p class="post-info">Boss <a href="index.php">Ardhiyan Azizi</a></p><br>
    <meta charset="utf-8">
	<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","reszi");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}


$sql = "SELECT * FROM customer";

if(isset($_POST['search_query'])){
  $qcari=$_POST['search_query'];
  $sql="SELECT * FROM  customer where tanggal like '%$qcari%' or namacustomer like '%$qcari' or alamatcustomer like '%$qcari' ";
}
/*
if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  customer where tanggal between '$qcari' and '$qcari2'";
}
*/
if(isset($_POST['reset'])){
  
  $sql="SELECT * FROM  customer ";
}
$data = $konek->query($sql);

echo "<a href='order.php'>Kembali ke Menu</a>";
echo "<h1>Daftar customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No. Meja</td><td>Tanggal</td><td>Nama Pelanggan</td><td>Alamat Pelanggan</td><td>Pilihan Makanan</td><td>Pilihan Minuman</td><td colspan=2>Update</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['tanggal']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td>".$row['pilihanmakanan']."</td>";
    echo "<td>".$row['pilihanminuman']."</td>";
    echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
<!-- main ends --> </div>
<div id="sidebar">
<h3>Search Box</h3>
<form action=" " method="POST" class="searchform">
<p> <input name="search_query" class="textbox" type="text" /> <input name="search" class="button" value="Search" type="submit" /> </p>
<br><input name="reset" class="button" value="Reset" type="submit" /> 
</form>
<!-- footer-columns ends --> </div>
<div id="footer-bottom">
<p> © 2018 <strong>Your Company</strong> | Design
by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>
