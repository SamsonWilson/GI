@extends('layouts.Sadmin')

@section('contenu')
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
            <h6 class="mb-0 text-uppercase"> Effectuer une location </h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle; color: red"> LOCATION DE CHAMBRE
                                    </th>
                                    <th style="text-align: center; vertical-align: middle;"> TYPE LOGEMENT </th>
                                    <th style="text-align: center; vertical-align: middle;">MAISON</th>
                                    <th style="text-align: center; vertical-align: middle;"> CAUTION ET LOYER </th>
                                    <th style="text-align: center; vertical-align: middle;"> VILLE ET QUATIER</th>
                                    <th style="text-align: center; vertical-align: middle;"> SUPERFICIE </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logements as $logement)
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;">


                                            <a href="{{ url('location=' . $logement->id) }}"
                                                class="btn btn-light btn-sm radius-30 px-4 hide-on-print"
                                                style="color: rgb(110, 211, 22);">
                                                LA FACTURE
                                            </a>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $logement->type_logement_nom }}
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;"> San Francisco</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $logement->logement_loyer }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $logement->ville_nom }} dans le Quatier {{ $logement->quartier_nom }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $logement->logement_superficie }}
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
