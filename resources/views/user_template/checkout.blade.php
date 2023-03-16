@extends('user_template.layouts.template')
@section('main-content')
    <h2> Paso Final para generar tu pedido </h2>
    <div class="row">
        <div class="col-7">
            <div class="box_main">
                <h3> Producto va a ser enviado a - </h3>
                <p> Cantón : {{ $shipping_address->city_name }}</p>
                <p> Código Postal : {{ $shipping_address->postal_code }}</p>
                <p> Número de teléfono : {{ $shipping_address->phone_number }}</p>
            </div>


        </div>
        <div class="col-5">
            <div class="box_main">
                <h2> Tus productos finales son : </h2>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th> Nombre del Producto</th>
                            <th> Cantidad</th>
                            <th> Precio</th>
                        </tr>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart_items as $item)
                            <tr>
                                @php
                                    $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                @endphp
                                <td> {{ $product_name }}</td>
                                <td> {{ $item->quantity }}</td>
                                <td> {{ $item->price }} $</td>
                            </tr>
                            @php
                                $total = $total + $item->price;
                            @endphp
                        @endforeach
                        <tr>
                            <td></td>
                            <td> TOTAL </td>
                            <td> {{ $total }} $ </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <form action="" method="POST">
            @csrf
            <input type="submit" value="Cancelar Pedido" class="btn btn-danger mr-3"> 
        </form>
        <form action="{{ route('placeorder') }}" method="POST">
            @csrf   
            <input type="submit" value="Realizar Pedido" class="btn btn-primary mr-3"> 
        </form>

    </div>
@endsection
