<!doctype html>
<html lang="fr">
  <head>
        <title>{{ config('app.name') }}</title>
  </head>
  <body>
    <table class="table table-striped">

        <thead>
            <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($boutiques as $boutique )
            <tr>
                <td>{{ $boutique->nom_bout }}</td>
                <td>{{ $boutique->adresse_bout }}</td>
                <td class="d-flex">
                <a class="btn btn-primary btn-sm mr-2" href="{{ route('boutiques.edit', $boutique) }}"><i class="fas fa-edit">modifier</i></a>
                <a onclick="event.preventDefault();if(confirm('Etes-vous sûr de vouloir supprimer cette boutique?')) document.getElementById('{{ $boutique->id }}').submit()" class="btn btn-danger btn-sm" href="{{ route('boutiques.destroy', $boutique) }}"><i class="fas fa-trash">supprimer</i></a>
                <form style="display: none" id="{{ $boutique->id }}" method="post" action="{{ route('boutiques.destroy', $boutique) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @foreach ($boutiques as $boutique )
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul class="list-group">
                <li class="list-group-item list-group-item-primary">Nom : {{ $boutique->nom_bout }}</li>
                <li class="list-group-item list-group-item-primary">adresse : {{ $boutique->adresse_bout}}</li>
            </ul>
        </div>
    </div>
    @endforeach --}}
  </body>
</html>
