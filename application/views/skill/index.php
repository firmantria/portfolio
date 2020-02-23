<div class="page-content-wrapper ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group float-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="<?= base_url()?>cms"><b>Admin</b></a></li>
							<li class="breadcrumb-item active">Skill</li>
						</ol>
					</div>
					<h4 class="page-title">Skill</h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col">
				<div class="button-items">
               <?php for ($i=0; $i < count($skill); $i++):?>
					<button type="button" onclick="skill('<?= base64_encode($skill[$i]['id'])?>', '<?= $skill[$i]['nama']?>')" class="btn btn-primary waves-effect waves-light"
						data-toggle="modal" data-target="#ubahSkill"><?= $skill[$i]['nama']?></button>
               <?php endfor?>
				</div>
			</div>
		</div>
		<div class="row card-row" style="margin-top: 25px;">
			<div class="col-lg-6">
				<div class="card m-b-30">
					<div class="card-body">
						<form action="<?= base_url('add-my-skill')?>" method="post">
							<div class="form-group row">
								<label for="example-text-input" class="col-sm-3 col-form-label">Skill</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="nama" id="example-text-input" placeholder="Skill" required>
								</div>
							</div>
							<div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                           <button type="submit" onclick="" class="btn btn-outline-primary waves-effect waves-light">Tambah</button>
                        </div>
                     </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal -->
<div class="modal fade" id="ubahSkill" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle-1">Ubah Skill</h5>
            <form action="<?= base_url('delete-my-skill')?>" method="post">
               <input type="text" name="id" id="id-hapus-skill" hidden>
               <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
            </form>
			</div>
			<form action="<?= base_url('update-my-skill')?>" method="post">
				<div class="modal-body">
               <input class="form-control" type="text" name="id" id="id-ubah-skill" hidden>
					<div class="form-group row">
						<label for="example-text-input" class="col-sm-3 col-form-label">Skill</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="nama" id="nama-ubah-skill" placeholder="Skill">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Ubah</button>
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