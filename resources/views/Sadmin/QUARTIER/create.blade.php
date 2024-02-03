@extends('layouts.Sadmin')

@section('content')

    <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">QUARTIERS</div>
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
									<h5 class="mb-0 text-white">Ajouter un Quartier</h5>
								</div>
								<hr>
								<form class="row g-3" action="{{ route('enregistrer_Quartier') }}" method="post" enctype="multipart/form-data">
                                     @csrf
									<div class="col-md-12">
										<label for="inputLastName" class="form-label">Nom du Quartier </label>
										<input type="text" class="form-control" name="nom" id="inputLastName" placeholder="Nom de la ville">
									</div>
									<div class="col-12">
										<label for="inputAddress" class="form-label">Description du Quartier</label>
										<textarea class="form-control" name="description" id="inputAddress" placeholder="Description de la ville" rows="3"></textarea>
									</div>
                                    <div class="col-12">
										 <label for="image"> Images du Quartier </label>
                                         <input type="file" class="form-control-file" id="image" name="imagequartier">
									</div>
                                     <div class="form-group">
                                        <label for="image"> villes </label>
                                            <select name="ville_id">
                                                <option value =''> Ville </option>
                                                @foreach ($datas as $data )
                                                    <option value ='{{$data->id}}'> {{ $data->nom }} </option>
                                                @endforeach

                                            </select>
                                             </div>
									<div class="col-12">
										<button type="submit" class="btn btn-light px-5" > Ajouter </button>
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
