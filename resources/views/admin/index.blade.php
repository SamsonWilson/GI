@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="row justify-content-center">
      <div class="card-body">
        <table class="table table-bordered">


          <thead>
            <tr class=" table-primary">
              <th> Nom </th>
              <th> Description </th>
            </tr>
          </thead>
          <tbody >

                @foreach ($datas as $data )
                <tr>
                     <td  > {{ $data->nom }} </td>
                     <td> {{ $data->description }} </td>
                </tr>
                @endforeach
          </tbody>
        </table>
        <br>
        <br>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Ajouter une ville</a>
    </div>
  </div>
</div>
{{--  <div class="container">
    <div class="row">
        <div class="col -xs">
            <a name="" id="" class="btn btn-primary" href="#" role="button">Ajouter une ville</a>
        </div>

    </div>

</div>  --}}

@endsection
