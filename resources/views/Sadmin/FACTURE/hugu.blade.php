@extends('layouts.app')

@section('content')
    <style>
        /* Styles normaux */
        /* Ajoutez vos styles normaux ici */

        /* Styles pour l'impression */
        @media print {

            /* Masquer les éléments qui ne doivent pas être imprimés */
            body * {
                visibility: hidden;
                {{--  display: block !important;  --}} {{--  visibility: hidden !important;  --}} opacity: 1 !important;
                position: static !important;
                transform: none !important;
                overflow: visible !important;
                width: auto !important;
                height: auto !important;
                margin: 0 !important;
                padding: 10 !important;
            }

            #invoice-form,
            #invoice-form * {
                visibility: visible;

            }

            #invoice-form {
                width: 100%;
                right: 100%;
                margin: 0 auto;
                padding: 0px;
                border: 1px solid #c70a0a;
            }

            .hide-on-print {
                display: none !important;
            }

        }
    </style>
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Charts</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Highcharts</li>
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
                                @foreach ($locationss as $location)
                                    <h5 class="mb-0 text-white">
                                        {{ $location->clients_nom }}
                                        {{ $location->clients_prenom }}
                                    </h5>
                                @endforeach
                            </div>
                            <hr>
                            <form class="row g-3" id="invoice-form" method="POST" action="{{ route('enregistrefacture') }}"
                                enctype='multipart/form-data'>
                                @csrf
                                <div class="col-md-6">
                                    {{--  <div class="mb-3">  --}}
                                    <label class="form-label"> DATE DU PAYEMENTS </label>
                                    <input type="date" class="form-control" name="date_payement" id="date_payement" />
                                    {{--  </div>  --}}
                                </div>
                                <div class="col-md-6">
                                    {{--  <div class="mb-3">  --}}
                                    <label class="form-label"> MOIS REGLEE </label>
                                    <input type="month" class="form-control" name="mois_payer" />
                                    {{--  </div>  --}}
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-4">
                                                <label for="single-select-field" class="form-label"
                                                    style="text-align: center; vertical-align: middle;">PAYE PAR :</label>
                                                <select class="form-select" id="single-select-field"
                                                    data-placeholder="Choose one thing" name="mode_payement_id">
                                                    @foreach ($MDPS as $MDP)
                                                        <option value="{{ $MDP->id }}">{{ $MDP->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                @foreach ($locationss as $location)
                                    <input type="hidden" value="{{ $location->id }}" name="location_id" readonly required>
                                    <div class="col-md-6">
                                        <label for="inputFirstName" class="form-label">Nom</label>
                                        <input type="text" class="form-control"
                                            value="{{ $location->clients_nom }}"readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName" class="form-label">Prenom</label>
                                        <input type="text" class="form-control"
                                            value="{{ $location->clients_prenom }}"readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control"
                                            value="{{ $location->clients_email }}"readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword" class="form-label">Telephone</label>
                                        <input type="text" class="form-control"
                                            value="{{ $location->clients_tel1 }}"readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label">Telephone2 </label>
                                        <input type="text" class="form-control"
                                            value="{{ $location->clients_tel2 }}"readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label">sexe</label>
                                        {{--  <input type="text" class="form-control"
                                            value="{{ $location->clients_nom }}"readonly>  --}}
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label">logement</label>
                                        <input type="text" class="form-control"
                                            value="{{ $location->type_logement_nom }}"readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label">Maison </label>
                                        {{--  <input type="text" class="form-control"
                                            value="{{ $location->clients_nom }}"readonly>  --}}
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label"> ville </label>
                                        {{--  <input type="text" class="form-control"
                                            value="{{ $location->clients_nom }}"readonly>  --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Quartier</label>
                                        {{--  <input type="text" class="form-control"
                                            value="{{ $location->clients_nom }}"readonly>  --}}
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    {{--  <button>eneneen</button>  --}}

                                    {{--  <button onclick="saveAndPrint()" class="btn btn-light px-5">Editer une
                                        Facture</button>  --}}
                                    <button onclick="imprimerFacture()" class="btn btn-light px-5 hide-on-print">Imprimer
                                        la
                                        facture</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
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



    <!--end page wrapper -->
    <script src="assetsc/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assetsc/js/jquery.min.js"></script>
    <script src="assetsc/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assetsc/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assetsc/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assetsc/plugins/datetimepicker/js/legacy.js"></script>
    <script src="assetsc/plugins/datetimepicker/js/picker.js"></script>
    <script src="assetsc/plugins/datetimepicker/js/picker.time.js"></script>
    <script src="assetsc/plugins/datetimepicker/js/picker.date.js"></script>
    <script src="assetsc/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
    <script src="assetsc/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
    <script>
        $('.datepicker').pickadate({
                selectMonths: true,
                selectYears: true
            }),
            $('.timepicker').pickatime()
    </script>
    <script>
        $(function() {
            $('#date-time').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm'
            });
            $('#date').bootstrapMaterialDatePicker({
                time: false
            });
            $('#time').bootstrapMaterialDatePicker({
                date: false,
                format: 'HH:mm'
            });
        });
    </script>

    <script>
        // Récupérer l'élément input par son ID
        var inputDateDebut = document.getElementById('date_debut');

        // Obtenir la date système au format YYYY-MM-DD
        var today = new Date().toISOString().split('T')[0];

        // Définir la valeur de l'input à la date actuelle
        inputDateDebut.value = today;
    </script>
    <!--app JS-->
    <script src="assetsc/js/app.js"></script>
    <script>
        // Fonction pour imprimer la facture
        function imprimerFacture() {
            // Appel à la fonction d'impression du navigateur
            window.print();
        }
    </script>
@endsection
