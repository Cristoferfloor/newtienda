@extends('user_template.layouts.template')
@section('main-content')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product_details_pic">
                        <div class="product_detailspic_item">
                            <img class="product_detailspic_item--large" src="{{ asset($product->product_img) }}"
                                alt="">
                        </div>
                        {{-- <div class="product_detailspic_slider owl-carousel">
                                <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                    src="img/product/details/thumb-1.jpg" alt="">
                                <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                    src="img/product/details/thumb-2.jpg" alt="">
                                <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                    src="img/product/details/thumb-3.jpg" alt="">
                                <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                    src="img/product/details/thumb-4.jpg" alt="">
                            </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_details_text">
                        <h3>{{ $product->product_name }}</h3>
                        {{-- <div class="product_details_rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div> --}}
                        <div class="product_details_price">$ {{ $product->price }}</div>
                        <p>{{ $product->product_short_des }}</p>
                        <form action="{{ route('addproducttocart') }}" method="POST">
                            @csrf
                            <div class="product_details_quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        {{-- <input type="hidden" value="1" name="quantity"> --}}
                                        <input type="number" min="1" name="quantity">
                                    </div>
                                </div>
                            </div>
                            {{-- <input class="primary-btn" type="submit" value="Add To Cart"> --}}
                            <input class="primary-btn" type="submit" value="Añadir al Carrito">
                            {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                        </form>
                        <ul>
                            <li><b>Disponible </b> <span>{{ $product->quantity }} unidades</span></li>
                            <li><b>Categoría</b> <span>{{ $product->product_category_name }}</span></li>
                            <li><b>Sub Categoría </b> <span>{{ $product->product_subcategory_name }}</span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product_details_tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Descripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Información</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li> --}}
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product_detailstab_desc">
                                    <h6>Información del producto</h6>
                                    <p> {{ $product->product_long_des }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product_detailstab_desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>

                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product_detailstab_desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-product"">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Productos relacionados </h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($related_products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->product_img) }}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                    {{-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> --}}
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
    </section>
    <!-- Related Product Section End -->
@endsection
