@extends('layouts.Sadmin')

@section('contenu')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
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
            <form method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">FIN CONTRAT</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row">
                                {{--  @foreach ($locations as $location)  --}}
                                <h1 class="col-12" style="text-align: center; vertical-align: middle;color: red">
                                    {{ $locations->first()->nom_client }} {{ $locations->first()->prenom_client }}
                                </h1>

                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> MAISON </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->maison }}" disabled />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> TYPE DE LOGEMENT </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->type_logement_nom }}" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> VILLE </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->ville_nom }}"disabled />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> QUARTIER </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->quartier_nom }}"disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label">SUPERFICIE </label>
                                                <input type="text" class="form-control"
                                                    value=" {{ $locations->first()->logement_superficie }} M²"disabled />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> LOYER </label>
                                                <input type="text" class="form-control"
                                                    value=" {{ $locations->first()->logement_loyer }}/ Mois" disabled />
                                            </div>
                                        </div>

                                    </div>

                                    <br>
                                    <br>

                                </div>


                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> Avance/Mois </label>
                                                <input type="text"class="form-control" id="date_fin"
                                                    name="date_finavance" value="{{ $locations->first()->avance }}"
                                                    readonly />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> Montant Total Avance </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->Tavance }}" disabled />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> Coution/Mois </label>
                                                <input type="text"class="form-control" id="date_fin"
                                                    value="{{ $locations->first()->caution }}" name="date_finavance"
                                                    readonly />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> Montant Total Caution </label>
                                                <input type="text" class="form-control" oninput="calculateTotals()"
                                                    id="cautions" value="{{ $locations->first()->Tcaution }}"readonly />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label">Date Debut </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->date_debut }}" disabled />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> Date fin Avance </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->date_finavance }}" disabled />
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>


                                </div>

                                {{--  pour le client  --}}
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label"
                                                style="text-align: center; vertical-align: middle;">TOUT LES
                                                LOYER</label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="selectionne le client" name="client_id">
                                                <option></option>
                                                @foreach ($factures as $facture)
                                                    <option value="{{ $facture->id }}" disabled>
                                                        {{ $facture->mois_payer }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <div class="mb-3">
                                                <label class="form-label"> ETAT DE LA CHAMBRE/MOIS NON REGLE </label>
                                                {{--  <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3" name="descrip_prelevement"
                                                    value=" {{ $locations->first()->descrip_prelevement }}"></textarea>  --}}
                                                <input type="text" class="form-control"
                                                    value=" {{ $locations->first()->descrip_prelevement }} M²"disabled />

                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label"> MONTANT PRELEVER DANS LA CAUTION
                                                    </label>
                                                    <input type="text" class="form-control" name="Mt_prelever"
                                                        oninput="calculateTotals()"
                                                        value="{{ $locations->first()->Mt_prelever }}" id="prelevement"
                                                        readonly />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label"> MONTANT RENBOUSER </label>
                                                    <input type="text" class="form-control"
                                                        oninput="calculateTotals()" id="totalRenbourser"
                                                        name="Mt_rembouser"
                                                        value="{{ $locations->first()->Mt_rembouser }} CFA" readonly />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"> DATE DE FIN CONTRAT </label>
                                                {{--  <input type="date" class="form-control datepicker" name="date_fin"
                                                    id="date_fin" oninput="updateDateFin()"
                                                    value="{{ $locations->first()->date_fin }}" readonly />  --}}
                                                <input type="text" class="form-control"
                                                    value="{{ $locations->first()->date_fin }}" disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--  @endforeach  --}}
                            </div><!--end row-->
                        </div>
                    </div>
            </form>
        </div>
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
        function calculateTotals() {
            var cautions = parseFloat(document.getElementById("cautions").value);
            var prelevement = parseFloat(document.getElementById("prelevement").value);

            if (!isNaN(cautions) && !isNaN(prelevement)) {
                var totalRenbourser = cautions - prelevement;
                document.getElementById("totalRenbourser").value = totalRenbourser;
            } else {

                document.getElementById("totalRenbourser").value = "Veuillez saisir des nombres valides";
            }
        }
    </script>

    {{--  <script>
        document.getElementById("date_debut").addEventListener("change", updateDateFin);
        document.getElementById("avance").addEventListener("input", updateDateFin);

        function updateDateFin() {
            var date_debut = new Date(document.getElementById("date_debut").value);
            var avance = parseInt(document.getElementById("avance").value);

            if (!isNaN(date_debut.getTime()) && !isNaN(avance)) {
                var date_fin = new Date(date_debut);
                date_fin.setDate(date_fin.getDate() + avance);
                var date_fin_formatted = date_fin.toISOString().substr(0, 10); // Format de date YYYY-MM-DD
                document.getElementById("date_fin").value = date_fin_formatted;
            } else {
                document.getElementById("date_fin").value = "";
            }
        }
    </script>  --}}
    <script>
        document.getElementById("date_debut").addEventListener("change", function() {
            // Si une date de début est sélectionnée, activer le champ d'avance
            if (this.value.trim() !== "") {
                document.getElementById("avance").disabled = false;
            } else {
                // Sinon, désactiver le champ d'avance
                document.getElementById("avance").disabled = true;
            }
            // Mettre à jour la date de fin
            updateDateFin();
        });

        document.getElementById("avance").addEventListener("input", updateDateFin);

        function updateDateFin() {
            var date_debut = new Date(document.getElementById("date_debut").value);
            var avance = parseInt(document.getElementById("avance").value);

            if (!isNaN(date_debut.getTime()) && !isNaN(avance)) {
                var date_fin = new Date(date_debut);
                date_fin.setMonth(date_fin.getMonth() + avance);
                var date_fin_formatted = date_fin.toISOString().substr(0, 10); // Format de date YYYY-MM-DD
                document.getElementById("date_fin").value = date_fin_formatted;
            } else {
                document.getElementById("date_fin").value = "";
            }
        }
    </script>


    <!--app JS-->
    <script src="assetsc/js/app.js"></script>
@endsection
