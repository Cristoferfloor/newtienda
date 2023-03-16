@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            {{-- <div class="product_details_pic"> --}}
            <div class="footer__about">
                <ul>
                    <li> <a href="{{ route('userprofile') }}">Dashboard</a></li>
                    <li> <a href="{{ route('pendingorders') }}"> Ordenes Pendientes</a></li>
                    <li> <a href="{{ route('history') }}"> Historial</a></li>
                    <li> <a href=""> Salir </a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="box_main">
                @yield('profilecontent')
            </div>
        </div>
    </div>
</div>
@endsection


