@extends('user_template.layouts.template')
@section('main-content')
    <h2> Página para proporcionar Información </h2>
    <div class="row">
        <div class="col-12">
            <div class="box_main">
                <form action="{{ route('addshippingaddress') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="phone_number">Número de Teléfono</label>
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="city_name">Cantón </label>
                        <input type="text" class="form-control" name="city_name">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Código Postal</label>
                        <input type="text" class="form-control" name="postal_code">
                    </div>
                    <input type="submit" value="Siguiente" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
