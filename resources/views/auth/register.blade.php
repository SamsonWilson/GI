@extends('layouts.app')

@section('content')
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
				</div>
				<!--end breadcrumb-->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <h6 class="mb-0">{{ __('Nom') }}</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{--  <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0"> {{ __('Prenom') }} </h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0"> {{ __('Date nass') }} </h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0"> {{ __('Sexe') }} </h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>  --}}



                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <h6 class="mb-0">{{ __('Email') }}</h6>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{--  <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">{{ __('Tel Fix') }}</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">{{ __('Tel') }}</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">{{ __('Adress') }}</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="" />
                                                </div>
                                            </div>  --}}


                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <h6 class="mb-0">{{ __('Password') }}</h6>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <h6 class="mb-0">{{ __('Confirm Password') }}</h6>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-light px-4">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                    {{--  <input type="submit" class="btn btn-light px-4" value="Save Changes" />  --}}
                                                </div>


                                            </div>
                                        </div>
                                    </div>
							</div>
						</div>
					</div>
				</div>
            </form>
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

























{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection
