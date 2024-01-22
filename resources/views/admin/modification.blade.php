
@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="card-body">
        <form class="row g-3" method="POST" action="{{ url('update_ville/'. $villes->id) }}",enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="nom">Nom de la ville</label>
              <input type="text" class="form-control" value="{{ $villes->nom }}" name="nom" id="" placeholder="Entrer le nom de la ville">
            </div>
            <div class="form-group">
              <label for="descripton">Description de la ville </label>
              <input class="form-control" value="{{ $villes->description }}" name="description" rows="10" cols="30" placeholder="Description de la ville">
            </div>
            <button type="submit" class="btn btn-success mr-2">Ajouter</button>
            <button class="btn btn-light">Cancel</button>
          </form>



    </div>
  </div>
</div>
  @endsection
