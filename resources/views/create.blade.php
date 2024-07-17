@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
    <h1 class="mb-4">Cadastrar Produto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do produto:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição do produto:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ old('descricao') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="valor">Valor do produto:</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01" value="{{ old('valor') }}">
        </div>
        
        <div class="form-group">
            <label for="disponivel">Disponível para venda:</label>
            <select class="form-control" id="disponivel" name="disponivel" required>
                <option value="1" {{ old('disponivel') == '1' ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ old('disponivel') == '0' ? 'selected' : '' }}>Não</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="{{ route('index') }}" class="btn btn-secondary">Voltar para a listagem</a>
    </form>
@endsection
