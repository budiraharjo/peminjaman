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
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="admin.php">Dinas Pertanian Kabupaten Pandeglang</a></h1>
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
include "menu_admin.php";
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
									
						case 'lap_peminjaman':
						include "halaman/lap_peminjaman.php";
						break;
						
						case 'laporan_kembali':
						include "halaman/laporan_pengembalian.php";
						break;
						
						case 'pinjam':
						include "halaman/pinjam.php";
						break;
						
						case 'pengembalian':
						include "halaman/kembali.php";
						break;
						
						case 'input':
						include "halaman/input_barang.php";
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

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
