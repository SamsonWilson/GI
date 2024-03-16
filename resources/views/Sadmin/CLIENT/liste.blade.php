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

            <h6 class="mb-0 text-uppercase">DataTable Import</h6>
            <div class="d-lg-flex align-items-center mb-4 gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control ps-5 radius-30" placeholder="Rechercher"> <span
                        class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                </div>
                <div class="ms-auto"><a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0"><i
                            class="bx bxs-plus-square"></i>Toute New les villes </a></div>
                <div><a name="" id="" class="btn btn-primary" href="{{ route('ajouterClient') }}"
                        role="button">Ajouter un client </a></div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group"> <button
                                            class="btn btn-light buttons-copy buttons-html5" tabindex="0"
                                            aria-controls="example2" type="button"><span>Copy</span></button> <button
                                            class="btn btn-light buttons-excel buttons-html5" tabindex="0"
                                            aria-controls="example2" type="button"><span>Excel</span></button> <button
                                            class="btn btn-light buttons-pdf buttons-html5" tabindex="0"
                                            aria-controls="example2" type="button"><span>PDF</span></button> <button
                                            class="btn btn-light buttons-print" tabindex="0" aria-controls="example2"
                                            type="button"><span>Print</span></button> </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-striped table-bordered dataTable"
                                        role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="text-align: center; vertical-align: middle;">Nom</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;">Prenom</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;"> Téléphone 1</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;">Téléphone 2</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;">Adresse</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;">Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="text-align: center; vertical-align: middle;"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="even">
                                                <td class="sorting_1" style="text-align: center; vertical-align: middle;">
                                                    Cedric Kelly</td>
                                                <td style="text-align: center; vertical-align: middle;">Senior Javascript
                                                    Developer</td>
                                                <td style="text-align: center; vertical-align: middle;">Edinburgh</td>
                                                <td style="text-align: center; vertical-align: middle;">22</td>
                                                <td style="text-align: center; vertical-align: middle;">2012/03/29</td>
                                                <td style="text-align: center; vertical-align: middle;">$433,060</td>
                                                <td style="text-align: center; vertical-align: middle;">$433,060</td>
                                                <td> {{--  <div class="d-flex order-actions">
                                                    <a href="{{ url('type_logement=' . $typeclient->id) }}" class=""><i
                                                            class='bx bxs-edit'></i></a>
                                                    <form
                                                        action="{{ route('delete_type_logement', ['type_logement' => $typelogment->id]) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button href="javascript:;" class="ms-3" type="submit"><i
                                                                class='bx bxs-trash'></i></button>
                                                    </form>
                                                </div>  --}} </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="example2_previous"><a href="#" aria-controls="example2"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Prev</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                    class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="3" tabindex="0"
                                                    class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="4" tabindex="0"
                                                    class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="5" tabindex="0"
                                                    class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="example2" data-dt-idx="6" tabindex="0"
                                                    class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="example2_next"><a
                                                    href="#" aria-controls="example2" data-dt-idx="7"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection
