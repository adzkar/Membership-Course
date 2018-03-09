<?=form_open('admin/update_mentor')?>
    <input type="hidden" value="<?=$edit_mentor[0]['id_mentor']?>" name="id_mentor">
	<div class="row">
		<div class="col-md-10">
			<div class="form-group col-md-8">
                <label>Nama Mentor</label>
                <input type="text" class="form-control border-input" placeholder="Nama Mentor" autofocus="" required="" name="nama" value="<?=$edit_mentor[0]['nama_mentor']?>">
            </div>
           <div class="form-group col-md-8">
                <label>Line</label>
                <input type="text" class="form-control border-input" placeholder="ID Line" autofocus="" value="<?=$edit_mentor[0]['line']?>" required="" name="line">
            </div>
            <div class="form-group col-md-8">
                <label>WhatsApp</label>
                <input type="text" class="form-control border-input" placeholder="WhatsApp" autofocus="" value="<?=$edit_mentor[0]['wa']?>" required="" name="wa">
            </div>
        	<div class="form-group col-md-8">
                <div class="form-group">
                	<input type="submit" value="Update" class="btn btn-primary">
                </div>
        	</div>
		</div>
	</div>

    <blockquote class="blockquote">
        <p>N.B : <br>   Untuk kosong isikan dengan "-" ( Tanpa tanda kutip )</p>
    </blockquote>

<?=form_close()?>
