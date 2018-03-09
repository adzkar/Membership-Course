<?=form_open_multipart('member/do_upload')?>
	
	<input type="hidden" name="id" value="<?=$_SESSION['id_member']?>">

	<div class="form-group">
    	<label for="" style="margin-bottom: 30px;margin-top: 30px;font-size: 20px;">Upload Bukti Pembayaran</label>
    	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" accept="image/*">
  	</div>

  	<blockquote class="blockquote">
  		N.B : <br>
		Maximal upload bukti pembayaran  2 MB
  	</blockquote>

  	<div class="form-group">
  		<input type="submit" value="Kirim" class="btn btn-primary">
  	</div>


<?=form_close()?>
