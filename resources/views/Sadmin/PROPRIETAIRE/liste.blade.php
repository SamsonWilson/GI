@extends('layouts.Sadmin')

@section('contenu')
    <style>
        @media print {
            .hide-on-print {
                display: none !important;
            }

            .col-half {
                width: 50%;
                float: left;
                box-sizing: border-box;
            }

            .column {
                width: 50%;
                float: left;
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
            <div class="d-lg-flex align-items-center mb-4 gap-3">
                <div class="ms-auto"><a name="" id="" class="btn btn-success"
                        href="{{ route('ajouterProprietaire') }}" role="button"> Ajouter une Proprietaire </a></div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase"> listes des location </h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;"> NOM ET PRENOM </th>
                                    <th style="text-align: center; vertical-align: middle;">TELEPHONE </th>
                                    <th style="text-align: center; vertical-align: middle;"> EMAIL </th>
                                    <th style="text-align: center; vertical-align: middle;"> ADRESSE </th>
                                    <th style="text-align: center; vertical-align: middle;"> SEXE </th>
                                    <th style="text-align: center; vertical-align: middle;"> DETAIL </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proprietaires as $proprietaire)
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $proprietaire->nom }} {{ $proprietaire->prenom }}
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $proprietaire->tel1 }} / {{ $proprietaire->tel2 }}
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $proprietaire->email }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $proprietaire->adress }}
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $proprietaire->sex }}
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <div class="d-flex order-actions">
                                                <a href="{{ url('ProprietaireModifi=' . $proprietaire->id) }}"
                                                    class=""><i class="bx bxs-edit"></i></a>
                                                <a class="ms-3" href="{{ url('Proprietaire=' . $proprietaire->id) }}"><i
                                                        class="bx bxs-detail"></i></a>
                                            </div>

                                        </td>
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
