<html>
<head></head>
<body>
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
<center>

<h1>Daftar Pesanan </h1>
<h4>Pencarian (Nama/Tgl/Alamat)</h4>
<form action="" method="POST">
<input type="text" name="qcari">
<input type="submit" id="submit" name="submit" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<h4>Pencarian (Tgl Awal - Tgl Akhir)</h4>
<form action="" method="POST">
<input type="date" name="tglawal">
<input type="date" name="tglakhir">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>

<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "reszi";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM pesan";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  pesan where username like '%$qcari%' or tanggal like '%$qcari' or alamat like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  pesan where tanggal between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  pesan ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
echo "<table border='1'>";
//echo "<table allign='center'>";
echo "<tr><td>No.</td><td>ID Pesanan</td><td>Nama Pelanggan</td><td>Alamat</td><td>Tanggal Pesan</td><td>Total Barang</td><td>Total Biaya</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id_pesanan']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['tanggal']."</td>";
	echo "<td>".$row['totalbarang']."</td>";
	echo "<td>".$row['bayar']."</td>";
    echo "<td><a href='struck.php?user=".$row['id_pesanan']."'>Cetak</a></td>";
    echo "<td><a href='delete_pesan.php?id_pesanan=".$row['id_pesanan']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();

?>
<script>
function cetak(){
var tombol=document.getElementById("tombol");
tombol.innerHTML=' ';
window.print();
}

</script>
<a href = " " onclick="javascript:cetak()" id="tombol">CETAK</a>
<div id="footer-bottom">
<p> © 2018 <strong>Your Company</strong> | Design
by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>

</body>
</html>