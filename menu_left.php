<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="?page=pinjam"><i class="icon icon-file"></i> <span>Peminjaman</span></a> </li>
    <li><a href="?page=lapo_peminjaman"><i class="icon icon-th"></i> <span>Draft Peminjaman</span></a></li>
	
				
				<li><a href="?page=hitung"><i class="icon icon-pencil"></i> <span>Masa Kontrak</span> <span class="pull-right">&#128562;  &nbsp; &nbsp;</span></a> </li>
				
    
    
    
   <!-- <li> <a href="?page=kembali"><i class="icon icon-inbox"></i> <span>Pengembalian</span></a> </li> -->
  </ul>
</div>

<!--
<?php
				$sql1=mysqli_query($bd,"select * from user where username='$nama' ");
				
				while($data1=mysqli_fetch_array($sql1))
				{
				$si_peminjam = $data1['nama'];
				?>
				<?php
				$sql=mysqli_query($bd,"select * from peminjaman where nama_peminjam='$si_peminjam' ");
				}
				while($data=mysqli_fetch_array($sql))
				{
				?>
               
				 <?php 
				$angka =  $data['lama'];
				if ($angka >= 16)
				{ ?>
				<li><a href="?page=hitung"><i class="icon icon-pencil"></i> <span>Masa Kontrak</span> <span class="pull-right">&#x1F642  &nbsp; &nbsp;</span></a> </li>
				<?php
				} elseif ($angka >= 10){
				?>
<?php
				} else {
				?>
                 <li><a href="?page=hitung"><i class="icon icon-pencil"></i> <span>Masa Kontrak</span> <span class="pull-right">&#129324;  &nbsp; &nbsp;</span></a> </li>
                
				<?php }} ?>
-->

