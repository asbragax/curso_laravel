@extends('layouts.app')

@section('content')
<div class="table-responsive pt-5">
    <div class="col-sm-12 text-end">
        <a href="{{route('admin.stores.create')}}" class="btn btn-primary">Nova loja</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="bg-primary">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->phone}}</td>
                <td>
                    <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-warning btn-sm btn-icon"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

 {{$stores->links()}}
@endsection