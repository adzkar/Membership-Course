<?=form_open_multipart('admin/input_modul')?>
	<div class="row">
		<div class="col-md-10">
			<div class="form-group col-md-8">
                <label>Judul Modul</label>
                <input type="text" class="form-control border-input" placeholder="Judul Modul" autofocus="" required="" name="judul">
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
                            echo "<option value='".$key['id_mentor']."'>";
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
					        <option value="basic">Basic</option>
					        <option value="advance">Advance</option>
					    </select>
            </div>
        	</div>
        	<div class="form-group col-md-8">
            	<div class="form-group">
			    <label for="sel1">Tingkat</label>
			    <select class="form-control" name="status">
			    	<option value="">-- PILIH tingkat -- </option>
			        <option value="free">FREE</option>
			        <option value="premium">PREMIUM</option>
			    </select>
            </div>
            <div class="form-group">
            	<input type="submit" value="Post" class="btn btn-primary">
            </div>
        	</div>
		</div>
	</div>

<?=form_close()?>
