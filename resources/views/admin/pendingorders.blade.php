@extends('admin.layouts.template')
@section('page_title')
    Ordenes Pendientes - Tienda
@endsection
@section('content')
    <div class="conteiner my-5" >
        <div class="card">
            <div class="card-title"> <h2 class="text-center">Ordenes Pendientes</h2> </div>
            <div class="card-body">

                <table class="table">
                    <tr>
                        <th>ID del usuario </th>
                        <th>Información del Envío</th>
                        <th>ID del producto </th>
                        <th>Cantidad</th>
                        <th>Total a Pagar </th>
                        <th>Acción</th>
                    </tr>

                    @foreach ($pending_orders as $order)
                        <tr>
                            <td> {{ $order->userid }}</td>
                            <td>
                                <ul>
                                    <li>Número de Teléfono : {{ $order->shipping_phoneNumber }}</li>
                                    <li>Ciudad : {{ $order->shipping_city }} </li>
                                    <li>Código Postal : {{ $order->shipping_postalcode }} </li>
                                </ul>
                            </td>
                            <td> {{ $order->product_id }}</td>
                            <td> {{ $order->quantity }}</td>
                            <td> {{ $order->total_price }} $ </td>
                            <td> <a href="" class="btn btn-success">Probar Ahora </a></td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
