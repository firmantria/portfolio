<div class="page-content-wrapper ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					
				<button style="float:right; margin-top: -6px;" type="button" data-toggle="modal" data-target="#modalPendidikan"
							class="btn btn-primary m-b-10 m-l-10 waves-effect waves-light" onclick="tambahPendidikan()" >
							<i class="ion ion-plus"></i> Tambah Pendidikan
						</button>
					<h4 class="page-title">Pendidikan</h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<table id="datatable" class="table table-hover table-responsive">
							<thead class="thead-light">
								<tr>
									<th width="300px">Nama</th>
									<th width="300px">Tahun Alumni</th>
									<th width="300px">Instansi</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php for ($i=0; $i < count($pendidikan); $i++):?>
								<tr>
									<td><?= $pendidikan[$i]['jenjang']?></td>
									<td><?= $pendidikan[$i]['tahun_alumni']?></td>
									<td><?= $pendidikan[$i]['instansi']?></td>
									<td>
										<button type="button" data-toggle="modal" onclick="ubahPendidikan('<?= base64_encode($pendidikan[$i]['id'])?>')"
											data-target="#modalPendidikan"
											class="btn btn-warning m-b-10 m-l-10 waves-effect waves-light">
											<i class="ion ion-edit"></i>
										</button>
									</td>
								</tr>
								<?php endfor?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row card-row" style="margin-top: 25px;">
	</div>
</div>
<!-- modal -->
<div class="modal fade" id="modalPendidikan" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-title">Ubah Pendidikan</h5>
				<form id="form-modal-hapus-button" action="<?= base_url('delete-riwayat-pendidikan')?>" method="post">
					<input type="text" name="id" id="id-hapus-riwayat-pendidikan" hidden>
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
				</form>
			</div>
			<form id="form-modal" action="<?= base_url('riwayat-pendidikan/3')?>" method="post">
				<div class="modal-body">
					<input class="form-control" type="text" name="id" id="modal-id" hidden>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Jenjang</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="jenjang" id="modal-jenjang" placeholder="Jenjang" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Tahun Alumni</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="tahun-alumni" id="modal-tahun-alumni" placeholder="Tahun Alumni" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Instansi</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="instansi" id="modal-instansi" placeholder="Instansi" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi" id="modal-deskripsi" cols="30" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="modal-submit" class="btn btn-primary">Ubah</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<footer class="footer">
	<b>© 2018 Annex by Mannatthemes.</b>
</footer>
</div>
</div>
