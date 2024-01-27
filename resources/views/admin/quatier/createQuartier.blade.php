
@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="card-body">
        <form class="forms-sample" action="{{ route('enregistrerQuartier') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nom"> Nom du Quartier </label>
              <input type="text" class="form-control" name="nom" id="" placeholder="Entrer le nom de la ville">
            </div>
            <div class="form-group">
              <label for="descripton"> Description du Quartier </label>
              <textarea class="form-control" name="description" rows="10" cols="30" placeholder="Description de la ville"></textarea>
            </div>
            <div class="form-group">
                <label for="image"> Images </label>
                <input type="file" class="form-control-file" id="image" name="imagequartier">
              </div>
              <div class="form-group">
                <label for="image"> villes </label>
                    <select name="ville_id">
                        <option value =''> Ville </option>
                        @foreach ($datas as $data )
                            <option value ='{{$data->id}}'> {{ $data->nom }} </option>
                         @endforeach

                    </select>
              </div>
            <button type="submit" class="btn btn-success mr-2">Ajouter</button>
            <button class="btn btn-light">Cancel</button>
          </form>



    </div>
  </div>
</div>
  @endsection
