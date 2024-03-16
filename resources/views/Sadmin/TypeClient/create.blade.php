@extends('layouts.Sadmin')

@section('contenu')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3"> Creer un Type de logement </div>

            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <hr />
                    <div class="card border-top border-0 border-4 border-white">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-white">Ajouter un type du Client </h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="{{ route('enregistrer_typeclient') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputLastName" class="form-label">Nom </label>
                                    <input type="text" class="form-control" name="nom" id="inputLastName"
                                        placeholder="Nom du type de logement">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Description </label>
                                    <textarea class="form-control" name="description" id="inputAddress" placeholder="Description du type de logement "
                                        rows="3"></textarea>
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
