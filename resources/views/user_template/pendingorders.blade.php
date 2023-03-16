@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
    Ordenes pendientes
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table">
        <tr>
            <th> Producto ID </th>
            <th> Precio </th>
        </tr>
        @foreach ($pending_orders as $order)
            <tr>
                <td> {{ $order->product_id }} </td>
                <td> {{ $order->total_price }} $</td>
            </tr>
        @endforeach
    </table>
@endsection
