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
              <th> Action </th>

            </tr>
          </thead>
          <tbody >

                @foreach ($datas as $data )
                <tr>
                     <td  > {{ $data->nom }} </td>
                     <td> {{ $data->description }} </td>
                     <td style="text-align:center"><a
                        href="{{ url('ville=' . $data->id) }}"><button type="button"
                            class="btn btn-light btn-sm radius-30 px-4"> Edit</button></a>
                </td>
                <td>
                    <form action="{{ route('delete_ville', ['ville' => $data->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" style="color:red">Supprimer</button>
                    </form>
                </td>
                </tr>
                @endforeach
          </tbody>
        </table>
        <br>
        <br>
        <a name="" id="" class="btn btn-primary" href="{{ route('ajouter') }}" role="button">Ajouter une ville</a>
    </div>
  </div>
</div>

@endsection
