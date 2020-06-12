@extends('adminlte::page')

@section('title', "Editar o categoria {$category->name}")

@section('content_header')
<h1>Editar o categoria <b>{{ $category->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.categories._partials.form')
                
            </form>
        </div>
    </div>
@stop