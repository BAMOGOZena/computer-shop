<!doctype html>
<html lang="fr">
  <head>
        <title>{{ config('app.name') }}</title>
         <!-- Required meta tags -->
  </head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mt-2">Ajouter une nouvelle boutique</h1>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post" action="{{ route('boutiques.store') }}" enctype="multipart/form-data">

                @method("POST")
                @include('partials._boutique-form')
            </form>
        </div>
    </div>
</div>
</body>
</html>
