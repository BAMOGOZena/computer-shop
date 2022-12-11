@csrf
<div class="form-group">
    <label for="">Nom</label>
    <input required value="{{ old('nom_bout') ?? $boutique->nom_bout}}" type="text" name="nom_bout" id="nom_bout" class="form-control" placeholder="" aria-describedby="helpId">
    @error('nom_bout')
        <small  class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Adresse</label>
    <input required value="{{ old('adresse_bout') ?? $boutique->adresse_bout}}" type="text" name="adresse_bout" id="adresse_bout" class="form-control" placeholder="" aria-describedby="helpId">
    @error('adresse_bout')
        <small  class="text-danger">{{ $message }}</small>
    @enderror
</div>
<button type="submit" class="btn btn-primary btn-block btn-lg">Valider</button>


