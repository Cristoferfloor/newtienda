@extends('user_template.layouts.template')
@section('main-content')
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{ $category->category_name }} </h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            {{-- <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            @foreach ($products as $product)
                                <li data-filter=".fastfood">{{ $product->product_subcategory_name }}</li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->product_img) }}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><i class="fa fa-shopping-cart""></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{ $product->product_name }}</a></h6>
                                <h5>$ {{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
