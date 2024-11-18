<input type="hidden" name="arg" value="<?= encrypt_url($l->id) ?>">
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Pemilik</label>
	<div class="col-sm-9">
		<input type="text" required class="form-control" value="<?= $l->pemilik ?>" name="pemilik" id="pemilik">
	</div>
</div>
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Jenis Ternak</label>
	<div class="col-sm-9">
		<select name="ternak" required class="form-control sl2">
			<option value="<?php echo $l->ternak ?>"><?php echo $l->ternak ?></option>
			<option value="Ayam Daging">Ayam Daging</option>
			<option value="Ayam Kampung">Ayam Kampung</option>
			<option value="Ayam Petelur">Ayam Petelur</option>
			<option value="Babi">Babi</option>
			<option value="Bebek">Bebek</option>
			<option value="Kambing">Kambing</option>
			<option value="Sapi">Sapi</option>
			<option value="Sapi & Ayam Petelur">Sapi & Ayam Petelur</option>
			<option value="Sapi & Ayam Pedaging">Sapi & Ayam Pedaging</option>
			<option value="Babi & Ayam Petelur">Babi & Ayam Petelur</option>
			<option value="Babi & Ayam Pedaging">Babi & Ayam Pedaging</option>
			<option value="Babi & Ayam Kampung">Babi & Ayam Kampung</option>
			<option value="Babi & Sapi">Babi & Sapi</option>
		</select>
	</div>
</div>
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Populasi</label>
	<div class="col-sm-9">
		<input type="text" required class="form-control" name="populasi" value="<?= $l->populasi ?>" id="populasi">
	</div>
</div>
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Alamat</label>
	<div class="col-sm-9">
		<textarea name="alamat" required class="form-control"><?= $l->alamat ?></textarea>
	</div>
</div>

<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Luas</label>
	<div class="col-sm-9">
		<input type="text" class="form-control" required name="luas" value="<?= $l->luas ?>">
	</div>
</div>
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Latitude</label>
	<div class="col-sm-9">
		<input type="number" class="form-control" required disabled="" name="x" id="x-edit" value="<?= $l->x ?>">
	</div>
</div>
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Longitude</label>
	<div class="col-sm-9">
		<input type="number" class="form-control" required disabled="" name="y" id="y-edit" value="<?= $l->y ?>">
	</div>
</div>
<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Ubah Lokasi ?</label>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-md-4">
				<input type="checkbox" id="cek_loc_edit" name="cek_loc_edit" value="" onchange="view_loc_edit()" placeholder="">
			</div>
		</div>
	</div>
</div>
<div class="form-group" id="frm_maps" style="display: none;">
	<div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%;">
		<iframe id="maps_frame_edit" class="embed-responsive-item" src="<?= site_url('Admin/maps_add') ?>" allowfullscreen></iframe>
	</div>
	<button type="button" class="btn btn-block btn-success" onclick="document.getElementById('maps_frame_edit').contentWindow.location.reload();"><i class="fa fa-refresh"></i> Reload Location</button>
</div>

<div class="form-group row align-items-center">
	<label for="gudang" class="col-sm-3 col-form-label">Ubah Foto ?</label>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-md-4">
				<input type="checkbox" id="cek_foto" name="cek_foto" value="" onchange="view_up_foto()" placeholder="">
				<input type="hidden" id="cek_list" name="cek_list" value="" placeholder="">
			</div>
			<div class="col-md-8" style="display: none;" id="foto_frm">
				<input type="file" name="foto" value="" placeholder="">
			</div>
		</div>
	</div>
</div>

<script>
	view_up_foto()
	view_loc_edit()
	$('.sl2').select2({
		theme: 'bootstrap4'
	});
	function view_up_foto()
	{
		if( $('#cek_foto').is(':checked'))
		{
			$('#cek_list').val('Y');
			$('#foto_frm').show();
		}
		else
		{
			$('#cek_list').val('N');
			$('#foto_frm').hide();

		}
	}

	function view_loc_edit()
	{
		let x = $('#x-edit')
		let y = $('#y-edit')
		let tmp_x = '<?= $l->x ?>';
		let tmp_y = '<?= $l->y ?>';
		var iframe = document.getElementById('maps_frame_edit');
		var iframeContent = iframe.contentDocument || iframe.contentWindow.document;
		if( $('#cek_loc_edit').is(':checked'))
		{
			$('#frm_maps').show();
			var x_loc = iframeContent.getElementById('lat').value;
			var y_loc = iframeContent.getElementById('lng').value;
			$('#x-edit').val(x_loc)
			$('#y-edit').val(y_loc)
		}
		else
		{

			x.val(tmp_x);
			y.val(tmp_y);
			let loc = {
				coords : {
					latitude : tmp_x,
					longitude : tmp_y
				}
			}
			// iframe.contentWindow.showPosition(loc)
			$('#frm_maps').hide();

		}
	}
	
	function insertAfter(referenceNode, newNode) {
	  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
	}
	document.querySelectorAll("input[type='file']").forEach((inputEl) => {
		inputEl.setAttribute("onchange","compressImage(this,'#"+inputEl.name+"')")
		inputEl.setAttribute("accept","image/*")
		var new_hidden = document.createElement('input');
		new_hidden.setAttribute('name',inputEl.name);
		new_hidden.setAttribute('id',inputEl.name);
		new_hidden.setAttribute('type','hidden');
		insertAfter(inputEl, new_hidden);
	});



	function cc_edit()
	{
		var iframe = document.getElementById('maps_frame_edit');
		var iframeContent = iframe.contentDocument || iframe.contentWindow.document;
		var x = iframeContent.getElementById('lat').value;
		var y = iframeContent.getElementById('lng').value;
		$('#x-edit').val(x)
		$('#y-edit').val(y)
	}
</script>