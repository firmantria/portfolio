<div class="page-content-wrapper ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					
				<button style="float:right; margin-top: -6px;" type="button" data-toggle="modal" data-target="#modalPengalamanKerja"
							class="btn btn-primary m-b-10 m-l-10 waves-effect waves-light" onclick="tambahPengalaman()" >
							<i class="ion ion-plus"></i> Tambah Pengalaman Kerja
						</button>
					<h4 class="page-title">Pengalaman Kerja</h4>
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
									<th width="100px">Nama</th>
									<th width="100px">Tgl. Dari</th>
									<th width="100px">Tgl. Sampai</th>
									<th width="200px">Tempat</th>
									<th width="100px">Kota</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php for ($i=0; $i < count($kerja); $i++):?>
								<tr>
									<td><?= $kerja[$i]['nama']?></td>
									<td><?= $kerja[$i]['tgl_dari']?></td>
									<td><?= $kerja[$i]['tgl_sampai']?></td>
									<td><?= $kerja[$i]['tempat']?></td>
									<td><?= $kerja[$i]['kota']?></td>
									<td>
										<button type="button" data-toggle="modal" onclick="ubahPengalaman('<?= base64_encode($kerja[$i]['id'])?>')"
											data-target="#modalPengalamanKerja"
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
<div class="modal fade" id="modalPengalamanKerja" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-title">Ubah Pengalaman Kerja</h5>
				<form id="form-modal-hapus-button" action="<?= base_url('delete-pengalaman-kerja')?>" method="post">
					<input type="text" name="id" id="id-hapus-pengalaman-kerja" hidden>
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
				</form>
			</div>
			<form id="form-modal" action="<?= base_url('pengalaman-kerja/3')?>" method="post">
				<div class="modal-body">
					<input class="form-control" type="text" name="id" id="modal-id" hidden>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="nama" id="modal-nama" placeholder="Nama" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Dari</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="dari" id="modal-dari" placeholder="Tanggal Dari" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Sampai</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="sampai" id="modal-sampai" placeholder="Tanggal Sampai"
								required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Tempat</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="tempat" id="modal-tempat" placeholder="Tempat" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Kota</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="kota" id="modal-kota" placeholder="Kota" required>
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
