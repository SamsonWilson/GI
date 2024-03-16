@extends('layouts.Sadmin')

@section('contenu')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">LISTE DES TYPES DE LOGEMENT </div>


            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <div class="position-relative">
                            <input type="text" class="form-control ps-5 radius-30" placeholder="Recherche"> <span
                                class="position-absolute top-50 product-show translate-middle-y"><i
                                    class="bx bx-search"></i></span>
                        </div>
                        <div class="ms-auto"><a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0"><i
                                    class="bx bxs-plus-square"></i>Add New Order</a></div>
                        <div><a name="" id="" class="btn btn-primary"
                                href="{{ route('ajoutertypeClient') }}" role="button">Ajouter un type de
                                client </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light" style="text-align: center; vertical-align: middle;">
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;">Nom</th>
                                    <th style="text-align: center; vertical-align: middle;">Description </th>
                                    <th>View Details</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center; vertical-align: middle;">
                                @foreach ($typeClients as $typeclient)
                                    <tr>
                                        <td> {{ $typeclient->nom }} </td>
                                        {{--  <td>{{ $typeclient->nom }}</td>  --}}
                                        <td>{{ $typeclient->description }}</td>

                                        <td><button type="button" class="btn btn-light btn-sm radius-30 px-4">Les detail de
                                                la ville </button></td>
                                        <td>
                                            {{--  <div class="d-flex order-actions">
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
                                            </div>  --}}
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
@endsection
