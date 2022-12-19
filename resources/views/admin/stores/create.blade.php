@extends('layouts.app')

@section('content')
    
<form method="POST" class="form-horizontal" action="{{route('admin.stores.store')}}">
    <h1 class="text-center">Nova loja</h1>
    @csrf
    <div class="row">

        <div class="col-sm-12">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-sm-12">
            <label for="" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug">
        </div>
        <div class="col-sm-12 text-end mt-2">
            <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
        </div>
    </div>
</form>
@endsection