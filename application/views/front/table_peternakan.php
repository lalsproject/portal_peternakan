<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="col-md-12">
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
							</tr>
						<?php $no++;} ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>