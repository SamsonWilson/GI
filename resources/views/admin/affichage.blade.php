@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="row justify-content-center">
      <div class="card-body">
        <table class="table table-bordered">
        <a name="" id="" class="btn btn-primary" href="{{ route('ajouterville') }}" role="button">Ajouter une ville</a>
        <br>
        <br>

          <thead>
            <tr class=" table-primary">
                <th> image de la ville  </th>
                <th> Nom </th>
              <th> Description </th>
              <th> Action </th>

            </tr>
          </thead>
          <tbody >

                @foreach ($datas as $data )
                <tr>
                   <td><img src= "/storage/imageville/{{$data->imageville}}" alt="Uploaded Image"> </td>
                     <td> {{ $data->nom }} </td>
                     <td> {{ $data->description }} </td>

                     <td style="text-align:center">
                    <div class="d-flex order-actions d-flex justify-content-center">

                         <a href="{{ url('ville=' . $data->id) }}"><button type="button"
                            class="btn btn-light btn-sm radius-30 px-4 ms-3"> Edit</button></a>

                            <form action="{{ route('delete_ville', ['ville' => $data->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" style="color:red">Supprimer</button>
                            </form>

                    </div>

                </td>

                </tr>
                @endforeach
          </tbody>
        </table>
        <br>
        <br>
    </div>
  </div>
</div>

@endsection
