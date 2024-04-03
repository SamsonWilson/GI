@extends('layouts.Sadmin')

@section('contenu')
    {{--  <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tables</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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

            <hr>

            <div><a name="" id="" class="btn btn-primary" href="{{ route('ajouter_logement') }}"
                    role="button">AJOUTER UN logement </a></div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-striped table-bordered dataTable"
                                        role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle; color: red"> ETABLIER
                                                    LA FACTURE
                                                </th>
                                                <th style="text-align: center; vertical-align: middle;">Images du Logements
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;">Nom et Prenom du
                                                    client</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> SEXE </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> TELEPHONE
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> QUARTIER
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> VILLE
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> MAIL
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> DATE D''ENTREE
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> DATE DE SORTIE
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> MODALITER DE
                                                    PAYEMENT </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> TYPE LOGEMENTS
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Maison
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> MONTANT PAR MOIS
                                                </th>

                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Superficie de la
                                                    chanbre </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($locations as $location)
                                                <tr>


                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="ms-2">
                                                                <img src= "/storage/imagelogement/{{ $locations->logement_photo }}"
                                                                    alt="Uploaded Image" width="300" height="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $locations->client_nom }} {{ $locations->client_prenom }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{--  {{ $locations-> }}</td>  --}}
    <td style="text-align: center; vertical-align: middle;">
        {{--  {{ $logement->quartier_nom }}</td>  --}}
    <td style="text-align: center; vertical-align: middle;">
        {{--  {{ $logement->adress }}</td>  --}}
    <td style="text-align: center; vertical-align: middle;">
        {{--  {{ $logement->type_logement_nom }}</td>  --}}
    <td style="text-align: center; vertical-align: middle;">
        {{--  {{ $logement->mt_logement_par_mois }}</td>  --}}
    <td style="text-align: center; vertical-align: middle;">
        {{--  {{ $logement->MT_visite }}</td>  --}}
    <td style="text-align: center; vertical-align: middle;">
        {{--  {{ $logement->surperficie }}</td>  --}}

    <td style="text-align: center; vertical-align: middle;"><button type="button"
            class="btn btn-light btn-sm radius-30 px-4">Les
            detail de la ville </button></td>
    {{--  <td style="text-align: center; vertical-align: middle;">
                                                        <div class="d-flex order-actions">
                                                            <a href="{{ url('quartier=' . $logement->id) }}"
                                                                class=""><i class='bx bxs-edit'></i></a>
                                                            <form
                                                                action="{{ route('delete_quartier', ['quartier' => $logement->id]) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button href="javascript:;" class="ms-3"
                                                                    type="submit"><i class='bx bxs-trash'></i></button>
                                                            </form>
                                                        </div>
                                                    </td>  --}}
    </tr>
    {{--  @endforeach  --}}

    </tbody>
    </table>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                <!-- Ce conteneur affiche les informations sur la pagination -->
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                    <!-- Les boutons de pagination -->
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fonction pour charger les données via AJAX
            function loadData(page) {
                $.ajax({
                    url: 'votre_url_de_pagination.php', // L'URL où se trouve votre logique de pagination côté serveur
                    type: 'GET',
                    data: {
                        page: page
                    },
                    success: function(response) {
                        // Mettre à jour le contenu de la page avec les nouvelles données
                        $('#example2_info').html(response.info);
                        $('#example2_paginate ul').html(response.pagination);
                        // Vous devrez peut-être également mettre à jour le contenu de votre tableau ou de toute autre partie de la page
                    },
                    error: function(xhr, status, error) {
                        // Gérer les erreurs si nécessaire
                    }
                });
            }

            // Gérer le clic sur les boutons de pagination
            $(document).on('click', '.pagination .page-link', function(e) {
                e.preventDefault();
                var page = $(this).data('dt-idx');
                loadData(page);
            });

            // Charger les données pour la première page au chargement initial
            loadData(1);
        });
    </script>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    <style>
        @media print {
            .hide-on-print {
                display: none !important;
            }
        }
    </style>
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tables</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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
            <h6 class="mb-0 text-uppercase"> ETABLIER UNE FACTURE </h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle; color: red"> ETABLIER
                                        LA FACTURE
                                    </th>
                                    <th style="text-align: center; vertical-align: middle;"> NOM ET PRENOM </th>
                                    <th style="text-align: center; vertical-align: middle;">MAISON</th>
                                    <th style="text-align: center; vertical-align: middle;">LOGEMENT</th>
                                    <th style="text-align: center; vertical-align: middle;">QUATIER</th>
                                    <th style="text-align: center; vertical-align: middle;">DATE DEBUT </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $location)
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;">


                                            <a href="{{ url('facture=' . $location->id) }}"
                                                class="btn btn-light btn-sm radius-30 px-4 hide-on-print"
                                                style="color: rgb(110, 211, 22);">
                                                LA FACTURE
                                            </a>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $location->clients_nom }} {{ $location->clients_prenom }}
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;"> San Francisco</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $location->logement_nom }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $location->quartier_nom }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $location->location_date_debut }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <p class="mb-0">Gaussian Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>
            <hr>
            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        </div>
    </div>
@endsection
