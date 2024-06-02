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
            <form method="POST" action="{{ route('enregistrer_logement') }}" enctype='multipart/form-data'>
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <h6 class="mb-0 text-uppercase">logements </h6>
                                <hr />
                                <div class="card border-top border-0 border-4 border-white">
                                    <div class="card-body p-5">
                                        <div class="card-title d-flex align-items-center">
                                            <div><i class="bx bxs-user me-1 font-22 text-white"> </i>
                                            </div>
                                            <h5 class="mb-0 text-white"> Enregistrement des Logements </h5>
                                        </div>
                                        <hr>
                                        <hr>
                                        <div class="col-12">
                                            <label for="inputPhoneNo" class="form-label"> adresse: </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-microphone'></i></span>
                                                <input type="text" class="form-control border-start-0" id="inputPhoneNo"
                                                    placeholder="Phone No" name="adress" />
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="mb-3">
                                            <label class="form-label">Montant de visite:</label>
                                            <input type="text" class="form-control" name="MT_visite">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">superficie:</label>
                                            <input type="text" class="form-control" name="surperficie">
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label class="form-label">loyer/Mois:</label>
                                            <input type="text" class="form-control" name="mt_logement_par_mois">
                                        </div>
                                        <hr>
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label"> Type de logements </label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="Sélectionnez un quartier" name="typelogement_id">
                                                @foreach ($typelogements as $typelogement)
                                                    <option value="{{ $typelogement->id }}">{{ $typelogement->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <hr>
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label">Quartier
                                            </label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="Sélectionnez un quartier" name="quartier_id">
                                                @foreach ($quartiers as $quatier)
                                                    <option value="{{ $quatier->id }}">{{ $quatier->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label">Maison
                                            </label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="Sélectionnez un quartier" name="maison_id">
                                                @foreach ($MAIS as $maison)
                                                    <option value="{{ $maison->id }}">{{ $maison->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <hr>

                                        <div class="col-md-12">
                                            <label for="inputLastName2" class="form-label"> Description </label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class='bx bxs-user'></i></span>

                                                <textarea type="text" class="form-control border-start-0" id="inputLastName2" placeholder="Last Name" /
                                                    name="description"></textarea>

                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-xl-9 mx-auto">
                                                <h6 class="mb-0 text-uppercase">Fancy File Upload</h6>
                                                <hr />
                                                <div class="card">
                                                    <div class="card-body">
                                                        <input id="fancy-file-upload" type="file" name="photo"
                                                            accept=".jpg, .png, image/jpeg, image/png" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="image-preview" class="row mt-3"></div>

                                        <script>
                                            document.getElementById('fancy-file-upload').addEventListener('change', function(event) {
                                                var files = event.target.files; // Récupérer les fichiers sélectionnés
                                                var imagePreview = document.getElementById(
                                                    'image-preview'); // Sélectionner le conteneur d'aperçu des images

                                                // Effacer le contenu précédent
                                                imagePreview.innerHTML = '';

                                                // Parcourir les fichiers sélectionnés
                                                for (var i = 0; i < files.length; i++) {
                                                    var file = files[i];
                                                    var reader = new FileReader();

                                                    // Lire le contenu du fichier en tant qu'URL de données
                                                    reader.onload = function(event) {
                                                        var img = document.createElement('img'); // Créer un élément d'image
                                                        img.classList.add('img-thumbnail'); // Ajouter une classe pour un style de vignette
                                                        img.src = event.target.result; // Définir l'URL de données comme source de l'image
                                                        imagePreview.appendChild(img); // Ajouter l'image à l'aperçu
                                                    };

                                                    // Lire le fichier en tant qu'URL de données
                                                    reader.readAsDataURL(file);
                                                }
                                            });
                                        </script>


                                        <hr>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-light px-5"> Enregistrer </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
