<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>@avvhil</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	</head>
<body>

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body">
		<script>  
		   alert("Selamat datang di galeri @avvhil");
		</script>
		<h1  align="center">Welcome to my <i>GALLERY</i></h1>
			<!--<?php
			echo ("<br>");
			$filecounter="counter.txt";
			$fl=fopen($filecounter, "r+");
			$hit = fread($fl, filesize($filecounter));
			echo "<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#FFF8DC><tr>";
			echo "<td width=250 valign=middle align=center>";
			echo "<font face=serif size=4 color=#74A371><b>";
			echo "Anda Pengunjung yang ke:";
			echo ($hit);
			echo "</b></font>";
			echo "</td>";
			echo "</tr></table>";
			fclose($fl);
			$fl=fopen($filecounter, "w+");
			$hit=$hit+1;
			fwrite($fl,$hit, strlen($hit));
			fclose($fl);
			?>-->

		<div class="gal">
			<?php
			$query = $koneksi->query("SELECT * FROM galeri ORDER BY id DESC") or die($koneksi->error);
			if($query->num_rows){
				while($row = $query->fetch_assoc()){
					echo '<a href="foto.php?id='.$row['id'].'"><img src="gallery/'.$row['nama'].'" alt=""></a>';
				}
			}
			?>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>