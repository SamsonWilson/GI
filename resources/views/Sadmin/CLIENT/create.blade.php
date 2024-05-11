@extends('layouts.Sadmin')

@section('contenu')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Forms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <h6 class="mb-0 text-uppercase">Client</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-white">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                                </div>
                                <h5 class="mb-0 text-white"> Enregistrement des Clients </h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="{{ route('enregistrerClient') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label"> Nom </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="nom">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName" class="form-label"> Prenom </label>
                                    <input type="text" class="form-control" id="inputLastName" name="prenom">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="inputEmail" name="tel1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label"> Téléphone</label>
                                    <input type="tel" class="form-control" id="inputPassword" name="tel2">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label"> Email </label>
                                    <input type="email" class="form-control" id="inputPassword" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="single-select-field" class="form-label">Sexe
                                    </label>
                                    <select class="form-select" id="single-select-field"
                                        data-placeholder="Sélectionnez le sexe " name="sexe">
                                        <option value="F">Feminin</option>
                                        <option value="M">Masculin</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3" name="adress"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">Type de client </label>
                                    <select id="inputState" class="form-select" name="typeclient_id">
                                        @foreach ($Tclients as $Tclient)
                                            <option value="{{ $Tclient->id }}">{{ $Tclient->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-light px-5">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->


        </div>
    </div>
    <!--end page wrapper -->
    {{--  <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->  --}}
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
    </div>
    <!--end wrapper-->
@endsection
