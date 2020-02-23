<div class="page-content-wrapper ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					
				<button style="float:right; margin-top: -6px;" type="button" data-toggle="modal" data-target="#modalService"
							class="btn btn-primary m-b-10 m-l-10 waves-effect waves-light" onclick="tambahService()" >
							<i class="ion ion-plus"></i> Tambah Service
						</button>
					<h4 class="page-title">Service</h4>
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
									<th width="150px">Judul</th>
									<th width="150px">Icon</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php for ($i=0; $i < count($service); $i++):?>
								<tr>
									<td><?= $service[$i]['judul']?></td>
									<td><?= $service[$i]['icon']?></td>
									<td>
										<button type="button" data-toggle="modal" onclick="ubahService('<?= base64_encode($service[$i]['id'])?>')"
											data-target="#modalService"
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
<div class="modal fade" id="modalService" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-title">Ubah Service</h5>
				<form id="form-modal-hapus-button" action="<?= base_url('delete-service')?>" method="post">
					<input type="text" name="id" id="id-hapus-service" hidden>
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
				</form>
			</div>
			<form id="form-modal" action="<?= base_url('add-service')?>" method="post">
				<div class="modal-body">
					<input class="form-control" type="text" name="id" id="modal-id" hidden>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Judul</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="judul" id="modal-judul" placeholder="Judul" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Icon</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="icon" id="modal-icon" placeholder="Icon" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi" id="modal-deskripsi" cols="30" rows="8"></textarea>
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
