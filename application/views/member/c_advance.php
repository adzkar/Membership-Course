<?php  
	if (isset($url)) {
?>
<div class="frame_video">
	<div class="video">
		<?=$isi[0]['content']?>
	</div>
	<div class="judul">
		<?=$isi[0]['judul']?>
	</div>
	<div class="time">
		<i class="fa fa-clock-o"></i> <?=$isi[0]['date']?>
	</div>
	<div class="author">
		<i class="fa fa-user"></i> <button type="button" data-toggle="modal" data-target="#myModal"> <?=$isi[0]['author']?></button>
		
	</div>
</div>
<?php 
	} else {
?>
<h3>Anda dapat mengakses konten berikut : </h3>
<ul>
<?php
	for($i = 0;$i < count($content)-1;++$i) {
		echo "<li>".anchor("member/dashboard/$page/".$content[$i]['link'],$content[$i]['judul'])."</li>";
	}// punya for
?>
</ul>
<?php
	}
?>
