<!-- jQuery  -->
<script src="<?= base_url() ?>asset/admin/js/jquery.min.js"></script>
<script src="<?= base_url() ?>asset/admin/js/popper.min.js"></script>
<script src="<?= base_url() ?>asset/admin/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/admin/js/modernizr.min.js"></script>
<script src="<?= base_url() ?>asset/admin/js/detect.js"></script>
<script src="<?= base_url() ?>asset/admin/js/fastclick.js"></script>
<script src="<?= base_url() ?>asset/admin/js/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>asset/admin/js/jquery.blockUI.js"></script>
<script src="<?= base_url() ?>asset/admin/js/waves.js"></script>
<script src="<?= base_url() ?>asset/admin/js/jquery.nicescroll.js"></script>
<script src="<?= base_url() ?>asset/admin/js/jquery.scrollTo.min.js"></script>

<script src="<?= base_url() ?>asset/admin/plugins/skycons/skycons.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/raphael/raphael-min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/morris/morris.min.js"></script>

<script src="<?= base_url() ?>asset/admin/pages/dashborad.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url() ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>asset/admin/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url() ?>asset/admin/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>asset/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url() ?>asset/admin/pages/datatables.init.js"></script>


<!-- App js -->
<script src="<?= base_url() ?>asset/admin/js/app.js"></script>
<script>
	/* BEGIN SVG WEATHER ICON */
	if (typeof Skycons !== 'undefined') {
		var icons = new Skycons({
				"color": "#fff"
			}, {
				"resizeClear": true
			}),
			list = [
				"clear-day", "clear-night", "partly-cloudy-day",
				"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
				"fog"
			],
			i;

		for (i = list.length; i--;)
			icons.set(list[i], list[i]);
		icons.play();
	};

	// scroll

	$(document).ready(function () {

		$("#boxscroll").niceScroll({
			cursorborder: "",
			cursorcolor: "#cecece",
			boxzoom: true
		});
		$("#boxscroll2").niceScroll({
			cursorborder: "",
			cursorcolor: "#cecece",
			boxzoom: true
		});

	});

</script>
<script>
	function tambahPengalaman(){
		$('#modal-title').text('Tambah Pengalaman Kerja');
		$('#modal-submit').text('Tambah');
		$('#form-modal').attr('action','<?= base_url('add-pengalaman-kerja')?>');
		$('#form-modal-hapus-button').hide();

		$('#modal-id').val('');
		$('#modal-nama').val('');
		$('#modal-dari').val('');
		$('#modal-sampai').val('');
		$('#modal-tempat').val('');
		$('#modal-kota').val('');
		$('#modal-deskripsi').val('');
	}
	
	function ubahPengalaman(id){
		$.ajax({
			type: 'post',
			url: '<?= base_url("only-one-pengalaman-kerja")?>',
			data: {
				id: id
			},
			success: function(res){
				let json = JSON.parse(res);

				$('#modal-title').text('Ubah Pengalaman Kerja');
				$('#modal-submit').text('Ubah');
				$('#form-modal').attr('action','<?= base_url('update-pengalaman-kerja')?>');
				$('#form-modal-hapus-button').show();
				$('#id-hapus-pengalaman-kerja').val(id);
				
				$('#modal-id').val(json.id);
				$('#modal-nama').val(json.nama);
				$('#modal-dari').val(json.tgl_dari);
				$('#modal-sampai').val(json.tgl_sampai);
				$('#modal-tempat').val(json.tempat);
				$('#modal-kota').val(json.kota);
				$('#modal-deskripsi').val(json.deskripsi);
			}
		});
	}
	
	function tambahPendidikan(){
		$('#modal-title').text('Tambah Pendidikan');
		$('#modal-submit').text('Tambah');
		$('#form-modal').attr('action','<?= base_url('add-riwayat-pendidikan')?>');
		$('#form-modal-hapus-button').hide();

		$('#modal-id').val('');
		$('#modal-jenjang').val('');
		$('#modal-tahun-alumni').val('');
		$('#modal-instansi').val('');
		$('#modal-deskripsi').val('');
	}
	
	function ubahPendidikan(id){
		$.ajax({
			type: 'post',
			url: '<?= base_url("only-one-riwayat-pendidikan")?>',
			data: {
				id: id
			},
			success: function(res){
				let json = JSON.parse(res);
				$('#modal-title').text('Ubah Pendidikan');
				$('#modal-submit').text('Ubah');
				$('#form-modal').attr('action','<?= base_url('update-riwayat-pendidikan')?>');
				$('#form-modal-hapus-button').show();
				$('#id-hapus-riwayat-pendidikan').val(id);
				
				$('#modal-id').val(json.id);
				$('#modal-jenjang').val(json.jenjang);
				$('#modal-tahun-alumni').val(json.tahun_alumni);
				$('#modal-instansi').val(json.instansi);
				$('#modal-deskripsi').val(json.deskripsi);
			}
		});
	}

	function tambahService(){
		$('#modal-title').text('Tambah Service');
		$('#modal-submit').text('Tambah');
		$('#form-modal').attr('action','<?= base_url('add-service')?>');
		$('#form-modal-hapus-button').hide();

		$('#modal-id').val('');
		$('#modal-judul').val('');
		$('#modal-icon').val('');
		$('#modal-deskripsi').val('');
	}
	
	function ubahService(id){
		$.ajax({
			type: 'post',
			url: '<?= base_url("only-one-service")?>',
			data: {
				id: id
			},
			success: function(res){
				let json = JSON.parse(res);
				$('#modal-title').text('Ubah Service');
				$('#modal-submit').text('Ubah');
				$('#form-modal').attr('action','<?= base_url('update-service')?>');
				$('#form-modal-hapus-button').show();
				$('#id-hapus-service').val(id);
				
				$('#modal-id').val(json.id);
				$('#modal-judul').val(json.judul);
				$('#modal-icon').val(json.icon);
				$('#modal-deskripsi').val(json.deskripsi);
			}
		});
	}

	function skill(id, nama) {
		$('#id-hapus-skill').val(id);
		$('#id-ubah-skill').val(id);
		$('#nama-ubah-skill').val(nama);
	}

</script>

<!-- <script src="<?= base_url()?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function () {
		$('#datatable').DataTable();
	});

</script>
</body>

</html>
