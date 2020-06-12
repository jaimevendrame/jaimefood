@include('admin.includes.alerts')
<div class="form-group">
    <label>Título:</label>
    <input type="text" name="title" class="form-control" placeholder="Título:" value="{{ $product->title ?? old('title') }}">
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name="price" class="form-control" placeholder="Preço:" value="{{ $product->price ?? old('price') }}">
</div>
<div class="form-group">
    <label>* Imagem:</label>
    <input type="file" name="image" class="form-control">
</div> 
<div class="form-group">
    <div class="form-group">
      <label>Descrição:</label>
      <textarea class="form-control" name="description" cols="30" rows="5">{{ $product->description ?? old('description') }}</textarea>
    </div>
</div>

<div class="form-group">
    <button class="btn btn-dark">Enviar</button>
</div>