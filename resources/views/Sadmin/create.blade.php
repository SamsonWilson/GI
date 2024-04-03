@extends('layouts.Sadmin')

@section('contenu')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">AJOUTER</div>
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
                <div class="col-xl-10 mx-auto">
                    <hr />
                    <div class="card border-top border-0 border-4 border-white">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-white">Ajouter une Ville</h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="{{ route('enregistrerVille') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputLastName" class="form-label">Nom de la ville </label>
                                    <input type="text" class="form-control" name="nom" id="inputLastName"
                                        placeholder="Nom de la ville">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Description de la ville</label>
                                    <textarea class="form-control" name="description" id="inputAddress" placeholder="Description de la ville"
                                        rows="3"></textarea>
                                </div>
                                {{--  <div class="col-12">
                                    <label for="image"> Images </label>
                                    <input type="file" class="form-control-file" id="image" name="imageville">
                                </div>  --}}

                                <div class="card">
                                    <div class="card-body">
                                        <!-- Conteneur pour l élément de téléchargement de fichier personnalisé -->
                                        <label class="file-input-wrapper">
                                            <span>Choisir une image</span>
                                            <!-- L élément d entrée de fichier réel (caché) -->
                                            <input id="fancy-file-upload" type="file" name="imageville"
                                                onchange="previewImage(event)">
                                        </label>
                                        <hr>
                                        <br>
                                        <!-- Zone pour prévisualiser l image -->
                                        <div id="image-preview"></div>
                                    </div>
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
    <!--plugins-->
    <script src="assetsc/js/jquery.min.js"></script>
    <script src="assetsc/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assetsc/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assetsc/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assetsc/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assetsc/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
    <script src="assetsc/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assetsc/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assetsc/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script>
        function previewImage(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
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

                        // Affichage de l'image redimensionnée et centrée
                        var output = document.getElementById('image-preview');
                        output.innerHTML = '<img src="' + img.src + '" style="width:' + width + 'px; height:' +
                            height + 'px;">';
                    };
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    {{--  <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('image-preview');
                output.innerHTML = '<img src="' + dataURL + '">';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>  --}}
@endsection
