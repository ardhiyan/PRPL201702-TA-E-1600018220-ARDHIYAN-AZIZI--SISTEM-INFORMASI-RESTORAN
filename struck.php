<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>

	<div class="container">
		<h1> RESTORAN ZINGZONG</h1>
		<h2> BILL PAYMENT</h2>
		<h3> Jalan VETERAN No 767C , Yogyakarta</h3>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "reszi";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from pesan where id_pesanan = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['username']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> Sate Padang </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu1']*15000;
		echo "</td>";
		echo "<td>".$row['menu1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Nasi Ayam Balado </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu2']*15000;
		echo "</td>";
		echo "<td>".$row['menu2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Nasi Ayam Geprek </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu3']*15000;
		echo "</td>";
		echo "<td>".$row['menu3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Aneka Makanan Lamongan </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu4']*15000;
		echo "</td>";
		echo "<td>".$row['menu4']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Thai Tea </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu5']*7000;
		echo "</td>";
		echo "<td>".$row['menu5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Es Kepal Milo </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu6']*7000;
		echo "</td>";
		echo "<td>".$row['menu6']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Milk Shake </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu7']*7000;
		echo "</td>";
		echo "<td>".$row['menu7']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Fruit Juice</td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu8']*7000;
		echo "</td>";
		echo "<td>".$row['menu8']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> America Pie </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu9']*10000;
		echo "</td>";
		echo "<td>".$row['menu9']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Mochi </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu10']*10000;
		echo "</td>";
		echo "<td>".$row['menu10']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Brigadeiros </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu11']*10000;
		echo "</td>";
		echo "<td>".$row['menu11']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Baklava </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu12']*10000;
		echo "</td>";
		echo "<td>".$row['menu12']."</td>";
		echo "</tr>";

		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalbarang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>