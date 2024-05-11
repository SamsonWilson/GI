@extends('layouts.Sadmin')

@section('contenu')
    <!--start page wrapper -->
    <style>
        .file-input-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>



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
                <div class="col-xl-10 mx-auto">
                    <h6 class="mb-0 text-uppercase">Basic Form</h6>
                    <hr />
                    <div class="card border-top border-0 border-4 border-white">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                                </div>
                                <h5 class="mb-0 text-white"> Enregistrement Des Proprietaire </h5>
                            </div>
                            <hr>
                            <form id="myForm" class="row g-3" action="{{ route('enregistrerProprietaire') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <!-- Conteneur pour l élément de téléchargement de fichier personnalisé -->
                                    <label class="file-input-wrapper">
                                        <span>Image du Propriétaire</span>
                                        <!-- L élément d entrée de fichier réel (caché) -->
                                        <input id="fancy-file-upload" type="file" name="imageProprietaire"
                                            onchange="previewImage(event)">
                                    </label>
                                    <hr>
                                    <!-- Zone pour prévisualiser l image -->
                                    <div id="image-preview">

                                    </div>
                                    @error('imageProprietaire')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{--  <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label"> Nom </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="nom">
                                </div>  --}}
                                <div class="col-md-6">
                                    <label for="inputFirstName" class="form-label"> Nom </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="nom">
                                    @error('nom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName" class="form-label"> Prenom </label>
                                    <input type="text" class="form-control" id="inputLastName" name="prenom">
                                    @error('prenom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">Téléphone</label>
                                    <input type="number" class="form-control" id="inputEmail" name="tel1">
                                    @error('tel1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label"> Téléphone</label>
                                    <input type="number" class="form-control" id="inputPassword" name="tel2">
                                    @error('tel2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label"> Email </label>
                                    <input type="email" class="form-control" id="inputPassword" name="email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Sexe</label>
                                    <select id="inputState" class="form-select" name="sex">
                                        <option value="">Sexe</option>
                                        <option value="masculin">H</option>
                                        <option value="feminin">F</option>
                                    </select>
                                    @error('sex')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3" name="adress"></textarea>
                                    @error('adress')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-light px-5">Register</button>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
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
    <script>
        function previewImage(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        var canvas = document.createElement('canvas');
                        var context = canvas.getContext('2d');
                        var maxWidth = 300; // Largeur maximale souhaitée
                        var maxHeight = 300; // Hauteur maximale souhaitée
                        var width = img.width;
                        var height = img.height;

                        // Calcul de la nouvelle taille en maintenant le ratio de l'image
                        if (width > height) {
                            if (width > maxWidth) {
                                height *= maxWidth / width;
                                width = maxWidth;
                            }
                        } else {
                            if (height > maxHeight) {
                                width *= maxHeight / height;
                                height = maxHeight;
                            }
                        }

                        canvas.width = width;
                        canvas.height = height;
                        context.beginPath();
                        context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI);
                        context.closePath();
                        context.clip();

                        // Dessiner l'image sur le canvas avec une forme ronde
                        context.drawImage(img, 0, 0, width, height);

                        // Affichage de l'image redimensionnée et ronde
                        var output = document.getElementById('image-preview');
                        output.innerHTML = '<img src="' + canvas.toDataURL() + '" style="border-radius: 50%;">';
                    };
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <!--end wrapper-->
@endsection
