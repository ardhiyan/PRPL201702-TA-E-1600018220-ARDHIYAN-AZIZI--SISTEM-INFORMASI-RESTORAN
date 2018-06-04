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
	$tanggal = date('d-m-y');
?><title>Pembelian</title>
<script type="text/javascript" src="jquery-1.7.1.js"></script>

<body background="fdl.png">
<div align="center"><form action="beli_sementara.php" method="post"  enctype="multipart/form-data">
<table align="center" width="600">
	<tr>
    	<td colspan="2" align="center"><h2>PEMESANAN</h2></td>
    </tr>
    <tr>
    	<td>Jumlah Pesanan</td>
        <td><input type="text" name="jlh_brg"  onKeyPress="return goodchars(event,'12345678990',this)" title="Isi Dengan Angka" required /></td>       
    </tr>
    <tr>
         <td>Nama Pemesan</td>
         <td><input type="text" name="id" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required /><input type="hidden" name="tgl"  value="<?php echo $tanggal ?>" /></td>
   </tr>
   <tr>
   		<td colspan="2"><input type="submit"  value="LIHAT" /><br><br>&nbsp;&nbsp;&lt;&lt; <a href="index.php">Back To INDEX</a></td>
   </tr>
</table>
</form>
</div></div>
</body>
</html>


<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>

	<!-- main ends --> </div><!-- footer-columns ends --> </div>
<div id="footer-bottom">
<p> © 2018 <strong>Your Company</strong> | Design
by: <a href="#">Ardhiyan Azizi</a>
</div><!-- footer ends--></div>
<!-- wrap ends here -->
</div>
</body></html>