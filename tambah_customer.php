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
    <h1>TAMBAH DATA PELANGGAN</h1>
    <form action="simpan_customer.php" method="post">
      <table>
        <tr>
          <td>No. Meja</td>
          <td>:</td>
          <td><input type="text" name="idcustomer" placeholder="No. Meja" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required></td>
        </tr>
		<tr>
          <td>tanggal Masuk</td>
          <td>:</td>
          <td><input type="date" name="tanggal" placeholder="Tanggal"></td>
        </tr>
        <tr>
          <td>Nama Pelanggan</td>
          <td>:</td>
          <td><input type="text" name="namacustomer" placeholder="Nama Pelanggan" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required></td>
        </tr>
        <tr>
          <td>Pilihan Makanan</td>
          <td>:</td>
          <td><input type="text" name="pilihanmakanan" placeholder="Makanan" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required></td>
        </tr>
        <tr>
          <td>Pilihan Minuman</td>
          <td>:</td>
          <td><input type="text" name="pilihanminuman" placeholder="Minuman" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required></td>
        </tr>
		<tr>
          <td>Alamat Pelanggan</td>
          <td>:</td>
          <td><textarea name="alamatcustomer" cols="20px" rows="5px" placeholder="RT/RW Kel/Kec Kota/Kabupaten/Kode Pos"></textarea></td>
        </tr>
		
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
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
</body>

</html>