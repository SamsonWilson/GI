@extends('layouts.Sadmin')

@section('content')

    <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">AJOUTER</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Ajouter</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-7 mx-auto">
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<h5 class="mb-0 text-white">Ajouter une Ville</h5>
								</div>
								<hr>
								<form class="row g-3" action="{{ route('enregistrerVille') }}" method="post" enctype="multipart/form-data">
                                     @csrf
									<div class="col-md-12">
										<label for="inputLastName" class="form-label">Nom de la ville </label>
										<input type="text" class="form-control" name="nom" id="inputLastName" placeholder="Nom de la ville">
									</div>
									<div class="col-12">
										<label for="inputAddress" class="form-label">Description de la ville</label>
										<textarea class="form-control" name="description" id="inputAddress" placeholder="Description de la ville" rows="3"></textarea>
									</div>
                                    <div class="col-12">
										 <label for="image"> Images </label>
                                         <input type="file" class="form-control-file" id="image" name="imageville">
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-light px-5">Ajouter</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>

@endsection
