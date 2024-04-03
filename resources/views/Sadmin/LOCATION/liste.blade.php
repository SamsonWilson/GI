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

                                {{--  pour le logement   --}}
                                <div class="col-lg-3">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label"
                                                style="text-align: center; vertical-align: middle;"> SELECTIONNE LE
                                                LOGEMENT</label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="Choose one thing" name="logement_id">
                                                <option></option>
                                                @foreach ($logements as $logement)
                                                    <option value="{{ $logement->id }}">{{ $logement->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{--  pour location  --}}
                                <div class="col-lg-6">
                                    <div class="border border-3 p-4 rounded">

                                        <div class="mb-3">
                                            <label class="form-label"> DATE DE DEBUT </label>
                                            <input type="text" class="form-control datepicker" name="date_debut" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"> DATE FIN </label>
                                            <input type="text" class="form-control datepicker" name="date_fin" />
                                        </div>



                                    </div>
                                </div>
                                {{--  pour le client  --}}
                                <div class="col-lg-3">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-4">
                                            <label for="single-select-field" class="form-label"
                                                style="text-align: center; vertical-align: middle;">SELECTIONNE LE
                                                CLIENT</label>
                                            <select class="form-select" id="single-select-field"
                                                data-placeholder="Choose one thing" name="client_id">
                                                <option></option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
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
    <!--app JS-->
    <script src="assetsc/js/app.js"></script>
@endsection
