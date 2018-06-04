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
    <meta charset="utf-8">
    <title>RESTORAN MASA KINI</title>
  </head>
  <body>
    <a href="order.php">Kembali Ke Menu</a>
    <h1>TAMBAH DATA PESANAN</h1>


<center>
<script language="JavaScript" type="text/javascript">
function jumlah() {
//var myForm = document.form1;
var bakso = 15000 * myForm.order1.value;
var nasgor = 15000 * myForm.order2.value;
var soto = 15000 * myForm.order3.value;
var sate = 15000 * myForm.order4.value;
var campur = 7000 * myForm.order5.value;
var tea = 7000 * myForm.order6.value;
var milk = 7000 * myForm.order7.value;
var juice = 7000 * myForm.order8.value;
var pie = 10000 * myForm.order9.value;
var mochi = 10000 * myForm.order10.value;
var brig = 10000 * myForm.order11.value;
var baklava = 10000 * myForm.order12.value;
var hasil = bakso+nasgor+soto+sate+campur+tea+milk+juice+pie+mochi+brig+baklava;
var jumlah = (bakso/15000)+(nasgor/15000)+(soto/15000)+(sate/15000)+(campur/7000)+(tea/7000)+(milk/7000)+(juice/7000)+(pie/10000)+(mochi/10000)+(brig/10000)+(baklava/10000);

	//var coba = bakso;
	//document.myForm.total.value = hasil;
	//eval(myForm.total.value = bakso);
	myForm.totalbarang.value = jumlah;
if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 20000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
<form name="myForm" method="post" action="simpan_pesan.php">
<tr>
	<td> Username </td>
	<td> : </td>
	<td> <input type="text" name="username" placeholder="Username" ><br></td>
</tr><br>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <input type="text" name="alamat" placeholder="Alamat" ></td>
</tr>
<tr>
	<td> Tanggal </td>
	<td> : </td>
	<td> <input type="date" name="tanggal"  ></td>
</tr>

<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">Pesan</font>
</tr>
<tbody>
<tr>
<td>1<td>Sate Padang<td><input type="text" value="15000" disabled="true"/><td>
<input  type="text"  name="order1" placeholder="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>Nasi Ayam Balado<td><input type="text" value="15000" disabled="true"/><td>
<input  type="text"  name="order2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>Nasi Ayam Geprek<td><input  type="text"   value="15000" disabled="true"/> <td>
<input  type="text"  name="order3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>Aneka Makanan Lamongan<td><input  type="text"   value="15000" disabled="true"/>
<td><input  type="text"  name="order4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>Thai Tea<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>6<td>Es Kepal Milo<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order6" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>7<td>Milk Shake<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order7" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>8<td>Fruit Juice<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order8" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>9<td>America Pie<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order9" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>10<td>Mochi<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order10" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>11<td>Brigadeiros<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order11" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>12<td>Baklava<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order12" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Jumlah Total<td><input type="text"  id="total" name="total" value="" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah Total Barang<td><input type="text"  id="totalbarang" name="totalbarang" value="" />
</tr>
<tr>
<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon"  />
</tr>
<tr>
<td colspan=3 align="right">Jumlah Bayar<td><input type="text" name="bayar" value="" />
</tr>
</table>
<br/>
<input type="button" value="CANCEL" onClick="resetForm()" />
<input type="submit" value="PESAN" />	

    </form>
</body>

</html>