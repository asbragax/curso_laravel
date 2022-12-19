@extends('layouts.app')

@section('content')
    
<form method="POST" class="form-horizontal" action="{{route('admin.products.update', ['product'=>$product->id])}}">
    <h1 class="text-center">Editar produto</h1>
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-sm-12">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>
        <div class="col-sm-12">
            <label for="" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Preço</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Conteúdo</label>
            <input type="text" class="form-control" name="body" value="{{$product->body}}">
        </div>
        <div class="col-sm-4">
            <label for="" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" value="{{$product->slug}}">
        </div>
        <div class="col-sm-12 text-end mt-2">
            <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i> Alterar</button>
        </div>
    </div>
</form>
@endsection