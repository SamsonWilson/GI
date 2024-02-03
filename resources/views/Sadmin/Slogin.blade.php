@extends('layouts.Sadmin')

@section('content')
<body class="bg-theme bg-theme1">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
		 <div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="card">
						<div class="card-body">
							<div class="p-4">
								<div class="mb-4 text-center">
									<img src="assets/images/logo-icon.png" width="60" alt="" />
								</div>
								<div class="text-start mb-4">
									<h5 class="">Genrate New Password</h5>
									<p class="mb-0">We received your reset password request. Please enter your new password!</p>
								</div>
								<div class="mb-3 mt-4">
									<label class="form-label">New Password</label>
									<input type="text" class="form-control" placeholder="Enter new password" />
								</div>
								<div class="mb-4">
									<label class="form-label">Confirm Password</label>
									<input type="text" class="form-control" placeholder="Confirm password" />
								</div>
								<div class="d-grid gap-2">
									<button type="button" class="btn btn-white">Change Password</button>
									<a href="auth-basic-signin.html" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
      @endsection
