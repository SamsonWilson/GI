@extends('layouts.Sadmin')

@section('contenu')
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

            <hr>

            <div><a name="" id="" class="btn btn-primary" href="{{ route('ajouter_logement') }}"
                    role="button">AJOUTER UN logement </a></div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                            <div class="row">
                                {{--  <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group"> <button
                                            class="btn btn-light buttons-copy buttons-html5" tabindex="0"
                                            aria-controls="example2" type="button"><span>Copy</span></button> <button
                                            class="btn btn-light buttons-excel buttons-html5" tabindex="0"
                                            aria-controls="example2" type="button"><span>Excel</span></button> <button
                                            class="btn btn-light buttons-pdf buttons-html5" tabindex="0"
                                            aria-controls="example2" type="button"><span>PDF</span></button> <button
                                            class="btn btn-light buttons-print" tabindex="0" aria-controls="example2"
                                            type="button"><span>Print</span></button> </div>
                                </div>  --}}
                                {{--  <div class="col-sm-12 col-md-6">
                                    <div id="example2_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="form-control form-control-sm" placeholder=""
                                                aria-controls="example2"></label></div>
                                </div>  --}}
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-striped table-bordered dataTable"
                                        role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th style="text-align: center; vertical-align: middle;">Images du Logements
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;">Nom</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;">Description </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Quartier </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Adresse </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Type de logements
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Montant par Mois
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Montant de la
                                                    Visite </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Superficie de la
                                                    chanbre </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;"> Detaille </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($logements as $logement)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="ms-2">
                                                                <img src= "/storage/imagelogement/{{ $logement->photo }}"
                                                                    alt="Uploaded Image" width="300" height="100">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->nom }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->description }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->quartier_nom }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->adress }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->type_logement_nom }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->mt_logement_par_mois }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->MT_visite }}</td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        {{ $logement->surperficie }}</td>

                                                    <td style="text-align: center; vertical-align: middle;"><button
                                                            type="button" class="btn btn-light btn-sm radius-30 px-4">Les
                                                            detail de la ville </button></td>
                                                    <td style="text-align: center; vertical-align: middle;">
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
                                                    </td>
                                                </tr>
                                            @endforeach

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
    </div>
@endsection
