@extends('layouts.Sadmin')

@section('contenu')
  <div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">LISTE DES VILLES </div>


				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Rechercher"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Toute New les villes </a></div>
                          <div><a name="" id="" class="btn btn-primary" href="{{ route('ajouterville') }}" role="button">Ajouter une ville</a></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Images de villes </th>
										<th>Nom</th>
										<th>Description </th>
										<th>View Details</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($datas as $data )
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<img src= "/storage/imageville/{{$data->imageville}}" alt="Uploaded Image" width="300" height="100">
												</div>
											</div>
										</td>

                                        <td style="text-align: center; vertical-align: middle;">{{ $data->nom }}</td>
										<td style="text-align: center; vertical-align: middle; width: 200px;">{{ $data->description }}</td>

										<td style="text-align: center; vertical-align: middle;"><button type="button" class="btn btn-light btn-sm radius-30 px-4">Les detail de la ville </button></td>
										<td style="text-align: center; vertical-align: middle;">
											<div class="d-flex order-actions">
												<a href="{{ url('ville=' . $data->id) }}" class=""><i class='bx bxs-edit'></i></a>
                                                <form action="{{ route('delete_ville', ['ville' => $data->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button href="javascript:;" class="ms-3" type="submit"><i class='bx bxs-trash'></i></button>
                                                </form>
											</div>
										</td>
									</tr>
                                     @endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>

  @endsection
