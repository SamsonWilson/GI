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
                        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-5">
                                <form id="myForm" class="row g-3" action="{{ route('enregistrer_Pmaison') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col mb-3">
                                                <div class="row-sm-9">
                                                    <h5 class="mb-0">Affecter/Propriétaire/Maison</h5>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="bsValidation3" class="form-label">Nombre de Proprietaire
                                                </label>
                                                <input type="number" class="form-control" id="bsValidation3"
                                                    placeholder="Nombre de personne" required=""
                                                    name="nombre_de_proprio">
                                            </div>

                                            <div class="mb-4">
                                                <label for="single-select-field" class="form-label">selectionné la
                                                    Maison
                                                </label>
                                                <select class="form-select" id="single-select-field"
                                                    data-placeholder="selectionné la Maison" name="maison_id">
                                                    @foreach ($maisons as $maison)
                                                        <option></option>
                                                        <option value ='{{ $maison->id }}'>
                                                            {{ $maison->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="input-group">
                                                <div class="input-group-text">Proprietaire</div>
                                                <select class="form-select" data-placeholder="Choose anything"
                                                    id="prepend-text-multiple-field" multiple name="proprietaire_id">
                                                    @foreach ($proprietaires as $proprietaire)
                                                        <option value ='{{ $proprietaire->id }}'>
                                                            {{ $proprietaire->nom }}
                                                            {{ $proprietaire->prenom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="bsValidation3" class="form-label">Description</label>
                                            <textarea name="description" type="text" class="form-control" id="bsValidation3"></textarea>
                                        </div>
                                        <hr>
                                        <br>
                                        <br>
                                        <div class="row row-cols-auto g-3 justify-content-center">
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-success px-5"><i
                                                        class="bx bx-save"></i>Enregistrer</button>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-7">
                                <form id="myForm" class="row g-3" action="{{ route('enregistrer_maison') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="row-sm-9">
                                                    <h5 class="mb-0">Infomation de la Maison</h5>
                                                    <hr>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nom </h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nom" />
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Taux commision/Piece</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-select" id="single-select-field"
                                                        data-placeholder="selectionné la Maison" name="tx_commission">
                                                        <option></option>
                                                        <option value ='3'> 3%</option>
                                                        <option value ='4'> 4%</option>
                                                        <option value ='5'> 5%</option>
                                                        <option value ='6'> 6%</option>
                                                        <option value ='7'> 7%</option>
                                                        <option value ='8'> 8%</option>
                                                        <option value ='9'> 9%</option>
                                                        <option value ='10'> 10%</option>
                                                        <option value ='11'> 11%</option>
                                                        <option value ='12'> 12%</option>
                                                        <option value ='13'> 13%</option>
                                                        <option value ='14'> 14%</option>
                                                        <option value ='15'> 15%</option>
                                                        <option value ='16'> 16%</option>
                                                        <option value ='17'> 17%</option>
                                                        <option value ='18'> 18%</option>
                                                        <option value ='19'> 19%</option>
                                                        <option value ='20'> 20%</option>
                                                        <option value ='21'> 21%</option>
                                                        <option value ='22'> 22%</option>
                                                        <option value ='23'> 23%</option>
                                                        <option value ='24'> 24%</option>
                                                        <option value ='25'> 25%</option>
                                                        <option value ='26'> 26%</option>
                                                        <option value ='27'> 27%</option>
                                                        <option value ='28'> 28%</option>
                                                        <option value ='29'> 29%</option>
                                                        <option value ='30'> 30%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Code Postal</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="c_postal" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nombre de Piéce</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="nombrePiece" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="adresse" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="row row-cols-auto g-3 justify-content-center">

                                                    <div class="col text-center">
                                                        <button type="submit" class="btn btn-success px-5"><i
                                                                class="bx bx-save"></i>Enregistrer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
@endsection
