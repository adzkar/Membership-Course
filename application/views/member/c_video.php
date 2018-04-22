<div class="frame_video">
	<div class="video">
		<iframe src="<?=$isi[0]['content']?>" class="video" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="judul">
		<?=$isi[0]['judul']?>
	</div>
	<div class="time">
		<i class="fa fa-clock"></i> <?=$isi[0]['date']?>
	</div>
	<div class="author">
		<i class="fa fa-user"></i> <button type="button" data-toggle="modal" data-target="#myModal"> <?=$isi[0]['nama_mentor']?></button>

	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title mymodal-text">Author</h4>
			</div>
			<div class="modal-body mymodal-text">
				<div class="row">
					<div class="col-md-4">
						<b>Nama</b>
					</div>
					<div class="col-md-8">
						<?=$isi[0]['nama_mentor']?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<b>WA</b>
					</div>
					<div class="col-md-8">
						<?=$isi[0]['wa']?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<b>Line</b>
					</div>
					<div class="col-md-8">
						<?=$isi[0]['line']?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
