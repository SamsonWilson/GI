
@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="card-body">
        <form class="forms-sample" action="{{ route('ajouterville') }}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="nom">Nom de la ville</label>
              <input type="text" class="form-control" name="nom" id="" placeholder="Entrer le nom de la ville">
            </div>
            <div class="form-group">
              <label for="descripton">Description de la ville </label>
              <textarea class="form-control" name="description" rows="10" cols="30" placeholder="Description de la ville"></textarea>
            </div>
            <button type="submit" class="btn btn-success mr-2">Ajouter</button>
            <button class="btn btn-light">Cancel</button>
          </form>



    </div>
  </div>
</div>
  @endsection
