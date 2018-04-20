<?=form_open_multipart('admin/update_modul')?>

<input type="hidden" value="<?=$edit_modul[0]['id_modul']?>" name="id_modul">
	<div class="row">
		<div class="col-md-10">
			<div class="form-group col-md-8">
                <label>Judul Modul</label>
                <input type="text" class="form-control border-input" value="<?=$edit_modul[0]['judul_modul']?>" placeholder="Judul Modul" autofocus="" required="" name="judul">
            </div>
						<div class="form-group col-md-8">
            	<div class="form-group">
			    		<label for="sel1">Upload Modul</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="filemodul" accept=".pdf,.doc,.docx">
            </div>
        	</div>
            <div class="form-group col-md-6">
                <label>Author</label>
                <select class="form-control" name="id_mentor">
                    <option value="">-- PILIH MENTOR -- </option>
                    <?php
											foreach ($daftar_mentor as $key) {
													echo "<option value='".$key['id_mentor']."'";
													if ($key['id_mentor'] == $edit_modul[0]['id_mentor']) {
															echo "selected";
													}
													echo ">";
													echo $key['nama_mentor'];
													echo "</option>";
											}
                    ?>
                </select>
            </div>
            <div class="form-group col-md-8">
            	<div class="form-group">
			    		<label for="sel1">Kategori</label>
							<select class="form-control" name="kategori">
					    	<option value="">-- PILIH KATEGORI -- </option>
					        <option value="basic" <?php
		                        if ($edit_modul[0]['kategori'] == 'basic') echo "selected";
		                    ?>>Basic</option>
					        <option value="Advance" <?php
		                        if ($edit_modul[0]['kategori'] == 'Advance') echo "selected";
		                    ?>>Advance</option>
					    </select>
            </div>
        	</div>
        	<div class="form-group col-md-8">
            	<div class="form-group">
			    <label for="sel1">Tingkat</label>
					<select class="form-control" name="status">
			    	<option value="">-- PILIH tingkat -- </option>
			        <option value="free" <?php
                        if ($edit_modul[0]['status'] == 'free') echo "selected";
                    ?>>FREE</option>
			        <option value="premium" <?php
                        if ($edit_modul[0]['status'] == 'premium') echo "selected";
                    ?>>PREMIUM</option>
			    </select>
            </div>
            <div class="form-group">
            	<input type="submit" value="Update" class="btn btn-primary">
            </div>
        	</div>
		</div>
	</div>

<?=form_close()?>
