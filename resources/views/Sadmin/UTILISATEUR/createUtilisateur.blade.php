@extends('layouts.Sadmin')

@section('contenu')
<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profilep</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>John Doe</h4>
												<p class="mb-1">Full Stack Developer</p>
												<p class="font-size-sm">Bay Area, San Francisco, CA</p>
												<button class="btn btn-light">Follow</button>
												<button class="btn btn-light">Message</button>
											</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
												<span class="text-white">https://codervent.com</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
												<span class="text-white">codervent</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Full Name</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" value="" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" value="" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Phone</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" value="" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Mobile</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" value="" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Address</h6>
											</div>
											<div class="col-sm-9">
												<input type="text" class="form-control" value="" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9">
												<input type="submit" class="btn btn-light px-4" value="Save Changes" />

                                                <input type="submit" class="btn btn-light px-4" value="Save Changes" />
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
            <h6 class="mb-0 text-uppercase">Listes des Utilisateurs </h6>
				<hr/>
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-15">
							<div class="card-body text-center">
								<div class="p-4 border radius-15">
									<img src="assets/images/avatars/avatar-1.png" width="110" height="110" class="rounded-circle shadow" alt="">
									<h5 class="mb-0 mt-5">Pauline I. Bird</h5>
									<p class="mb-3">Webdeveloper</p>
									<div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-linkedin"></i></a>
									</div>
									<div class="d-grid"> <a href="#" class="btn btn-light radius-15">Contact Me</a>
                                    </div>
                                    <br>
                                    <div class="d-grid"> <a href="#" class="btn btn-light radius-15">Contact Me</a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!--end page wrapper -->


    @endsection
