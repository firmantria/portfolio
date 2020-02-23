<div class="page-content-wrapper ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group float-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="<?= base_url()?>cms"><b>Admin</b></a></li>
							<li class="breadcrumb-item active">Inbox</li>
						</ol>
					</div>
					<h4 class="page-title">Inbox</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- end page title end breadcrumb -->
	<div class="row">
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<table class="table table-hover" id="inbox-table">
						<thead class="thead-light">
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Subjek</th>
								<th>Aksi</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row card-row" style="margin-top: 25px;">
</div>
</div>
</div>
</div>
<!-- modal -->
<div class="modal fade" id="modalPendidikan" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title">Detail Inbox</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				<div class="card">
					<div class="card-header">
						<h5 id="card-nama">Nama</h5>
					</div>
					<div class="card-body">
						<h5 class="card-title" id="card-subject">Subjek</h5>
						<label id="card-email">Email</label>
						<p class="card-text" id="card-message">Isi Pesan</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<footer class="footer">
	<b>© 2018 Annex by Mannatthemes.</b>
</footer>
</div>
</div>

<script src="<?= base_url() ?>asset/admin/js/jquery.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function () {
		$('#inbox-table').DataTable({
			ajax: '<?= base_url() ?>all-inbox',
			columns: [{
					data: 'no'
				},
				{
					data: 'nama'
				},
				{
					data: 'email'
				},
				{
					data: 'subject'
				},
				{
					// "targets": -1,
					// "data": null,
					// "defaultContent": '<button class="btn btn-warning"><i class="fa fa-eye"></i> detail</button>'
					sortable: false,
					"render": function (data, type, full, meta) {
						console.log(full);
						var detail_html = `<button onclick="getDetailPesan('`+full.id+`')" data-toggle="modal" data-target="#modalPendidikan" data-placement="top" " title="Lihat Detail" type="button" class="btn btn-warning btn-xs" >` +
							'<i class="fa fa-eye" aria-hidden="true"></i></button>';
						return detail_html;
					}
				}
			]
		});
	});


	function getDetailPesan(id){
		console.log(id);
		$.ajax({
			type: 'post',
			url: "<?= base_url() ?>detail-inbox",
			data: {
				id: id
			},
			success: function(res){
				let json = JSON.parse(res);

				$('#card-nama').text(json.nama);
				$('#card-email').text(json.email);
				$('#card-subject').text(json.subject);
				$('#card-message').text(json.message);
			}
		})
	}
</script>
