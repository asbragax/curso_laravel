@extends('layouts.app')

@section('content')
<div class="table-responsive pt-5">
    <div class="col-sm-12 text-end">
        <a href="{{route('admin.products.create')}}" class="btn btn-primary">Novo produto</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-primary">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Loja</th>
                <th>Preço</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->store->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="post">
                        <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-warning btn-sm btn-icon"><i class="fa fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button submit class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

 {{$products->links()}}
@endsection