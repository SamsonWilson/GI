@extends('layouts.app')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3"> User Profile </div>
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
            <form method="POST" action="{{ route('enregistrer_utilisateur') }}" enctype='multipart/form-data'>
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <h6 class="mb-0 text-uppercase"> Form with icons </h6>
                                <hr />
                                <div class="card border-top border-0 border-4 border-white">
                                    <div class="card-body p-5">
                                        <div class="card-title d-flex align-items-center">
                                            <div><i class="bx bxs-user me-1 font-22 text-white"> </i>
                                            </div>
                                            <h5 class="mb-0 text-white"> Enregistrement des Utilisateur </h5>
                                        </div>
                                        <hr>

                                        <div class="col-md-12">
                                            <label for="inputLastName1" class="form-label"> Nom </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    id="inputLastName1" placeholder="First Name" / name="name">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="col-md-12">
                                            <label for="inputLastName2" class="form-label"> Prenom </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    id="inputLastName2" placeholder="Last Name" / name="prenom">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="col-12">
                                            <label for="inputPhoneNo" class="form-label"> Téléphone </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-microphone'></i></span>
                                                <input type="tel" class="form-control border-start-0" id="inputPhoneNo"
                                                    placeholder="Phone No" name="tel" />
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="mb-3">
                                            <label class="form-label">Date time:</label>
                                            <input type="datetime-local" class="form-control" name="datenais">
                                        </div>
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label"> Sexe </label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="Choose one thing" name="sexe">
                                                <option value="H">Homme</option>
                                                <option value="F">Femme</option>
                                            </select>
                                        </div>

                                        <hr>

                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-message'></i></span>
                                                <input type="email" class="form-control border-start-0"
                                                    id="inputEmailAddress" placeholder="Email Address" name="email" />
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label"> Mot de passe </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-lock-open'></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    id="inputChoosePassword" placeholder="Choose Password"
                                                    name="password" />
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="col-12">
                                            <label for="inputConfirmPassword" class="form-label"> Confirm Password </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-lock'></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    id="inputConfirmPassword" placeholder="Confirm Password" />
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="col-12">
                                            <label for="inputAddress3" class="form-label">Address</label>
                                            <textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3" name="adress"></textarea>
                                        </div>

                                        <hr>

                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label"> photo </label>
                                            <div class="input-group"> <span class="input-group-text"><i></i></span>
                                                <input type="file" class="form-control border-start-0"
                                                    id="inputChoosePassword" placeholder="Choose Password"
                                                    name="photo" />
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-light px-5"> Enregistrer </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card radius-10 overflow-hidden w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="mb-0"> vvvvvv</h5>
                                </div>

                                <div class="mb-4">
                                    <label for="single-select-field" class="form-label">Basic single select</label>
                                    <select class="form-select" id="single-select-field"
                                        data-placeholder="Choose one thing">
                                        <option></option>
                                        <option>Reactive</option>
                                        <option>Solution</option>
                                        <option>Conglomeration</option>
                                        <option>Algoritm</option>
                                        <option>Holistic</option>
                                    </select>
                                </div>

                                <script>
                                    // Initialiser Select2 sur l'élément de sélection
                                    $(document).ready(function() {
                                        $('#single-select-field').select2({
                                            // Activer la recherche
                                            theme: 'bootstrap4',
                                            placeholder: 'Choose one thing', // Texte de placeholder
                                            allowClear: true, // Permettre de vider la sélection
                                            width: '100%' // Largeur de l'élément de sélection
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
