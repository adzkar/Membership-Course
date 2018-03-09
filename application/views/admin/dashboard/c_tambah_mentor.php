<?=form_open('admin/input_mentor')?>
	<div class="row">
		<div class="col-md-10">
			<div class="form-group col-md-8">
                <label>Nama Mentor</label>
                <input type="text" class="form-control border-input" placeholder="Nama Mentor" autofocus="" required="" name="nama">
            </div>
           <div class="form-group col-md-8">
                <label>Line</label>
                <input type="text" class="form-control border-input" placeholder="ID Line" autofocus="" required="" name="line">
            </div>
            <div class="form-group col-md-8">
                <label>WhatsApp</label>
                <input type="text" class="form-control border-input" placeholder="WhatsApp" autofocus="" required="" name="wa">
            </div>
        	<div class="form-group col-md-8">
                <div class="form-group">
                	<input type="submit" value="Post" class="btn btn-primary">
                </div>
        	</div>
		</div>
	</div>
    
    <blockquote class="blockquote">
        <p>N.B : <br>   Untuk kosong isikan dengan "-" ( Tanpa tanda kutip )</p>
    </blockquote>

<?=form_close()?>
