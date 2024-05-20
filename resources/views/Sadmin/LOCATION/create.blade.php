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
            <form method="POST" action="{{ route('enregistrerlocation') }}" enctype='multipart/form-data'>
                @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Add New Product</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row">
                                @foreach ($logements as $logement)
                                    <div class="col-lg-6">
                                        <div class="border border-3 p-4 rounded">
                                            <input type="hidden" value="{{ $logement->id }}" name="logement_id" readonly
                                                required>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label"> MAISON </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $logement->maison }}" disabled />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label"> TYPE DE LOGEMENT </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $logement->type_logement_nom }}" disabled />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label"> VILLE </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $logement->ville_nom }}"disabled />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label"> QUARTIER </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $logement->quartier_nom }}"disabled />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label">SUPERFICIE </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $logement->logement_superficie }} M²"disabled />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label"> LOYER </label>
                                                    <input type="text" class="form-control" id="loyer"
                                                        value="{{ $logement->logement_loyer }} / Mois" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>


                                    </div>
                                @endforeach
                                {{--  pour le client  --}}
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label"
                                                style="text-align: center; vertical-align: middle;">SELECTIONNE LE
                                                CLIENT</label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="selectionne le client" name="client_id">
                                                <option></option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->nom }}
                                                        {{ $client->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label"> DATE DE DEBUT </label>
                                        <input type="date" class="form-control datepicker" name="date_debut"
                                            id="date_debut" oninput="updateDateFin()" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"> DATE DE FIN AVANCE </label>
                                        <input type="text"class="form-control" id="date_fin" name="date_finavance"
                                            readonly />
                                    </div>



                                </div>
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> CAUTION </label>
                                                <input type="number" class="form-control" id="caution"
                                                    oninput="calculateTotals()" name="caution" />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> AVANCE </label>
                                                <input type="number" class="form-control" id="avance"
                                                    oninput="calculateTotals()" oninput="updateDateFin()"name="avance" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> TATOL CAUTION </label>
                                                <input type="text" class="form-control" id="total_caution"
                                                    name ="Tcaution" readonly />
                                            </div>
                                            <div class="col">
                                                <label class="form-label"> TOTAL AVANCE </label>
                                                <input type="text" class="form-control" id="total_avance"
                                                    name="Tavance" readonly />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label class="form-label"> TAUX COMMISION </label>
                                                @foreach ($logements as $logement)
                                                    <input type="text" class="form-control" id="taux_commission"
                                                        name ="#" value="{{ $logement->txCommission }} %"
                                                        readonly />
                                                @endforeach
                                            </div>
                                            <div class="col">
                                                <label class="form-label text-danger fs-7"> COMMISSION DE LA SOCIETE
                                                </label>
                                                <input type="text" class="form-control text-danger fs-7"
                                                    id="total_commission" name="commision" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <label class="form-label text-danger fs-3"> TOTAL </label>
                                        <input type="text" class="form-control text-danger fs-4" id="total"
                                            name="Total" readonly />
                                    </div>

                                </div>
                            </div><!--end row-->
                            <hr>
                            <div class="col-12" style="text-align: center; vertical-align: middle;">
                                <button type="submit" class="btn btn-light px-5"> Enregistrer </button>
                            </div>
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
            var loyer = parseFloat(document.getElementById("loyer").value);
            var taux_commission = parseFloat(document.getElementById("taux_commission").value);
            var caution = parseFloat(document.getElementById("caution").value);
            var avance = parseFloat(document.getElementById("avance").value);

            if (!isNaN(loyer) && !isNaN(caution) && !isNaN(avance) && !isNaN(taux_commission)) {
                var total_caution = loyer * caution;
                var total_avance = loyer * avance;
                var total_commission = (total_avance * taux_commission) / 100;
                var total = (total_caution + total_avance) - total_commission;

                document.getElementById("total_caution").value = total_caution;
                document.getElementById("total_avance").value = total_avance;
                document.getElementById("total_commission").value = total_commission;
                document.getElementById("total").value = total;
            } else {
                document.getElementById("total_caution").value = "";
                document.getElementById("total_avance").value = "";
                document.getElementById("total").value = "Veuillez saisir des nombres valides";
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
