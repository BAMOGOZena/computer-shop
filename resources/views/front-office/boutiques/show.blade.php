<!doctype html>
<html lang="fr">
  <head>
        <title>{{ config('app.name') }}</title>
         <!-- Required meta tags -->
  </head>
  <body>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-primary">Nom : {{ $boutique->nom_bout }}</li>
            <li class="list-group-item list-group-item-primary">adresse : {{ $boutique->adresse_bout}}</li>
        </ul>
    </div>
</div>
</body>
</html>
