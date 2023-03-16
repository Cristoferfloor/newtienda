@extends('user_template.layouts.template')
@section('main-content')
    <h2> Pagina de Añadir los productos al carrito</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="box_main">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th> Producto </th>
                            <th> Nombre del Producto</th>
                            <th> Cantidad</th>
                            <th> Precio</th>
                            <th> Acciones</th>
                        </tr>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart_items as $item)
                            <tr>
                                @php
                                    $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                    $img = App\Models\Product::where('id', $item->product_id)->value('product_img');
                                @endphp
                                <td> <img src="{{ asset($img) }}" style="height: 50px"> </td>
                                <td> {{ $product_name }}</td>
                                <td> {{ $item->quantity }}</td>
                                <td> {{ $item->price }} $</td>
                                <td> <a href="{{ route('removeitem', $item->id) }}" class="btn-btn-warning"> Remover</td>
                            </tr>
                            @php
                                $total = $total + $item->price;
                            @endphp
                        @endforeach
                        @if ($total > 0)
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="fw-bold"> TOTAL </td>
                                <td> {{ $total }} $ </td>
                                <td> <a href="{{ route('shippingaddress') }}" class="btn btn-primary"> Comprar</a>
                                </td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
