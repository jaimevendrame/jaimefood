@extends('adminlte::page')

@section('title', "Detalhes do Mesas { $table->identify }")

@section('content_header')
<h1>Detalhes do Mesas <b>{{ $table->identify }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da Mesa: </strong> {{ $table->identify }}
                </li>

                <li>
                    <strong>Descrição: </strong> {{ $table->description }}
                </li>
            </ul>
            @include('admin.includes.alerts')
            <form action="{{ route('tables.destroy', $table->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR</button>
            </form>
        </div>
    </div>
@stop