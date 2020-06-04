@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer un nouveau projet</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.projets.store') }}">
                        @csrf
                        {{ method_field('POST') }}

                        <div class="form-group row">
                            <label for="titre" class="col-md-2 col-form-label text-md-right">Titre du projet</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" required autofocus>

                                @error('titre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">Description du projet</label>

                            <div class="col-md-6">

                                <div class="@error('description') is-invalid @enderror"></div>
                                <textarea class="form-control" id="editor1" name="description" rows="10" cols="80">
                                                  Veuillez écrire la description de votre projet ici...
                                        </textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div><br>
            <div class="card">
                <div class="card-header">Gestion des projets</div>

                <div class="card-body">
                    <ul>
                        @foreach($projets as $projet)
                        <li><a href="{{route('admin.projets.edit', $projet->id)}}">{{ $projet->titre }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection