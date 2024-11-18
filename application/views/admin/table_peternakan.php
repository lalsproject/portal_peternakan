<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="col-md-4">
	<div class="card">
		<div class="card-header bg-primary">
			<strong>Tambah Data Peternakan</strong>
		</div>
		<form action="" id="frm_simpan" method="post" accept-charset="utf-8">
			<div class="card-body">
				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Pemilik</label>
					<div class="col-sm-9">
						<input type="text" required class="form-control"  name="pemilik" id="pemilik">
					</div>
				</div>
				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Jenis Ternak</label>
					<div class="col-sm-9">
						<select name="ternak" required class="form-control sl2Home">
							<option value="">Pilih</option>
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
						<input type="text" required class="form-control" name="populasi"  id="populasi">
					</div>
				</div>
				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<textarea name="alamat" required class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Luas</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" required name="luas">
					</div>
				</div>
				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Latitude</label>
					<div class="col-sm-9">
						<input type="number" step="0.0000000001"  readonly="" class="form-control" required name="x" id="x">
					</div>
				</div>
				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Longitude</label>
					<div class="col-sm-9">
						<input type="number"step="0.0000000001" readonly="" class="form-control" required name="y" id="y">
					</div>
				</div>
				<div class="form-group">
					<div class="embed-responsive embed-responsive-16by9" style="width: 100%;height: 100%;">
						<iframe id="maps_frame" class="embed-responsive-item" src="<?= site_url('Admin/maps_add') ?>" allowfullscreen></iframe>
					</div>
					<button type="button" class="btn btn-block btn-success" onclick="document.getElementById('maps_frame').contentWindow.location.reload();"><i class="fa fa-refresh"></i> Reload Location</button>
				</div>
				<div class="form-group row align-items-center">
					<label for="gudang" class="col-sm-3 col-form-label">Foto</label>
					<div class="col-sm-9">
						<input type="file" name="foto_new" required value="" placeholder="">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<div class="col-md-8">
	<div class="card">
		<div class="card-header bg-primary">
			<strong>Data Peternakan</strong>
		</div>
		<div class="card-body">
			<table class="table table-hover table-bordered table-striped dt" style="width: 100%;">
				<thead>
					<tr>
						<th width="3%">No</th>
						<th>Pemilik</th>
						<th>Jenis Ternak</th>
						<th>Populasi</th>
						<th>Alamat</th>
						<th>Luas</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($lokasi != null){ ?>
						<?php $no=1; foreach ($lokasi as $l){ ?>
							<tr>
								<td><center><?= $no ?></center></td>
								<td><?= $l->pemilik ?></td>
								<td><?= $l->ternak ?></td>
								<td><?= $l->populasi ?></td>
								<td><?= $l->alamat ?></td>
								<td><?= $l->luas ?></td>
								<td>
									<center>
										<a href="#" title="" data-fancybox data-src="<?= base_url() ?>assets/img/uploaded/<?= $l->pict ?>" >
											<img style="width: 50px;height: 50px;" src="<?= base_url() ?>assets/img/uploaded/<?= $l->pict ?>" alt="">
										</a>
										
									</center>
								</td>
								<td>
									<center>
										<button type="" class="btn btn-warning btn-sm" onclick="get_edit('<?= encrypt_url($l->id) ?>')"><i class="fa fa-pencil"></i></button>
										<button type="" class="btn btn-danger btn-sm" onclick="window.location='<?= site_url('hapus_ternak/'.encrypt_url($l->id)) ?>'"><i class="fa fa-trash"></i></button>
									</center>
								</td>
							</tr>
						<?php $no++;} ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h4 class="modal-title">Form Edit Peternakan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<form action="" id="simpan_frm_edit" method="post" accept-charset="utf-8">
				<div class="modal-body" id="form_view">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	$('.sl2Home').select2({
		theme: 'bootstrap4'
	});
	function insertAfterHome(referenceNode, newNode) {
	  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
	}
	document.querySelectorAll("input[name='foto_new']").forEach((inputEl) => {
		inputEl.setAttribute("onchange","compressImage(this,'#"+inputEl.name+"')")
		inputEl.setAttribute("accept","image/*")
		var new_hidden = document.createElement('input');
		new_hidden.setAttribute('name',inputEl.name);
		new_hidden.setAttribute('id',inputEl.name);
		new_hidden.setAttribute('type','hidden');
		insertAfterHome(inputEl, new_hidden);
	});
	function get_edit(arg)
	{
		$.ajax({
			url: '<?php echo site_url('edit_ternak/') ?>'+arg,
			type: 'GET',
			dataType: 'html',
			success: function(data, textStatus, xhr)
			{
				$('#modal-edit').modal('show');
				$('#form_view').html(data)
			},
			error: function(xhr, textStatus, errorThrown)
			{
				swal('error',errorThrown,'error');
			}
		});
		
	}

	$('#simpan_frm_edit').submit(function(event) {
		event.preventDefault();
		$.ajax({
			url: '<?php echo site_url('edit_ternak') ?>',
			type: 'POST',
			dataType: 'json',
			data:$(this).serializeArray(),
			success: function(data, textStatus, xhr)
			{
				// console.log(data)
				if(data.status == 'ok'){
					swal({
					   title: "Berhasil",
					   text: "Data Berhasil Ditambahkan",
					    type: "success",
					   buttons: true,
					}).then(function(){
						localStorage.clear();
						location.reload();
					});
				}
				else
				{
					swal('Warning','Data Tidak Tersimpan','warning');
				}
			},
			error: function(xhr, textStatus, errorThrown)
			{
				swal('error',errorThrown,'error');
			}
		});
	});

	$('#frm_simpan').submit(function(event) {
		event.preventDefault();
		$.ajax({
			url: '<?php echo site_url('simpan_ternak') ?>',
			type: 'POST',
			dataType: 'json',
			data:$(this).serializeArray(),
			success: function(data, textStatus, xhr)
			{
				// console.log(data)
				if(data.status == 'ok'){
					swal({
					   title: "Berhasil",
					   text: "Data Berhasil Ditambahkan",
					    type: "success",
					   buttons: true,
					}).then(function(){
						localStorage.clear();
						location.reload();
					});
				}
				else
				{
					swal('Warning','Data Tidak Tersimpan','warning');
				}
			},
			error: function(xhr, textStatus, errorThrown)
			{
				swal('error',errorThrown,'error');
			}
		});
	});

	// 	
	function cc()
	{
		var iframe = document.getElementById('maps_frame');
		var iframeContent = iframe.contentDocument || iframe.contentWindow.document;
		var x = iframeContent.getElementById('lat').value;
		var y = iframeContent.getElementById('lng').value;
		$('#x').val(x)
		$('#y').val(y)
	}
</script>		
