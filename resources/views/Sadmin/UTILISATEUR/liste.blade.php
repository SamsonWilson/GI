@extends('layouts.Sadmin')

@section('contenu')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3"> UTILISATEUR </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <div><a name="" id="" class="btn btn-light" href="{{ route('ajouter_utilisateur') }}"
                                role="button"> Ajouter un Utilisateur </a></div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Liste des utilisateurs </h6>
            <hr />
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                @foreach ($users as $user)
                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body text-center">
                                <div class="p-4 border radius-15">
                                    <img src= "/storage/imageusers/{{ $user->photo }}" width="110" height="110"
                                        class="rounded-circle shadow" alt="">
                                    <h5 class="mb-0 mt-5">{{ $user->name }}</h5>
                                    <p>{{ $user->prenom }} </p>
                                    <p class="mb-3"> {{ $user->email }}</p>
                                    <p class="mb-3">Webdeveloper</p>

                                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;"
                                            class="list-inline-item bg-light text-white border-0"><i
                                                class="bx bxl-facebook"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                                class="bx bxl-twitter"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                                class="bx bxl-google"></i></a>
                                        <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                                class="bx bxl-linkedin"></i></a>
                                    </div>
                                    <div class="d-grid"> <a href="#" class="btn btn-light radius-15">Contact Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!--end row-->

        </div>
    </div>
    <!--end page wrapper -->
@endsection
