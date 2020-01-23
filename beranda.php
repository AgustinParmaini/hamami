<?php	
	$sql=mysqli_query($c, "select * from berita order by id_berita desc");
	while($data=mysqli_fetch_array($sql)){
		?>
		<div class="col-sm-4">
		<a style="text-decoration:none" href="?p=detail_berita&id=<?php echo $data['id_berita'] ?>">
		<div style="height:auto; border:1px solid lightgrey; border-radius:5px; margin-top:20px;">			
			<img src="berita/<?php echo $data['gambar'].".jpg" ?>" width="100%" height="200px">
			<div style="padding:10px">
			<p style="font-size:16px"><i><?php echo date('d F Y',strtotime($data['tgl_berita'])) ?></i></p>
			<p style="font-family:'arial narrow'; font-size:22px"><?php echo $data['judul'] ?></p>
			<p style="font-family:'arial narrow'; font-size:18px"><?php echo substr($data['isi'],0,180) ?></p>
			</div>
		</div>
		</a>
		</div>
		<?php
	}
?>