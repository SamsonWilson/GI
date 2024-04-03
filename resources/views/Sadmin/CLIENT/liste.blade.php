@extends('layouts.Sadmin')

@section('contenu')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tables
                    @foreach (Auth::user()->roles as $role)
                        {{ $role->nom }}
                    @endforeach
                </div>
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

            <h6 class="mb-0 text-uppercase">Listes des clients </h6>
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
                                                    style="width: 157.125px;">NOM ET PRENOM </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 262.656px;">LOCALITE</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 115.719px;">TELEPHONE</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                                    style="width: 52.6875px;">TELEPHONE</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="width: 109.688px;">EMAIL</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Salary: activate to sort column ascending"
                                                    style="width: 87.125px;">TYPE DE CLIENTS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $client)
                                                <tr role="row" class="odd">
                                                    {{--  <td class="sorting_1">{{ $client->nom }} {{ $client->prenom }}</td>  --}}
                                                    <td>{{ $client->client_nom }}</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
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
