@extends('layouts.app')

@section('title', 'Listagem de Produtos')

@section('content')
    <h1 class="mb-4">Listagem de Produtos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->valor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('create') }}" class="btn btn-primary">Cadastrar Novo Produto</a>
@endsection
