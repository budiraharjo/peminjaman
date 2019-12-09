<?php
include("db.php");
include "auth.php";
$nama = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dinas Pertanian Kabupaten Pandeglang</title>
<link rel="shortcut icon" type="image/png" href=" img/logo_f.PNG">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Dinas Pertanian Kabupaten Pandeglang</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<?php
include 'head.php';
?>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php
include "menu_left.php";
?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">


    <div class="row-fluid">
        <div class="span12">
        <div class="widget-box">
          
          
		  <?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
					switch ($page) {
						case 'home':
						include "halaman/home.php";
						break;
									
						case 'daftar_user':
						include "halaman/daftar_user.php";
						break;
									
						case 'daftar_admin':
						include "halaman/daftar_admin.php";
						break;
									
						case 'lap_gapoktan':
						include "halaman/lap_gapoktan.php";
						break;
									
						case 'lapo_peminjaman':
						include "halaman/lapo_peminjaman.php";
						break;
						
						case 'pinjam':
						include "halaman/pinjam.php";
						break;
						
						case 'kembali':
						include "halaman/kembali.php";
						break;
						
						case 'hitung':
						include "halaman/hitung.php";
						break;
						
						
												
						default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
							}
					}else{
					include "halaman/home.php";
							}
				?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php
include 'footer.php';
?>

<!--end-Footer-part-->

<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
