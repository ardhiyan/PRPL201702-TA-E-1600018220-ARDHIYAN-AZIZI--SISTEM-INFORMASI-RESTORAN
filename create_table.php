<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","reszi");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer VARCHAR(15) NOT NULL,
  namacustomer VARCHAR(30),
  alamatcustomer VARCHAR(50),
  pilihanmakanan VARCHAR(50),
  pilihanminuman VARCHAR(50),
  PRIMARY KEY (idcustomer)
)";

if($konek->query($sql)){
  echo "Table customer BERHASIL dibuat!<br/>";
}else{
  echo "Table customer GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
