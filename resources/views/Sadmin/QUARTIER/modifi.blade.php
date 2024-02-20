@extends('layouts.Sadmin')

@section('contenu')

    <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"> MODIFFIER </div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-7 mx-auto">
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<h5 class="mb-0 text-white"> Modifier le QUARTIER</h5>
								</div>
								<hr>
								<form class="row g-3" method="POST" action="{{ url('update_quartier/'. $quartier->id) }}",enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
									<div class="col-md-12">
										<label for="inputLastName" class="form-label">Nom du Quartier </label>
										<input type="text" class="form-control" value="{{ $quartier->nom }}" name="nom" id="inputLastName" placeholder="Nom de la ville">
									</div>
									<div class="col-12">
										<label for="inputAddress" class="form-label">Description de la ville</label>
										<textarea class="form-control"  value="{{ $quartier->description }}" name="description" id="inputAddress" placeholder="Description de la ville" rows="3"></textarea>
									</div>
                                    {{--  <div class="col-12">
										 <label for="image"> Images </label>
                                         <input type="file" class="form-control-file" id="image" name="imageville">
									</div>  --}}
									<div class="col-12">
										<button type="submit" class="btn btn-light px-5">Modifier</button>
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
