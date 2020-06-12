@include('admin.includes.alerts')
<div class="form-group">
    <label for="">Identificador da Mesa:</label>
    <input type="text" name="identify" class="form-control" placeholder="Identificador da Mesa:" value="{{ $table->identify ?? old('identify') }}">
</div>
<div class="form-group">
    <div class="form-group">
      <label>Descrição:</label>
      <textarea class="form-control" name="description" cols="30" rows="5">{{ $table->description ?? old('description') }}</textarea>
    </div>
</div>

<div class="form-group">
    <button class="btn btn-dark">Enviar</button>
</div>