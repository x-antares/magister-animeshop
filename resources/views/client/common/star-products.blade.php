<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Обрані товари</span></h2>
    <div class="row px-xl-5">
        @foreach($featuredProducts as $featuredProduct)
            @include('client.common.card-product', ['product' => $featuredProduct])
{{--            @dd($featuredProduct)--}}
{{--            @dd($featuredProduct->getMyFirstMediaUrl('image'))--}}
{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <div class="product-item bg-light mb-4">--}}
{{--                    <div class="product-img position-relative overflow-hidden">--}}
{{--    --}}{{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_1878e1d2d0.webp--}}{{--{{ $featuredProduct->getMyFirstMediaUrl('image') }}--}}{{--" alt="">--}}

{{--                        <div class="product-action">--}}
{{--                            <a class="btn btn-outline-dark btn-square js-simple-add-to-cart" data-product-id="{{ $featuredProduct->id }}"><i class="fa fa-shopping-cart"></i></a>--}}
{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                            --}}{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                            --}}{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center py-4">--}}
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
{{--                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;--}}
{{--    text-overflow: ellipsis;--}}
{{--    white-space: nowrap;--}}
{{--    display: block;--}}
{{--    padding: 2px 10px;" style="max-width: 100%;--}}
{{--    text-overflow: ellipsis;--}}
{{--    white-space: nowrap;--}}
{{--    display: block;--}}
{{--    padding: 2px 10px;" href="{{ $featuredProduct->url() }}">Сумка - бананка «Marvel Spider-Man»--}}{{--{{ $featuredProduct->name }}--}}{{--</a>--}}
{{--                        <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                            <h5>${{ $featuredProduct->price }}</h5><h6 class="text-muted ml-2">--}}{{--<del>${{ $featuredProduct->price }}</del>--}}{{--</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        @endforeach

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <div class="product-item bg-light mb-4">--}}
{{--                    <div class="product-img position-relative overflow-hidden">--}}
{{--                        --}}{{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_FIGURE-170988_01.webp" alt="">--}}

{{--                        <div class="product-action">--}}
{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                            --}}{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                            --}}{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center py-4">--}}
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
{{--                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Оригінальна аніме фігурка «Azur Lane Janus Fear of Changing... Clothes Ver. 1/7 Complete Figure»</a>--}}
{{--                        <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">--}}{{--<del>${{ $featuredProduct->price }}</del>--}}{{--</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <div class="product-item bg-light mb-4">--}}
{{--                    <div class="product-img position-relative overflow-hidden">--}}
{{--                        --}}{{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_1878e1d2d0.webp" alt="">--}}

{{--                        <div class="product-action">--}}
{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                            --}}{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                            --}}{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center py-4">--}}
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
{{--                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Сумка - бананка «Marvel Spider-Man»</a>--}}
{{--                        <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">--}}{{--<del>${{ $featuredProduct->price }}</del>--}}{{--</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        {{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_66931d8ff6.webp" alt="">

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
{{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
                        </div>
                    </div>
                    <div class="text-center py-4">
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Сумка - бананка «Naruto»</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">{{--<del>${{ $featuredProduct->price }}</del>--}}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        {{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_hata-ramune-muscat-200-720x720_720_720.webp" alt="">

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
                        </div>
                    </div>
                    <div class="text-center py-4">
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Напій «Ramune Muscat» [Япония]</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">{{--<del>${{ $featuredProduct->price }}</del>--}}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        {{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_5013.webp" alt="">

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
                        </div>
                    </div>
                    <div class="text-center py-4">
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Напій «Ramune Green Apple»</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">{{--<del>${{ $featuredProduct->price }}</del>--}}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        {{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_4902494230023-750x750.webp" alt="">

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
                        </div>
                    </div>
                    <div class="text-center py-4">
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Напій «Ramune Mochi»</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">{{--<del>${{ $featuredProduct->price }}</del>--}}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        {{--                    <img class="img-fluid w-100" src="img/product-{{ $loop->index + 1 }}.jpg" alt="">--}}
                        <img class="img-fluid w-100" src="https://www.pulsar.ua/files/webp/img_products/full_51I_wy_5ESL._AC_UF1000_1000_QL80_.webp" alt="">

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
                            {{--                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
                        </div>
                    </div>
                    <div class="text-center py-4">
{{--                        <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                            <small> ({{ rand(0, 59) }}) відгуків</small>--}}
{{--                        </div>--}}
                        <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Японські батончики Kitkat [KitKat Strawberry Chocolate Cake]</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{ rand(10, 100) }}</h5><h6 class="text-muted ml-2">{{--<del>${{ $featuredProduct->price }}</del>--}}</h6>
                        </div>
                    </div>
                </div>
            </div>

{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                        <small class="far fa-star text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="far fa-star text-primary mr-1"></small>--}}
{{--                        <small class="far fa-star text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                        <small class="far fa-star text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <div class="product-item bg-light mb-4">--}}
{{--                <div class="product-img position-relative overflow-hidden">--}}
{{--                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">--}}
{{--                    <div class="product-action">--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center py-4">--}}
{{--                    <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    padding: 2px 10px;" href="">Product Name Goes Here</a>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                        <small class="far fa-star text-primary mr-1"></small>--}}
{{--                        <small class="far fa-star text-primary mr-1"></small>--}}
{{--                        <small>(99)</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!-- Products End -->
