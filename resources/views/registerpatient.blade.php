@extends('default')

@section('content')
<div class="container col-md-8 mt-4">
    <div class="card border border-1">
        <div class="card-header text-center" style="background-color: #001A13;">
            <h3>Enregistrer un patient</h3>
        </div>
        <div class="card-body">
            <form action="{{route('vu')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Mot de passe</label>
                    <input type="password" id="motdepasse" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Date de naissance</label>
                    <input type="date" id="datenaiss" name="datenaissance" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">medecin</label>
                    <select name="medecin_id" id="" class="form-control">
                        @foreach ($medecin as $med)
                        <option value="{{$med->id}}">{{$med->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" name="telephone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" class="form-control" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="adresse">Sexe</label>
                    <select name="sexe" id="" class="form-control">
                        <option value="">Sexe</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary center offset-5">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection