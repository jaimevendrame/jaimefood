@include('admin.includes.alerts')
<div class="form-group">
    <label for="">Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $category->name ?? old('name') }}">
</div>
<div class="form-group">
    <div class="form-group">
      <label>Descrição:</label>
      <textarea class="form-control" name="description" cols="30" rows="5">{{ $category->description ?? old('description') }}</textarea>
    </div>
</div>

<div class="form-group">
    <button class="btn btn-dark">Enviar</button>
</div>