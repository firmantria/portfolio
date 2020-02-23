	<div class="accountbg"></div>
	<div class="wrapper-page">
		<div class="card">
			<div class="card-body">
				<h3 class="text-center mt-0 m-b-15">
					Login Admin
				</h3>
				<div class="p-3">
					<form class="form-horizontal m-t-20" method="post" action="<?= base_url() ?>verify">
						<div class="form-group row">
							<div class="col-12">
								<input class="form-control" name="username" type="text" placeholder="Username">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-12">
								<input class="form-control" name="password" type="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group text-center row m-t-20">
							<div class="col-12">
								<button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>