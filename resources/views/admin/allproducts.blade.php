@extends('admin.layouts.template')
@section('page_title')
    Todos los Productos - Tienda
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pagina /</span> Todos los Productos</h4>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Todos los Productos Disponibles</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Producto</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                <img style="height: 100px;" src="{{asset($product->product_img)}}" alt="">
                                <br>
                                <a href="{{ route('editproductimg',$product->id) }}" class="btn btn-primary">Actualizar Imagen</a>
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('editproduct',$product->id) }}" class="btn btn-primary">Editar </a>
                                <a href="{{ route('deleteproduct',$product->id) }}" class="btn btn-warning"> Borrar </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
