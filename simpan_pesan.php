<?php
 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "reszi";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//$idpelanggan = $_POST['idpelanggan'];  
$username = $_POST['username'];
$tanggal = $_POST['tanggal'];
$bayar = $_POST['bayar'];
$alamat = $_POST['alamat'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];
$order6 = $_POST['order6'];
$order7 = $_POST['order7'];
$order8 = $_POST['order8'];
$order9 = $_POST['order9'];
$order10 = $_POST['order10'];
$order11 = $_POST['order11'];
$order12 = $_POST['order12'];

$totalbarang = $_POST['totalbarang'];

 //echo"Bayar =  $bayar";
 
$sql = "INSERT INTO pesan (username,alamat,tanggal,menu1,menu2,menu3,menu4,menu5,menu6,menu7,menu8,menu9,menu10,menu11,menu12,totalbarang,bayar)VALUES ('$username','$alamat','$tanggal','$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12','$totalbarang','$bayar')";

//,'$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12'
//,101,102,103,104,201,202,203,204,301,302,303,304
if($konek->query($sql)){
  echo " <center><h1>Pemesanan telah Berhasil</h1></center>
  <script type='text/javascript'>
	setTimeout(function () { 
	
		swal({
            title: 'Pemesanan telah Berhasil',
            text:  '$username',
            type: 'success',
            timer: 50,
            showConfirmButton: true
        });		
	},10);	
	window.setTimeout(function(){ 
		window.location.replace('tampil_pesan.php');
	} ,3000);	
  </script>";
  //header("location: tampil_pesan.php");
}else{
  echo "Data customer GAGAL ditambah : ".$konek->error."<br/>";
}

?>