@extends('layouts.Sadmin')
@section('contenu')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">PROPRIETAIRE</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Propriétaire Details</li>
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
            @foreach ($proprietaires as $proprietaire)
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 border-end">
                            <img src="/storage/imageProprietaire/{{ $proprietaire->photo }}" class="img-fluid"
                                style="width: 100%; height: 100%;" alt="...">

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                {{--  <h4 class="card-title"></h4>  --}}
                                <dl class="row">
                                    <dt class="col-sm-9">
                                        <span class="price h1">{{ $proprietaire->nom }} {{ $proprietaire->prenom }}</span>
                                    </dt>
                                </dl>
                                <div class="mb-3">
                                    <dl class="row">
                                        <dt class="col-sm-3">
                                            <span class="price h6"> EMAIL</span>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <span class="price h6"> {{ $proprietaire->email }}</span>
                                        </dd>
                                        <dt class="col-sm-3">
                                            <span class="price h6"> SEXE</span>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <span class="price h6"> {{ $proprietaire->sex }}</span>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <span class="price h6"> TELEPHONE</span>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <span class="price h6"> {{ $proprietaire->tel1 }}</span>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <span class="price h6"> TELEPHONE</span>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <span class="price h6"> {{ $proprietaire->tel2 }}</span>
                                        </dd>
                                    </dl>

                                </div>
                                <h4>Adresse:</h4>
                                <p class="card-text fs-6">{{ $proprietaire->adress }}</p>

                                <hr>
                                <div class="d-flex justify-content-center gap-3 mt-3">

                                    <form action="{{ route('delete_Proprietaire', ['Proprietaire' => $proprietaire->id]) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleDangerModal"> Supprimer</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>
            @endforeach
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    <!--start switcher-->
@endsection
