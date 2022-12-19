@extends('layouts.app')

@section('content')
    
<form method="POST" class="form-horizontal" action="{{route('admin.stores.update', ['store'=>$store->id])}}">
    <h1 class="text-center">Editar loja</h1>
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-sm-12">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{$store->name}}">
        </div>
        <div class="col-sm-12">
            <label for="" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="description" value="{{$store->description}}">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="phone" value="{{$store->phone}}">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email" value="{{$store->email}}">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" value="{{$store->slug}}">
        </div>
        <div class="col-sm-12 text-end mt-2">
            <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i> Alterar</button>
        </div>
    </div>
</form>
@endsection